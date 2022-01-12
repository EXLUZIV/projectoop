<?php

require 'App/Classes/Log.php';
require 'App/Classes/CustomLog.php';


use app\logs\Log;
use app\logs\CustomLog;

Log::setRootLogDir('./App/Logs'); 

// $log = new \app\logs\Log('/test.log');
// $log->log('Test log');

// $log1 = new \app\logs\Log('\/\/\/bugtest\\\//bug.log///');
// $log1->log('test 4');


// $FirstLog = new \app\logs\Log('notice log', 'warning log', 'dangerous log');
// $FirstLog->setLogNotice('first modificate class Notice');
// $FirstLog->setLogNotice('Second modificate class Notice');
// echo $FirstLog->getLogNotice();
// echo '<br>';
// echo $FirstLog->getLogWarning();
// echo '<br>';
// echo $FirstLog->getLogDangerous();

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
