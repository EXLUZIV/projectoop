<?php

namespace interfaces;

interface LogInterface
{
	public function setLog(string $type, string $text): void;
	public static function setRootLogDir(string $root_path): void;
	public function getValidPath(string $path_value): string;
	public function setPathByClass(string $text): void;
	public function setPathByMethod(string $text): void;
}