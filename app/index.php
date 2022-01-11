<?php

require '../app/classes/Log.php';
require '../app/classes/CustomLog.php';


use app\logs\Log;
use app\logs\CustomLog;

\app\logs\Log::setRootLogDir('./logs'); 

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