<?php

//app路径
define('APP_PATH', realpath(dirname(__FILE__) . '/../'));

//实例化一个Yaf应用
$app = new Yaf_Application(APP_PATH . '/conf/application.ini');

//启动应用
$app->run();

