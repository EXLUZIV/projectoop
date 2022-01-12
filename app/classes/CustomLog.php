<?php

namespace app\logs;

class CustomLog extends Log
{
	private $logNotice;
	private $logWarning;
	private $logDangerous;


	public function setLogNotice(string $value)
	{
		$this->setLog('notice',$value);
	}

	public function getLogNotice()
	{
		return $this->logNotice;
	}

	public function setLogWarning(string $value)
	{
		$this->setLog('warning', $value);
	}

	public function getLogWarning()
	{
		return $this->logWarning;
	}

	public function setLogDangerous(string $value)
	{
		$this->setLog('dangerous', $value);
	}

	public function getLogDangerous()
	{
		return $this->logDangerous;
	}
}