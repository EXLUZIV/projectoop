<?php

require 'App/Classes/Log.php';
require 'App/Classes/CustomLog.php';


use app\logs\Log;
use app\logs\CustomLog;

Log::setRootLogDir('./App/Logs'); 

$log = new Log('first.log');
$log->setLog('notice', 'This is notice');

$log1 = new CustomLog('custom.log');

$log1->setLogNotice('This is notice log');
$log1->setLogWarning('This is warning log');
$log1->setLogDangerous('This is dangerous log');

$log1->setPathByClass('log for class');
$log1->setPathByMethod('log for method');

$log2 = new Log('New log.log');
$log2->setLog('notice', 'new log');

$log3 = new Log('second log.log');
$log3->setLog('second', 'sss');
