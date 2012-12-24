<?php
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

class IndexPageIRCListener implements EventListener {
	
	public function execute($eventObj, $className, $eventName) {
			WCF::getCache()->addResource('ircIndex', WCF_DIR.'cache/cache.ircIndex.php', WCF_DIR.'lib/system/cache/CacheBuilderIRCIndex.class.php', 0, 180);
			
			$channelData = WCF::getCache()->get('ircIndex', 'channelData');
			WCF::getTPL()->assign('channelData', $channelData);
			WCF::getTPL()->append('additionalBoxes', WCF::getTPL()->fetch('ircIndex'));
	}
}
?>