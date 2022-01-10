<?php

namespace app\logs;

class Log 
{

		const NEW_LOG_MESSAGE = '---NEW LOG---';
		private static $rootPathDir;
		private $pathLog;
		
		public function __construct($path_value)
		{
			if(empty(self::$rootPathDir)){
				throw new \Exception('Must set root log dir');
			}

			$path = $this->getValidPath($path_value);
			$this->pathLog = self::$rootPathDir . '/' . $path;

			if(!file_exists($this->pathLog))	{

				$arrayPath = explode('/', $path);

				$currentPathString = self::$rootPathDir . '/';
				foreach ($arrayPath as $key => $value){
					$currentPathString .= $value . '/';
					if(file_exists($currentPathString)){
						continue;
					}
					if($key == count($arrayPath) - 1){
						continue;
					}

					mkdir($currentPathString);
				}
			}
		}

		public static function setPathByClass($path_class)
		{
			return new Log($path_class . '.log');
		}

		public static function setPathByMethod($path_method)
		{
			$path_method = str_replace('::', '/' , $path_method);
			return new Log($path_method . '.log');
		}

		public static function setPathByClassJSON($path_class)
		{
			return new Log($path_class . '.json');
		}

		public static function setPathByMethodJSON($path_method)
		{
			$path_method = str_replace('::', '/' , $path_method);
			return new Log($path_method . '.json');
		}

		public function log($text)
		{
			$file = fopen($this->pathLog, 'a+');
			$message = self::NEW_LOG_MESSAGE . PHP_EOL . date('Y.m.d h:i:s') . PHP_EOL . $text . PHP_EOL . PHP_EOL;
			fwrite($file, $message);
			fclose($file);
		}

		public function logJSON($text)
		{
			$file = fopen($this->pathLog, 'a+');
			$message = '{' . PHP_EOL . '	"date":"'  . date('T.m.d') . '",' . PHP_EOL . '	"time":"' . date('h:i:s') . '",' . PHP_EOL . '	"context":"' . $text . '},' . PHP_EOL; 
			fwrite($file, $message);
			fclose($file);
		}

		public static function setRootLogDir($root_path)
			{
				self::$rootPathDir = $root_path;
			}

		public function getValidPath($path_value)
		{
			$path = trim(str_replace('\\', '/', $path_value), '/');
			return $path;
		}
}