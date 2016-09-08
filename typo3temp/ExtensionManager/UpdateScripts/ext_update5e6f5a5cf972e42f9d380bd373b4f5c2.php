<?php

/**
 * Class ext_update
 *
 * Performs update tasks for extension Fluidpages
 */
// @codingStandardsIgnoreStart
class ext_update5e6f5a5cf972e42f9d380bd373b4f5c2 {

	/**
	 * @return boolean
	 */
	public function access() {
		return TRUE;
	}

	/**
	 * @return string
	 */
	public function main() {
		$GLOBALS['TYPO3_DB']->exec_TRUNCATEquery('cf_extbase_reflection');
		$GLOBALS['TYPO3_DB']->exec_TRUNCATEquery('cf_extbase_reflection_tags');
		$GLOBALS['TYPO3_DB']->exec_TRUNCATEquery('cf_extbase_object');
		$GLOBALS['TYPO3_DB']->exec_TRUNCATEquery('cf_extbase_object_tags');
		return $GLOBALS['TYPO3_DB']->sql_affected_rows() . ' rows have been updated';
	}
}
