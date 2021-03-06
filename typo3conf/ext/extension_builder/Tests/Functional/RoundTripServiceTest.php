<?php
namespace EBT\ExtensionBuilder\Tests\Functional;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use EBT\ExtensionBuilder\Domain\Model\DomainObject\StringProperty;

class RoundTripServiceTest extends \EBT\ExtensionBuilder\Tests\BaseFunctionalTest
{
    /**
     * @var \EBT\ExtensionBuilder\Service\ObjectSchemaBuilder
     */
    protected $objectSchemaBuilder = null;

    public function setUp()
    {
        parent::setUp();
        $this->objectSchemaBuilder = $this->objectManager->get('EBT\\ExtensionBuilder\\Service\\ObjectSchemaBuilder');
    }

    /**
     *
     */
    public function reconstitutesAliasDeclarations()
    {
    }

    /**
     * Write a simple model class for a non aggregate root domain obbject
     * @test
     */
    function relatedMethodsReflectRenamingAProperty()
    {
        $modelName = 'model7';
        $this->generateInitialModelClassFile($modelName);
        // create an "old" domainObject
        $domainObject = $this->buildDomainObject($modelName);
        $this->assertTrue(is_object($domainObject), 'No domain object');

        $property = new StringProperty('prop1');
        $uniqueIdentifier1 = md5(microtime() . 'prop1');
        $property->setUniqueIdentifier($uniqueIdentifier1);
        $domainObject->addProperty($property);
        $uniqueIdentifier2 = md5(microtime() . 'model');
        $domainObject->setUniqueIdentifier($uniqueIdentifier2);

        $this->roundTripService->_set('previousDomainObjects', array($domainObject->getUniqueIdentifier() => $domainObject));
        $templateClass = $this->codeTemplateRootPath . 'Classes/Domain/Model/Model.phpt';
        // create an "old" class object.
        $modelClassObject = $this->classBuilder->generateModelClassFileObject($domainObject, $templateClass, false)->getFirstClass();
        $this->assertTrue(is_object($modelClassObject), 'No class object');

        // Check that the getter/methods exist
        $this->assertTrue($modelClassObject->methodExists('getProp1'));
        $this->assertTrue($modelClassObject->methodExists('setProp1'));

        // set the class object manually, this is usually parsed from an existing class file
        $this->roundTripService->_set('classObject', $modelClassObject);

        // build a new domain object with the same unique identifiers
        $newDomainObject = $this->buildDomainObject('Dummy');
        $property = new \EBT\ExtensionBuilder\Domain\Model\DomainObject\BooleanProperty('newProp1Name');
        $property->setUniqueIdentifier($uniqueIdentifier1);
        $property->setRequired(true);
        $newDomainObject->addProperty($property);
        $newDomainObject->setUniqueIdentifier($uniqueIdentifier2);

        // now the slass object should be updated
        $this->roundTripService->_call('updateModelClassProperties', $domainObject, $newDomainObject);

        $classObject = $this->roundTripService->_get('classObject');
        $this->assertTrue($classObject->methodExists('getNewProp1Name'));
        $this->assertTrue($classObject->methodExists('setNewProp1Name'));
    }

    /**
     *
     * @test
     */
    function relatedMethodsReflectRenamingARelation()
    {
        $modelName = 'Model8';
        $this->generateInitialModelClassFile($modelName);
        // create an "old" domainObject
        $domainObject = $this->buildDomainObject($modelName);
        $this->assertTrue(is_object($domainObject), 'No domain object');

        $relationJsonConfiguration = array(
            'lazyLoading' => 0,
            'propertyIsExcludeField' => 1,
            'relationDescription' => '',
            'relationName' => 'children',
            'relationType' => 'manyToMany',
        );

        $relation = $this->objectSchemaBuilder->buildRelation($relationJsonConfiguration, $domainObject);

        $uniqueIdentifier1 = md5(microtime() . 'children');
        $relation->setUniqueIdentifier($uniqueIdentifier1);
        $relation->setForeignModel($this->buildDomainObject('ChildModel'));
        $domainObject->addProperty($relation);
        $uniqueIdentifier2 = md5(microtime() . 'Model8');
        $domainObject->setUniqueIdentifier($uniqueIdentifier2);

        $this->roundTripService->_set('previousDomainObjects', array($domainObject->getUniqueIdentifier() => $domainObject));
        $templateClass = $this->codeTemplateRootPath . 'Classes/Domain/Model/Model.phpt';
        // create an "old" class object.
        $modelClassObject = $this->classBuilder->generateModelClassFileObject($domainObject, $templateClass, false)->getFirstClass();
        $this->assertTrue(is_object($modelClassObject), 'No class object');

        // Check that the property related methods exist
        $this->assertTrue($modelClassObject->methodExists('setChildren'));
        $this->assertTrue($modelClassObject->methodExists('getChildren'));
        $this->assertTrue($modelClassObject->methodExists('addChild'));
        $this->assertTrue($modelClassObject->methodExists('removeChild'));

        // set the class object manually, this is usually parsed from an existing class file
        $this->roundTripService->_set('classObject', $modelClassObject);

        // build a new domain object with the same unique identifiers
        $newDomainObject = $this->buildDomainObject('Model8');

        $newRelation = $this->objectSchemaBuilder->buildRelation($relationJsonConfiguration, $newDomainObject);
        $newRelation->setUniqueIdentifier($uniqueIdentifier1);
        $newRelation->setForeignModel($this->buildDomainObject('ChildModel'));

        $newRelation->setName('posts');

        $newDomainObject->addProperty($newRelation);
        $newDomainObject->setUniqueIdentifier($uniqueIdentifier2);

        // now the slass object should be updated
        $this->roundTripService->_call('updateModelClassProperties', $domainObject, $newDomainObject);
        $modifiedModelClassObject = $this->roundTripService->_get('classObject');

        $this->assertTrue($modifiedModelClassObject->methodExists('setPosts'));
        $this->assertTrue($modifiedModelClassObject->methodExists('getPosts'));
        $this->assertTrue($modifiedModelClassObject->methodExists('addPost'));
        $this->assertTrue($modifiedModelClassObject->methodExists('removePost'));
    }

    /**
     * Write a simple model class for a non aggregate root domain obbject
     * @test
     */
    function relatedMethodsReflectRenamingARelatedModel()
    {
        $modelName = 'Model8';
        $this->generateInitialModelClassFile($modelName);
        // create an "old" domainObject
        $domainObject = $this->buildDomainObject($modelName);
        $this->assertTrue(is_object($domainObject), 'No domain object');

        $relationJsonConfiguration = array(
            'lazyLoading' => 0,
            'propertyIsExcludeField' => 1,
            'relationDescription' => '',
            'relationName' => 'children',
            'relationType' => 'manyToMany',
        );

        $relation = $this->objectSchemaBuilder->buildRelation($relationJsonConfiguration, $domainObject);

        $uniqueIdentifier1 = md5(microtime() . 'children');
        $relation->setUniqueIdentifier($uniqueIdentifier1);
        $relation->setForeignModel($this->buildDomainObject('ChildModel'));
        $domainObject->addProperty($relation);
        $uniqueIdentifier2 = md5(microtime() . 'Model8');
        $domainObject->setUniqueIdentifier($uniqueIdentifier2);

        $this->roundTripService->_set('previousDomainObjects', array($domainObject->getUniqueIdentifier() => $domainObject));

        // create an "old" class object.
        $modelClassObject = $this->classBuilder->generateModelClassFileObject(
            $domainObject,
            $this->modelClassTemplatePath,
            false
        )->getFirstClass();

        $this->assertTrue(is_object($modelClassObject), 'No class object');

        // Check that the property related methods exist
        $this->assertTrue($modelClassObject->methodExists('setChildren'));
        $this->assertTrue($modelClassObject->methodExists('getChildren'));
        $this->assertTrue($modelClassObject->methodExists('addChild'));
        $this->assertTrue($modelClassObject->methodExists('removeChild'));

        // set the class object manually, this is usually parsed
        // from an existing class file
        $this->roundTripService->_set('classObject', $modelClassObject);

        // build a new domain object with the same unique identifiers
        $newDomainObject = $this->buildDomainObject('Model8');

        $newRelation = $this->objectSchemaBuilder->buildRelation($relationJsonConfiguration, $domainObject);
        $newRelation->setUniqueIdentifier($uniqueIdentifier1);
        $newRelation->setForeignModel($this->buildDomainObject('RenamedModel'));

        $newRelation->setName('children');

        $newDomainObject->addProperty($newRelation);
        $newDomainObject->setUniqueIdentifier($uniqueIdentifier2);

        // now the class object should be updated
        $this->roundTripService->_call('updateModelClassProperties', $domainObject, $newDomainObject);
        $modifiedModelClassObject = $this->roundTripService->_get('classObject');

        $newAddMethod = $modifiedModelClassObject->getMethod('addChild');
        $parameters = $newAddMethod->getParameters();
        $this->assertEquals(count($parameters), 1);
        $addParameter = current($parameters);
        $this->assertEquals($addParameter->getTypeHint(), '\\EBT\\Dummy\\Domain\\Model\\RenamedModel');

        $newRemoveMethod = $modifiedModelClassObject->getMethod('removeChild');
        $parameters = $newRemoveMethod->getParameters();
        $this->assertEquals(count($parameters), 1);
        $addParameter = current($parameters);
        $this->assertEquals($addParameter->getTypeHint(), '\\EBT\\Dummy\\Domain\\Model\\RenamedModel');
    }
}
