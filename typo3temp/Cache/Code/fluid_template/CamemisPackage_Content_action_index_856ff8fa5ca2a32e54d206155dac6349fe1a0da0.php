<?php
class FluidCache_CamemisPackage_Content_action_index_856ff8fa5ca2a32e54d206155dac6349fe1a0da0 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['id'] = 'template-default';
// Rendering Array
$array2 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments3 = array();
$arguments3['path'] = 'Images/Icons/Page/template-default.png';
$arguments3['extensionName'] = NULL;
$arguments3['absolute'] = false;
$renderChildrenClosure4 = function() {return NULL;};
$array2['icon'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
$arguments1['options'] = $array2;
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['icon'] = NULL;
$arguments1['mergeValues'] = false;
$arguments1['enabled'] = true;
$arguments1['wizardTab'] = NULL;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments7 = array();
$arguments7['name'] = 'grid';
$arguments7['label'] = NULL;
$arguments7['variables'] = array (
);
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments10 = array();
$arguments10['name'] = 'row';
$arguments10['label'] = NULL;
$arguments10['variables'] = array (
);
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
					';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments13 = array();
$arguments13['colPos'] = '0';
$arguments13['name'] = 'main';
$arguments13['label'] = NULL;
$arguments13['colspan'] = NULL;
$arguments13['rowspan'] = NULL;
$arguments13['style'] = NULL;
$arguments13['variables'] = array (
);
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output12 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
				';
return $output12;
};

$output9 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			';
return $output9;
};

$output6 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
		';
return $output6;
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	';


return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output15 = '';

$output15 .= '
		';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments16 = array();
$arguments16['column'] = '0';
$arguments16['order'] = 'sorting';
$arguments16['sortDirection'] = 'ASC';
$arguments16['pageUid'] = 0;
$arguments16['contentUids'] = NULL;
$arguments16['sectionIndexOnly'] = false;
$arguments16['loadRegister'] = NULL;
$arguments16['render'] = true;
$arguments16['hideUntranslated'] = false;
$arguments16['limit'] = NULL;
$arguments16['slide'] = 0;
$arguments16['slideCollect'] = 0;
$arguments16['slideCollectReverse'] = 0;
$arguments16['as'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '
	';


return $output15;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output19 = '';

$output19 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments20 = array();
$arguments20['name'] = 'Default';
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output19 .= $viewHelper22->initializeArgumentsAndRender();

$output19 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments23 = array();
$arguments23['name'] = 'Configuration';
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments26 = array();
$arguments26['id'] = 'template-default';
// Rendering Array
$array27 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments28 = array();
$arguments28['path'] = 'Images/Icons/Page/template-default.png';
$arguments28['extensionName'] = NULL;
$arguments28['absolute'] = false;
$renderChildrenClosure29 = function() {return NULL;};
$array27['icon'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
$arguments26['options'] = $array27;
$arguments26['label'] = NULL;
$arguments26['description'] = NULL;
$arguments26['icon'] = NULL;
$arguments26['mergeValues'] = false;
$arguments26['enabled'] = true;
$arguments26['wizardTab'] = NULL;
$arguments26['compact'] = false;
$arguments26['variables'] = array (
);
$arguments26['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments26['extensionName'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments32 = array();
$arguments32['name'] = 'grid';
$arguments32['label'] = NULL;
$arguments32['variables'] = array (
);
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments35 = array();
$arguments35['name'] = 'row';
$arguments35['label'] = NULL;
$arguments35['variables'] = array (
);
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
					';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments38 = array();
$arguments38['colPos'] = '0';
$arguments38['name'] = 'main';
$arguments38['label'] = NULL;
$arguments38['colspan'] = NULL;
$arguments38['rowspan'] = NULL;
$arguments38['style'] = NULL;
$arguments38['variables'] = array (
);
$arguments38['extensionName'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};

$output37 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
				';
return $output37;
};

$output34 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
			';
return $output34;
};

$output31 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
		';
return $output31;
};

$output25 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments26, $renderChildrenClosure30, $renderingContext);

$output25 .= '
	';
return $output25;
};

$output19 .= '';

$output19 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments40 = array();
$arguments40['name'] = 'Content';
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
		';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments43 = array();
$arguments43['column'] = '0';
$arguments43['order'] = 'sorting';
$arguments43['sortDirection'] = 'ASC';
$arguments43['pageUid'] = 0;
$arguments43['contentUids'] = NULL;
$arguments43['sectionIndexOnly'] = false;
$arguments43['loadRegister'] = NULL;
$arguments43['render'] = true;
$arguments43['hideUntranslated'] = false;
$arguments43['limit'] = NULL;
$arguments43['slide'] = 0;
$arguments43['slideCollect'] = 0;
$arguments43['slideCollectReverse'] = 0;
$arguments43['as'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output42 .= $viewHelper45->initializeArgumentsAndRender();

$output42 .= '
	';
return $output42;
};

$output19 .= '';

$output19 .= '
</div>
';


return $output19;
}


}
#1473312849    11332     