<?php
require_once(WCF_DIR.'lib/system/cache/CacheBuilder.class.php');

class CacheBuilderIRCIndex implements CacheBuilder {
	public function getData($cacheResource) {
		$data = array('channelData');
		
		$data['channelData'] = QServerUtil::getInstance(true)->getUser();
		
		return $data;
	}
}
?>