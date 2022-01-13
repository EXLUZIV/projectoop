<?php

namespace app\logs;

class CustomLog extends Log
{
	private string $logNotice;
	private string $logWarning;
	private string $logDangerous;


	public function setLogNotice(string $value): void
	{
		$this->setLog('notice',$value);
	}

	public function getLogNotice(): string
	{
		return $this->logNotice;
	}

	public function setLogWarning(string $value): void
	{
		$this->setLog('warning', $value);
	}

	public function getLogWarning(): string
	{
		return $this->logWarning;
	}

	public function setLogDangerous(string $value): void
	{
		$this->setLog('dangerous', $value);
	}

	public function getLogDangerous(): string
	{
		return $this->logDangerous;
	}
}