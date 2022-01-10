<?php

require '../app/classes/log.php';
require '../app/classes/parentLog.php';

interface LogInterface
{
	public function setLogNotice($value);
	public function getLogNotice();
	public function setLogWarning($value);
	public function getLogWarning();
	public function setLogDangerous($value);
	public function getLogDangerous();
}

\app\logs\Log::setRootLogDir('./logs'); 

$log = new \app\logs\Log('/test.log');
$log->log('Test log');

$log1 = new \app\logs\Log('\/\/\/bugtest\\\//bug.log///');
$log1->log('test 4');


$FirstLog = new \app\logs\ParentLog('notice log', 'warning log', 'dangerous log');
$FirstLog->setLogNotice('first modificate class Notice');
$FirstLog->setLogNotice('Second modificate class Notice');
echo $FirstLog->getLogNotice();
echo '<br>';
echo $FirstLog->getLogWarning();
echo '<br>';
echo $FirstLog->getLogDangerous();