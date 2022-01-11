<?php

namespace interfaces;

interface CustomLogInterface
{
	public function setLogNotice(string $value);
	public function getLogNotice();
	public function setLogWarning(string $value);
	public function getLogWarning();
	public function setLogDangerous(string $value);
	public function getLogDangerous();
}