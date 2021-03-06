<?php

namespace app\logs;

require 'App/Interface/LogInterface.php';

use interfaces\LogInterface;

class Log implements LogInterface
{

	const NEW_LOG_MESSAGE = '---NEW LOG---';
	private static string $rootPathDir;
	private string $pathLog;

	public function __construct(string $path_value)
	{
		$path = $this->getValidPath($path_value);
		$this->pathLog = self::$rootPathDir . '/' . $path;
	}

	public function createFolder(string $path, string $pathLog): void
	{
		if (empty(self::$rootPathDir)) {
			throw new \Exception('Must set root log dir');
		}

		if (!file_exists($pathLog)) {

			$arrayPath = explode('/', $path);

			$currentPathString = self::$rootPathDir . '/';
			foreach ($arrayPath as $key => $value) {
				$currentPathString .= $value . '/';
				if (file_exists($currentPathString)) {
					continue;
				}
				if ($key == count($arrayPath) - 1) {
					continue;
				}

				mkdir($currentPathString);
			}
		}
	}

	public function setPathByClass(string $text): void
	{
		$this->setLog(__CLASS__, $text);

	}

	public function setPathByMethod(string $text): void
	{
		$this->setLog(__METHOD__, $text);
	}

	public function setLog(string $type, string $text): void
	{
		$file = fopen($this->pathLog, 'a+');
		$message = self::NEW_LOG_MESSAGE . PHP_EOL . date('Y.m.d h:i:s') . PHP_EOL . $type . '. ' . $text . PHP_EOL . PHP_EOL;
		fwrite($file, $message);
		fclose($file);
	}

	public static function setRootLogDir(string $root_path): void
	{
		self::$rootPathDir = $root_path;
	}

	public function getValidPath(string $path_value): string
	{	
		$path = trim(str_replace('\\', '/', $path_value), '/');
		return $path;
	}
}
