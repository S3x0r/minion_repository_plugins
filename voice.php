<?php
if(PHP_SAPI !== 'cli') { die('This script can\'t be run from a web browser. Use CLI to run it.'); }

 $plugin_description = 'Gives voice: !voice <nick>';
 $plugin_command = 'voice';

function plugin_voice()
{

  if(empty($GLOBALS['args'])) { BOT_RESPONSE('Usage: '.$GLOBALS['C_CMD_PREFIX'].'voice <nick>'); } 
  
  else {
		 fputs($GLOBALS['socket'], 'MODE '.$GLOBALS['C_CNANNEL'].' +v '.$GLOBALS['args']."\n");
 
		 CLI_MSG('!voice on: '.$GLOBALS['C_CNANNEL'].', by: '.$GLOBALS['nick'].', for: '.$GLOBALS['args'], '1');
	   }
}

?>