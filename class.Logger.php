<?php
/*
WHM Dynamic DNS Updater v2.3.0
By Silas Montgomery
Website: http://reticent.net
Email: nomsalis@reticent.net)
*/

class Logger {

	public static function Write($msg, $level) {

		if($level <= LOG_LEVEL)
			echo date("m/d/Y g:iA")." - ".$msg."\n";
	}

}
?>
