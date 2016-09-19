<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('VENDOR_DIR') or define('VENDOR_DIR', dirname(dirname(__DIR__)));

require(VENDOR_DIR . '/base/vendor/autoload.php');
require(VENDOR_DIR . '/base/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
