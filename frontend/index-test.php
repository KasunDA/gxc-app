<?php

// remove the following lines when in production mode
//defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
//defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

// Set the constant for the FRONT_STORE Directory
// Don't change if you are not sure
$cms_version='1.0';

//You need to specify the path to CORE FOLDER CORRECTLY
define('CORE_FOLDER',dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'core');


define('COMMON_FOLDER',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'common');
define('IMAGES_FOLDER',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'images');
define('AVATAR_FOLDER',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'avatar');
define('CMS_FOLDER',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'cms'.$cms_version);
define('CMS_WIDGETS',CMS_FOLDER.DIRECTORY_SEPARATOR.'widgets');
define('FRONT_END',dirname(__FILE__).DIRECTORY_SEPARATOR.'protected');
define('FRONT_STORE',dirname(dirname(__FILE__)));
define('BACK_END',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'backend'.DIRECTORY_SEPARATOR.'protected');
define('BACK_STORE',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'backend');
define('IS_FRONTEND',true);

// change the following paths if necessary
$yii=CORE_FOLDER.'/yii/framework/yii.php';
$globals=COMMON_FOLDER.'/globals.php';
$config=FRONT_END.'/config/test.php';

require_once($yii);
require_once($globals);

//Set TimeZone for the Application
Yii::createWebApplication($config)->run();



