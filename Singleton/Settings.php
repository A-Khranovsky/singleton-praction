<?php

namespace Singleton;

final class Settings
{
	private static $object = null;

	private $settings;

	private function __construct()
	{
		$settings = [];
	}

	private function __clone(){}

	public static function get()
	{
		if(is_null(self::$object)) {
			self::$object = new self();
		}

		return self::$object;
	}

	public function __get($key)
	{
		if(array_key_exists($key, $this->settings)){
			return $this->settings[$key];
		} else {
			return null;
		}
	}

	public function __set($key, $value)
	{
		$this->settings[$key] = $value;
	}
}