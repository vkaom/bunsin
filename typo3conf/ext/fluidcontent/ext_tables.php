<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

if (!(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	\FluidTYPO3\Flux\Core::registerConfigurationProvider('FluidTYPO3\Fluidcontent\Provider\ContentProvider');

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
		'Fluid Content',
		'fluidcontent_content',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('fluidcontent') . 'ext_icon.gif'
	), \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT, 'FluidTYPO3.Fluidcontent');
}
