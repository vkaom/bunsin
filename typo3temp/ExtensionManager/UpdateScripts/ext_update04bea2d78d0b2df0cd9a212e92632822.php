<?php

/**
 * Class ext_update
 *
 * Performs update tasks for extension flux
 */
 // @codingStandardsIgnoreStart
class ext_update04bea2d78d0b2df0cd9a212e92632822 {

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
		$GLOBALS['TYPO3_DB']->exec_UPDATEquery('tt_content', 'colPos = -42', array('colPos' => 18181));
		$GLOBALS['TYPO3_DB']->exec_TRUNCATEquery('cf_extbase_reflection');
		$GLOBALS['TYPO3_DB']->exec_TRUNCATEquery('cf_extbase_reflection_tags');
		$GLOBALS['TYPO3_DB']->exec_TRUNCATEquery('cf_extbase_object');
		$GLOBALS['TYPO3_DB']->exec_TRUNCATEquery('cf_extbase_object_tags');
		return $GLOBALS['TYPO3_DB']->sql_affected_rows() . ' rows have been updated. System object caches cleared.';
	}
}
