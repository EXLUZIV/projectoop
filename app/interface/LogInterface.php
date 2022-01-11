<?php

namespace interfaces;

interface LogInterface
{
	public function setLog(string $type, string $text);
	public static function setRootLogDir(string $root_path);
	public function getValidPath(string $path_value);
	public function setPathByClass(string $text);
	public function setPathByMethod(string $text);
}