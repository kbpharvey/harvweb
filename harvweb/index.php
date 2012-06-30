<?php
// change the following paths if necessary
$env = $_SERVER['HTTP_HOST'];
$yii=dirname(__FILE__).'/framework/yii.php';
if ($env == 'localhost:8080')
		{
		$file = 'main_dev.php';
		}
	else
		{
		$file = 'main.php';
		}
$config=dirname(__FILE__)."/protected/config/$file";
echo $config;
echo "<br/> from harvdell";
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
?>
