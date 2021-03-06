<?php

/**
 * Class ext_update
 *
 * Performs update tasks for extension Fluidcontent
 */
// @codingStandardsIgnoreStart
class ext_updatecf6401244f836c497ab6d834c87ee254 {

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
		$GLOBALS['TYPO3_DB']->exec_UPDATEquery('tt_content', 'CType = \'fed_fce\'', array('CType' => 'fluidcontent_content'));
		return $GLOBALS['TYPO3_DB']->sql_affected_rows() . ' rows have been updated';
	}
}
