<?php

namespace app\logs;

require '../app/interface/CustomLogInterface.php';

use interfaces\CustomLogInterface;

class CustomLog extends Log implements CustomLogInterface
{
	private $logNotice;
	private $logWarning;
	private $logDangerous;

	// public function __construct($path_value)
	// {
	// 	parent::__construct($path_value);
	// }

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