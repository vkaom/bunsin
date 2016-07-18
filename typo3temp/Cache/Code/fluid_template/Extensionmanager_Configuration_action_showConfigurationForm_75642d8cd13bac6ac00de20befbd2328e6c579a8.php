<?php
class FluidCache_Extensionmanager_Configuration_action_showConfigurationForm_75642d8cd13bac6ac00de20befbd2328e6c579a8 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'extConfTemplate.headline';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments3 = array();
$arguments3['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$arguments3['doubleEncode'] = true;
$renderChildrenClosure4 = function() {return NULL;};
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());

$output0 .= (!is_string($value5) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments3['encoding'] !== NULL ? $arguments3['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments3['doubleEncode']));

$output0 .= '
	</h1>
';


return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output6 = '';

$output6 .= '
	<div role="tabpanel">
		<ul class="nav nav-tabs" role="tablist">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = $currentVariableContainer->getOrNull('configuration');
$arguments7['as'] = 'category';
$arguments7['key'] = 'categoryNumber';
$arguments7['iteration'] = 'iteration';
$arguments7['reverse'] = false;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'name', $renderingContext));
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
					<li role="presentation" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode'])));
$arguments13['then'] = 'active';
$arguments13['else'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure17, $renderingContext);

$output12 .= '">
						<a class="text-capitalize" href="#category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = $currentVariableContainer->getOrNull('categoryNumber');
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output12 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output12 .= '" aria-controls="category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = $currentVariableContainer->getOrNull('categoryNumber');
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output12 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output12 .= '" role="tab" data-toggle="tab">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments24 = array();
$arguments24['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'name', $renderingContext);
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = NULL;
$arguments24['doubleEncode'] = true;
$renderChildrenClosure25 = function() {return NULL;};
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());

$output12 .= (!is_string($value26) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments24['encoding'] !== NULL ? $arguments24['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments24['doubleEncode']));

$output12 .= '
						</a>
					</li>
				';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
		</ul>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments27 = array();
$arguments27['action'] = 'save';
$arguments27['name'] = 'configurationform';
$arguments27['id'] = 'configurationform';
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['controller'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['pluginName'] = NULL;
$arguments27['pageUid'] = NULL;
$arguments27['object'] = NULL;
$arguments27['pageType'] = 0;
$arguments27['noCache'] = false;
$arguments27['noCacheHash'] = false;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['additionalParams'] = array (
);
$arguments27['absolute'] = false;
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['fieldNamePrefix'] = NULL;
$arguments27['actionUri'] = NULL;
$arguments27['objectName'] = NULL;
$arguments27['hiddenFieldClassName'] = NULL;
$arguments27['enctype'] = NULL;
$arguments27['method'] = NULL;
$arguments27['onreset'] = NULL;
$arguments27['onsubmit'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
			<div class="tab-content">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments30 = array();
$arguments30['name'] = 'extensionKey';
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['property'] = NULL;
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output29 .= $viewHelper32->initializeArgumentsAndRender();

$output29 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments33 = array();
$arguments33['each'] = $currentVariableContainer->getOrNull('configuration');
$arguments33['as'] = 'category';
$arguments33['key'] = 'categoryNumber';
$arguments33['iteration'] = 'iteration';
$arguments33['reverse'] = false;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'name', $renderingContext));
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
						<div role="tabpanel" class="tab-pane ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments39 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());
$arguments39['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode'])));
$arguments39['then'] = 'active';
$arguments39['else'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure43, $renderingContext);

$output38 .= '" id="category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = $currentVariableContainer->getOrNull('categoryNumber');
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output38 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));

$output38 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments47 = array();
$arguments47['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'subcategories', $renderingContext);
$arguments47['as'] = 'subcategory';
$arguments47['key'] = '';
$arguments47['reverse'] = false;
$arguments47['iteration'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
								<div class="form-section">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments50 = array();
// Rendering Boolean node
$arguments50['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subcategory'), 'label', $renderingContext));
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments53 = array();
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '
											<h2 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subcategory'), 'label', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = NULL;
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() {return NULL;};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output55 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments56['encoding'] !== NULL ? $arguments56['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments56['doubleEncode']));

$output55 .= '</h2>
										';
return $output55;
};

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments59 = array();
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments63 = array();
$arguments63['subject'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'subcategories', $renderingContext);
};
$arguments62['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext), 1);
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
												<h3 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments67 = array();
$arguments67['key'] = 'extConfTemplate.other';
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['htmlEscape'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '</h3>
											';
return $output66;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure65, $renderingContext);

$output61 .= '
										';
return $output61;
};

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output52 .= '
									';
return $output52;
};
$arguments50['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
											<h2 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subcategory'), 'label', $renderingContext);
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = NULL;
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() {return NULL;};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());

$output69 .= (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments70['encoding'] !== NULL ? $arguments70['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments70['doubleEncode']));

$output69 .= '</h2>
										';
return $output69;
};
$arguments50['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments74 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments75 = array();
$arguments75['subject'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'subcategories', $renderingContext);
};
$arguments74['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext), 1);
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
												<h3 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments79 = array();
$arguments79['key'] = 'extConfTemplate.other';
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['htmlEscape'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$renderChildrenClosure80 = function() {return NULL;};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '</h3>
											';
return $output78;
};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure77, $renderingContext);

$output73 .= '
										';
return $output73;
};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments81 = array();
$arguments81['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subcategory'), 'items', $renderingContext);
$arguments81['as'] = 'item';
$arguments81['key'] = '';
$arguments81['reverse'] = false;
$arguments81['iteration'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
										<div class="form-group form-group-dashed">
											<label for="em-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'name', $renderingContext);
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output83 .= (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));

$output83 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'labelHeadline', $renderingContext);
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output83 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output83 .= '<br>
												<span class="text-monospace text-normal">
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
$arguments90['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'name', $renderingContext);
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = NULL;
$arguments90['doubleEncode'] = true;
$renderChildrenClosure91 = function() {return NULL;};
$value92 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure91());

$output83 .= (!is_string($value92) ? $value92 : htmlspecialchars($value92, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments90['encoding'] !== NULL ? $arguments90['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments90['doubleEncode']));

$output83 .= '.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'name', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output83 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output83 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments96 = array();
// Rendering Boolean node
$arguments96['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'type', $renderingContext), 'user');
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments99 = array();
// Rendering Array
$array100 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments101 = array();
$output102 = '';

$output102 .= 'extConfTemplate.type.';

$output102 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'type', $renderingContext);
$arguments101['key'] = $output102;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['htmlEscape'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$renderChildrenClosure103 = function() {return NULL;};
$array100['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure103, $renderingContext);
$arguments99['map'] = $array100;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments106 = array();
// Rendering Boolean node
$arguments106['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('label'));
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
																(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments109 = array();
$arguments109['value'] = $currentVariableContainer->getOrNull('label');
$arguments109['keepQuotes'] = false;
$arguments109['encoding'] = NULL;
$arguments109['doubleEncode'] = true;
$renderChildrenClosure110 = function() {return NULL;};
$value111 = ($arguments109['value'] !== NULL ? $arguments109['value'] : $renderChildrenClosure110());

$output108 .= (!is_string($value111) ? $value111 : htmlspecialchars($value111, ($arguments109['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments109['encoding'] !== NULL ? $arguments109['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments109['doubleEncode']));

$output108 .= ')
															';
return $output108;
};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
														';
return $output105;
};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments99, $renderChildrenClosure104, $renderingContext);

$output98 .= '
													';
return $output98;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output83 .= '
												</span>
											</label>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments112 = array();
// Rendering Boolean node
$arguments112['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'highlight', $renderingContext));
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
												<p class="text-danger">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'highlight', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = NULL;
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() {return NULL;};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());

$output114 .= (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments115['encoding'] !== NULL ? $arguments115['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments115['doubleEncode']));

$output114 .= '</p>
											';
return $output114;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output83 .= '
											<div class="form-control-wrap">
												';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper
$arguments118 = array();
$arguments118['configuration'] = $currentVariableContainer->getOrNull('item');
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['name'] = NULL;
$arguments118['value'] = NULL;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper');
$viewHelper120->setArguments($arguments118);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper

$output83 .= $viewHelper120->initializeArgumentsAndRender();

$output83 .= '
											</div>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments121 = array();
// Rendering Boolean node
$arguments121['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'labelText', $renderingContext));
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '
												<div class="help-block">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments124 = array();
$arguments124['value'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments126 = array();
$arguments126['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'labelText', $renderingContext);
$arguments126['keepQuotes'] = false;
$arguments126['encoding'] = NULL;
$arguments126['doubleEncode'] = true;
$renderChildrenClosure127 = function() {return NULL;};
$value128 = ($arguments126['value'] !== NULL ? $arguments126['value'] : $renderChildrenClosure127());
return (!is_string($value128) ? $value128 : htmlspecialchars($value128, ($arguments126['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments126['encoding'] !== NULL ? $arguments126['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments126['doubleEncode']));
};

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '</div>
											';
return $output123;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output83 .= '
										</div>
									';
return $output83;
};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output49 .= '
								</div>
							';
return $output49;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output38 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments129 = array();
// Rendering Boolean node
$arguments129['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'highlightText', $renderingContext));
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments132 = array();
$arguments132['value'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'highlightText', $renderingContext);
};

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
							';
return $output131;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output38 .= '
						</div>
					';
return $output38;
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
				';
return $output35;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output29 .= '
			</div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments134 = array();
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				In order to allow form submit on pressing enter, a submit button is needed. See #66846
				The submit button is hidden as long as the save buttons are not part of the form yet.
			';
};

$output29 .= '';

$output29 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments136 = array();
$arguments136['name'] = 'mySubmit';
$arguments136['value'] = 'Go';
$arguments136['class'] = 'hidden';
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['property'] = NULL;
$arguments136['disabled'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$renderChildrenClosure137 = function() {return NULL;};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper138->setArguments($arguments136);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output29 .= $viewHelper138->initializeArgumentsAndRender();

$output29 .= '
		';
return $output29;
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper139->setArguments($arguments27);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output6 .= $viewHelper139->initializeArgumentsAndRender();

$output6 .= '
	</div>
';


return $output6;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output140 = '';

$output140 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments141 = array();
$arguments141['name'] = 'main';
$renderChildrenClosure142 = function() {return NULL;};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper143->setArguments($arguments141);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output140 .= $viewHelper143->initializeArgumentsAndRender();

$output140 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments144 = array();
$arguments144['name'] = 'headline';
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output146 = '';

$output146 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments147 = array();
$arguments147['key'] = 'extConfTemplate.headline';
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['htmlEscape'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$renderChildrenClosure148 = function() {return NULL;};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments149 = array();
$arguments149['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments149['keepQuotes'] = false;
$arguments149['encoding'] = NULL;
$arguments149['doubleEncode'] = true;
$renderChildrenClosure150 = function() {return NULL;};
$value151 = ($arguments149['value'] !== NULL ? $arguments149['value'] : $renderChildrenClosure150());

$output146 .= (!is_string($value151) ? $value151 : htmlspecialchars($value151, ($arguments149['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments149['encoding'] !== NULL ? $arguments149['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments149['doubleEncode']));

$output146 .= '
	</h1>
';
return $output146;
};

$output140 .= '';

$output140 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments152 = array();
$arguments152['name'] = 'content';
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output154 = '';

$output154 .= '
	<div role="tabpanel">
		<ul class="nav nav-tabs" role="tablist">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments155 = array();
$arguments155['each'] = $currentVariableContainer->getOrNull('configuration');
$arguments155['as'] = 'category';
$arguments155['key'] = 'categoryNumber';
$arguments155['iteration'] = 'iteration';
$arguments155['reverse'] = false;
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output157 = '';

$output157 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments158 = array();
// Rendering Boolean node
$arguments158['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'name', $renderingContext));
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output160 = '';

$output160 .= '
					<li role="presentation" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments161 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext);
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());
$arguments161['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode'])));
$arguments161['then'] = 'active';
$arguments161['else'] = NULL;
$renderChildrenClosure165 = function() {return NULL;};

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure165, $renderingContext);

$output160 .= '">
						<a class="text-capitalize" href="#category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments166 = array();
$arguments166['value'] = $currentVariableContainer->getOrNull('categoryNumber');
$arguments166['keepQuotes'] = false;
$arguments166['encoding'] = NULL;
$arguments166['doubleEncode'] = true;
$renderChildrenClosure167 = function() {return NULL;};
$value168 = ($arguments166['value'] !== NULL ? $arguments166['value'] : $renderChildrenClosure167());

$output160 .= (!is_string($value168) ? $value168 : htmlspecialchars($value168, ($arguments166['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments166['encoding'] !== NULL ? $arguments166['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments166['doubleEncode']));

$output160 .= '" aria-controls="category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments169 = array();
$arguments169['value'] = $currentVariableContainer->getOrNull('categoryNumber');
$arguments169['keepQuotes'] = false;
$arguments169['encoding'] = NULL;
$arguments169['doubleEncode'] = true;
$renderChildrenClosure170 = function() {return NULL;};
$value171 = ($arguments169['value'] !== NULL ? $arguments169['value'] : $renderChildrenClosure170());

$output160 .= (!is_string($value171) ? $value171 : htmlspecialchars($value171, ($arguments169['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments169['encoding'] !== NULL ? $arguments169['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments169['doubleEncode']));

$output160 .= '" role="tab" data-toggle="tab">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments172 = array();
$arguments172['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'name', $renderingContext);
$arguments172['keepQuotes'] = false;
$arguments172['encoding'] = NULL;
$arguments172['doubleEncode'] = true;
$renderChildrenClosure173 = function() {return NULL;};
$value174 = ($arguments172['value'] !== NULL ? $arguments172['value'] : $renderChildrenClosure173());

$output160 .= (!is_string($value174) ? $value174 : htmlspecialchars($value174, ($arguments172['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments172['encoding'] !== NULL ? $arguments172['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments172['doubleEncode']));

$output160 .= '
						</a>
					</li>
				';
return $output160;
};

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
			';
return $output157;
};

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
		</ul>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments175 = array();
$arguments175['action'] = 'save';
$arguments175['name'] = 'configurationform';
$arguments175['id'] = 'configurationform';
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['controller'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['pluginName'] = NULL;
$arguments175['pageUid'] = NULL;
$arguments175['object'] = NULL;
$arguments175['pageType'] = 0;
$arguments175['noCache'] = false;
$arguments175['noCacheHash'] = false;
$arguments175['section'] = '';
$arguments175['format'] = '';
$arguments175['additionalParams'] = array (
);
$arguments175['absolute'] = false;
$arguments175['addQueryString'] = false;
$arguments175['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments175['fieldNamePrefix'] = NULL;
$arguments175['actionUri'] = NULL;
$arguments175['objectName'] = NULL;
$arguments175['hiddenFieldClassName'] = NULL;
$arguments175['enctype'] = NULL;
$arguments175['method'] = NULL;
$arguments175['onreset'] = NULL;
$arguments175['onsubmit'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output177 = '';

$output177 .= '
			<div class="tab-content">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments178 = array();
$arguments178['name'] = 'extensionKey';
$arguments178['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['property'] = NULL;
$arguments178['class'] = NULL;
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
$renderChildrenClosure179 = function() {return NULL;};
$viewHelper180 = $self->getViewHelper('$viewHelper180', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper180->setArguments($arguments178);
$viewHelper180->setRenderingContext($renderingContext);
$viewHelper180->setRenderChildrenClosure($renderChildrenClosure179);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output177 .= $viewHelper180->initializeArgumentsAndRender();

$output177 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments181 = array();
$arguments181['each'] = $currentVariableContainer->getOrNull('configuration');
$arguments181['as'] = 'category';
$arguments181['key'] = 'categoryNumber';
$arguments181['iteration'] = 'iteration';
$arguments181['reverse'] = false;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output183 = '';

$output183 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments184 = array();
// Rendering Boolean node
$arguments184['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'name', $renderingContext));
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output186 = '';

$output186 .= '
						<div role="tabpanel" class="tab-pane ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments187 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments188 = array();
$arguments188['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext);
$arguments188['keepQuotes'] = false;
$arguments188['encoding'] = NULL;
$arguments188['doubleEncode'] = true;
$renderChildrenClosure189 = function() {return NULL;};
$value190 = ($arguments188['value'] !== NULL ? $arguments188['value'] : $renderChildrenClosure189());
$arguments187['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value190) ? $value190 : htmlspecialchars($value190, ($arguments188['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments188['encoding'] !== NULL ? $arguments188['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments188['doubleEncode'])));
$arguments187['then'] = 'active';
$arguments187['else'] = NULL;
$renderChildrenClosure191 = function() {return NULL;};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure191, $renderingContext);

$output186 .= '" id="category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments192 = array();
$arguments192['value'] = $currentVariableContainer->getOrNull('categoryNumber');
$arguments192['keepQuotes'] = false;
$arguments192['encoding'] = NULL;
$arguments192['doubleEncode'] = true;
$renderChildrenClosure193 = function() {return NULL;};
$value194 = ($arguments192['value'] !== NULL ? $arguments192['value'] : $renderChildrenClosure193());

$output186 .= (!is_string($value194) ? $value194 : htmlspecialchars($value194, ($arguments192['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments192['encoding'] !== NULL ? $arguments192['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments192['doubleEncode']));

$output186 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments195 = array();
$arguments195['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'subcategories', $renderingContext);
$arguments195['as'] = 'subcategory';
$arguments195['key'] = '';
$arguments195['reverse'] = false;
$arguments195['iteration'] = NULL;
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output197 = '';

$output197 .= '
								<div class="form-section">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments198 = array();
// Rendering Boolean node
$arguments198['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subcategory'), 'label', $renderingContext));
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments201 = array();
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output203 = '';

$output203 .= '
											<h2 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments204 = array();
$arguments204['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subcategory'), 'label', $renderingContext);
$arguments204['keepQuotes'] = false;
$arguments204['encoding'] = NULL;
$arguments204['doubleEncode'] = true;
$renderChildrenClosure205 = function() {return NULL;};
$value206 = ($arguments204['value'] !== NULL ? $arguments204['value'] : $renderChildrenClosure205());

$output203 .= (!is_string($value206) ? $value206 : htmlspecialchars($value206, ($arguments204['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments204['encoding'] !== NULL ? $arguments204['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments204['doubleEncode']));

$output203 .= '</h2>
										';
return $output203;
};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments207 = array();
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments210 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments211 = array();
$arguments211['subject'] = NULL;
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'subcategories', $renderingContext);
};
$arguments210['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext), 1);
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output214 = '';

$output214 .= '
												<h3 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments215 = array();
$arguments215['key'] = 'extConfTemplate.other';
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$renderChildrenClosure216 = function() {return NULL;};

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '</h3>
											';
return $output214;
};

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure213, $renderingContext);

$output209 .= '
										';
return $output209;
};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output200 .= '
									';
return $output200;
};
$arguments198['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output217 = '';

$output217 .= '
											<h2 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments218 = array();
$arguments218['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subcategory'), 'label', $renderingContext);
$arguments218['keepQuotes'] = false;
$arguments218['encoding'] = NULL;
$arguments218['doubleEncode'] = true;
$renderChildrenClosure219 = function() {return NULL;};
$value220 = ($arguments218['value'] !== NULL ? $arguments218['value'] : $renderChildrenClosure219());

$output217 .= (!is_string($value220) ? $value220 : htmlspecialchars($value220, ($arguments218['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments218['encoding'] !== NULL ? $arguments218['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments218['doubleEncode']));

$output217 .= '</h2>
										';
return $output217;
};
$arguments198['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output221 = '';

$output221 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments222 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments223 = array();
$arguments223['subject'] = NULL;
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'subcategories', $renderingContext);
};
$arguments222['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext), 1);
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output226 = '';

$output226 .= '
												<h3 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments227 = array();
$arguments227['key'] = 'extConfTemplate.other';
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['htmlEscape'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$renderChildrenClosure228 = function() {return NULL;};

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '</h3>
											';
return $output226;
};

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments222, $renderChildrenClosure225, $renderingContext);

$output221 .= '
										';
return $output221;
};

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments229 = array();
$arguments229['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subcategory'), 'items', $renderingContext);
$arguments229['as'] = 'item';
$arguments229['key'] = '';
$arguments229['reverse'] = false;
$arguments229['iteration'] = NULL;
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output231 = '';

$output231 .= '
										<div class="form-group form-group-dashed">
											<label for="em-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments232 = array();
$arguments232['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'name', $renderingContext);
$arguments232['keepQuotes'] = false;
$arguments232['encoding'] = NULL;
$arguments232['doubleEncode'] = true;
$renderChildrenClosure233 = function() {return NULL;};
$value234 = ($arguments232['value'] !== NULL ? $arguments232['value'] : $renderChildrenClosure233());

$output231 .= (!is_string($value234) ? $value234 : htmlspecialchars($value234, ($arguments232['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments232['encoding'] !== NULL ? $arguments232['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments232['doubleEncode']));

$output231 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments235 = array();
$arguments235['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'labelHeadline', $renderingContext);
$arguments235['keepQuotes'] = false;
$arguments235['encoding'] = NULL;
$arguments235['doubleEncode'] = true;
$renderChildrenClosure236 = function() {return NULL;};
$value237 = ($arguments235['value'] !== NULL ? $arguments235['value'] : $renderChildrenClosure236());

$output231 .= (!is_string($value237) ? $value237 : htmlspecialchars($value237, ($arguments235['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments235['encoding'] !== NULL ? $arguments235['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments235['doubleEncode']));

$output231 .= '<br>
												<span class="text-monospace text-normal">
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments238 = array();
$arguments238['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'name', $renderingContext);
$arguments238['keepQuotes'] = false;
$arguments238['encoding'] = NULL;
$arguments238['doubleEncode'] = true;
$renderChildrenClosure239 = function() {return NULL;};
$value240 = ($arguments238['value'] !== NULL ? $arguments238['value'] : $renderChildrenClosure239());

$output231 .= (!is_string($value240) ? $value240 : htmlspecialchars($value240, ($arguments238['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments238['encoding'] !== NULL ? $arguments238['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments238['doubleEncode']));

$output231 .= '.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments241 = array();
$arguments241['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'name', $renderingContext);
$arguments241['keepQuotes'] = false;
$arguments241['encoding'] = NULL;
$arguments241['doubleEncode'] = true;
$renderChildrenClosure242 = function() {return NULL;};
$value243 = ($arguments241['value'] !== NULL ? $arguments241['value'] : $renderChildrenClosure242());

$output231 .= (!is_string($value243) ? $value243 : htmlspecialchars($value243, ($arguments241['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments241['encoding'] !== NULL ? $arguments241['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments241['doubleEncode']));

$output231 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments244 = array();
// Rendering Boolean node
$arguments244['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'type', $renderingContext), 'user');
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output246 = '';

$output246 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments247 = array();
// Rendering Array
$array248 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments249 = array();
$output250 = '';

$output250 .= 'extConfTemplate.type.';

$output250 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'type', $renderingContext);
$arguments249['key'] = $output250;
$arguments249['id'] = NULL;
$arguments249['default'] = NULL;
$arguments249['htmlEscape'] = NULL;
$arguments249['arguments'] = NULL;
$arguments249['extensionName'] = NULL;
$renderChildrenClosure251 = function() {return NULL;};
$array248['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure251, $renderingContext);
$arguments247['map'] = $array248;
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output253 = '';

$output253 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments254 = array();
// Rendering Boolean node
$arguments254['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('label'));
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
																(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments257 = array();
$arguments257['value'] = $currentVariableContainer->getOrNull('label');
$arguments257['keepQuotes'] = false;
$arguments257['encoding'] = NULL;
$arguments257['doubleEncode'] = true;
$renderChildrenClosure258 = function() {return NULL;};
$value259 = ($arguments257['value'] !== NULL ? $arguments257['value'] : $renderChildrenClosure258());

$output256 .= (!is_string($value259) ? $value259 : htmlspecialchars($value259, ($arguments257['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments257['encoding'] !== NULL ? $arguments257['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments257['doubleEncode']));

$output256 .= ')
															';
return $output256;
};

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '
														';
return $output253;
};

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments247, $renderChildrenClosure252, $renderingContext);

$output246 .= '
													';
return $output246;
};

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output231 .= '
												</span>
											</label>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments260 = array();
// Rendering Boolean node
$arguments260['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'highlight', $renderingContext));
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output262 = '';

$output262 .= '
												<p class="text-danger">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments263 = array();
$arguments263['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'highlight', $renderingContext);
$arguments263['keepQuotes'] = false;
$arguments263['encoding'] = NULL;
$arguments263['doubleEncode'] = true;
$renderChildrenClosure264 = function() {return NULL;};
$value265 = ($arguments263['value'] !== NULL ? $arguments263['value'] : $renderChildrenClosure264());

$output262 .= (!is_string($value265) ? $value265 : htmlspecialchars($value265, ($arguments263['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments263['encoding'] !== NULL ? $arguments263['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments263['doubleEncode']));

$output262 .= '</p>
											';
return $output262;
};

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output231 .= '
											<div class="form-control-wrap">
												';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper
$arguments266 = array();
$arguments266['configuration'] = $currentVariableContainer->getOrNull('item');
$arguments266['additionalAttributes'] = NULL;
$arguments266['data'] = NULL;
$arguments266['name'] = NULL;
$arguments266['value'] = NULL;
$arguments266['class'] = NULL;
$arguments266['dir'] = NULL;
$arguments266['id'] = NULL;
$arguments266['lang'] = NULL;
$arguments266['style'] = NULL;
$arguments266['title'] = NULL;
$arguments266['accesskey'] = NULL;
$arguments266['tabindex'] = NULL;
$arguments266['onclick'] = NULL;
$renderChildrenClosure267 = function() {return NULL;};
$viewHelper268 = $self->getViewHelper('$viewHelper268', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper');
$viewHelper268->setArguments($arguments266);
$viewHelper268->setRenderingContext($renderingContext);
$viewHelper268->setRenderChildrenClosure($renderChildrenClosure267);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper

$output231 .= $viewHelper268->initializeArgumentsAndRender();

$output231 .= '
											</div>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments269 = array();
// Rendering Boolean node
$arguments269['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'labelText', $renderingContext));
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output271 = '';

$output271 .= '
												<div class="help-block">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments272 = array();
$arguments272['value'] = NULL;
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments274 = array();
$arguments274['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'labelText', $renderingContext);
$arguments274['keepQuotes'] = false;
$arguments274['encoding'] = NULL;
$arguments274['doubleEncode'] = true;
$renderChildrenClosure275 = function() {return NULL;};
$value276 = ($arguments274['value'] !== NULL ? $arguments274['value'] : $renderChildrenClosure275());
return (!is_string($value276) ? $value276 : htmlspecialchars($value276, ($arguments274['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments274['encoding'] !== NULL ? $arguments274['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments274['doubleEncode']));
};

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '</div>
											';
return $output271;
};

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output231 .= '
										</div>
									';
return $output231;
};

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output197 .= '
								</div>
							';
return $output197;
};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output186 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments277 = array();
// Rendering Boolean node
$arguments277['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'highlightText', $renderingContext));
$arguments277['then'] = NULL;
$arguments277['else'] = NULL;
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output279 = '';

$output279 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments280 = array();
$arguments280['value'] = NULL;
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'highlightText', $renderingContext);
};

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
							';
return $output279;
};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output186 .= '
						</div>
					';
return $output186;
};

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
				';
return $output183;
};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output177 .= '
			</div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments282 = array();
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				In order to allow form submit on pressing enter, a submit button is needed. See #66846
				The submit button is hidden as long as the save buttons are not part of the form yet.
			';
};

$output177 .= '';

$output177 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments284 = array();
$arguments284['name'] = 'mySubmit';
$arguments284['value'] = 'Go';
$arguments284['class'] = 'hidden';
$arguments284['additionalAttributes'] = NULL;
$arguments284['data'] = NULL;
$arguments284['property'] = NULL;
$arguments284['disabled'] = NULL;
$arguments284['dir'] = NULL;
$arguments284['id'] = NULL;
$arguments284['lang'] = NULL;
$arguments284['style'] = NULL;
$arguments284['title'] = NULL;
$arguments284['accesskey'] = NULL;
$arguments284['tabindex'] = NULL;
$arguments284['onclick'] = NULL;
$renderChildrenClosure285 = function() {return NULL;};
$viewHelper286 = $self->getViewHelper('$viewHelper286', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper286->setArguments($arguments284);
$viewHelper286->setRenderingContext($renderingContext);
$viewHelper286->setRenderChildrenClosure($renderChildrenClosure285);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output177 .= $viewHelper286->initializeArgumentsAndRender();

$output177 .= '
		';
return $output177;
};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper287->setArguments($arguments175);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure176);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output154 .= $viewHelper287->initializeArgumentsAndRender();

$output154 .= '
	</div>
';
return $output154;
};

$output140 .= '';

$output140 .= '
';


return $output140;
}


}
#1468823770    80534     