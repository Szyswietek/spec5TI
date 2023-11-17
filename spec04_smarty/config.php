<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/specTI-main/spec04_smarty');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));
//funkja nie jest potrzebna przy korzystaniu z smarty
//function out(&$param){
//	if (isset($param)){
//		echo $param;
//	}
//}
?>