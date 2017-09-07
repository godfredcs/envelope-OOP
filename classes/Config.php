<?php 

class Config
{
	/**
	 * This method returns a config value.
	 * @param  [String] $path [description]
	 * @return [String]       [description]
	 */
	public static function get($path = null) 
	{
		if (isset($path)) {
			$path = explode('/', $path);
			$config = $GLOBALS['config'];

			foreach ($path as $bit) {
				if (isset($config[$bit])) {
					$config = $config[$bit];
				}
			}

			return $config;
		}
	}
}
