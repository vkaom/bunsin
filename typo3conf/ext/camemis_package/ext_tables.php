<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'camemis_package');

// register to BE that we_sitepackage has its own custom template(s)
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('camemis_website.camemis_package', 'Page');

// register to BE that we_sitepackage has its own custom content element(s)
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('camemis_website.camemis_package', 'Content');
