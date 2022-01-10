<?php

namespace app\logs;

use LogInterface;

class ParentLog implements LogInterface
{
	private $logNotice;
	private $logWarning;
	private $logDangerous;

	public function __construct($logNotice, $logWarning, $logDangerous)
	{
		$this->logNotice = $logNotice;
		$this->logWarning = $logWarning;
		$this->logDangerous = $logDangerous;
	}

	public function setLogNotice($value)
	{
		$log = Log::setPathByClass(__CLASS__);
		$log->log('Change log class Notice. Context - "' . $value . '"');
		$log1 = Log::setPathByClassJSON(__CLASS__);
		$log1->logJSON($value . '",' . PHP_EOL . '	"class":"notice"' . PHP_EOL);
		$this->logNotice = $value;
	}

	public function getLogNotice()
	{
		$log = Log::setPathByMethod(__METHOD__);
		$log->log('Show method Notice.');
		return $this->logNotice;
	}

	public function setLogWarning($value)
	{
		$log = Log::setPathByClass(__CLASS__);
		$log->log('Change log class Warning. Context -  "' . $value . '"');
		$log1 = Log::setPathByClassJSON(__CLASS__);
		$log1->logJSON($value . '",' . PHP_EOL . '	"class":"warning"' . PHP_EOL);
		$this->logWarning = $value;
	}

	public function getLogWarning()
	{
		$log = Log::setPathByMethod(__METHOD__);
		$log->log('Show method Warning.');
		return $this->logWarning;
	}

	public function setLogDangerous($value)
	{
		$log = Log::setPathByClass(__CLASS__);
		$log->log('Change log class Dangerous. Context -  "' . $value . '"');
		$log1 = Log::setPathByClassJSON(__CLASS__);
		$log1->logJSON($value . '",' . PHP_EOL . '	"class":"dangerous"' . PHP_EOL);
		$this->logDangerous = $value;
	}

	public function getLogDangerous()
	{
		$log = Log::setPathByMethod(__METHOD__);
		$log->log('Show method Dangerous.');
		return $this->logDangerous;
	}
}