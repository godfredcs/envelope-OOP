<?php 

class Session
{	
	/**
	 * Method to check if session exists.
	 * 
	 * @param  [type] $name [description]
	 * @return [type]       [description]
	 */
	public static function exists($name)
	{
		return isset($_SESSION[$name]) ? true : false;
	}

	/**
	 * Method to add session.
	 * 
	 * @param  [type] $name  [description]
	 * @param  [type] $value [description]
	 * @return [type]        [description]
	 */
	public static function put($name, $value)
	{
		return $_SESSION[$name] = $value;
	}

	/**
	 * Method to get session.
	 * 
	 * @param  [type] $name [description]
	 * @return [type]       [description]
	 */
	public static function get($name)
	{
		return $_SESSION[$name];
	}

	/**
	 * Method to delete session.
	 * 
	 * @param  [type] $name [description]
	 * @return [type]       [description]
	 */
	public static function delete($name)
	{
		if (self::exists($name)) {
			unset($_SESSION[$name]);
		}
	}

	/**
	 * Method to flash session message to the user.
	 * 
	 * @param  [type] $name   [description]
	 * @param  string $string [description]
	 * @return [type]         [description]
	 */
	public static function flash($name, $string = '')
	{
		if (self::exists($name)) {
			$session = self::get($name);
			self::delete($name);
			return $session;
		} else {
			self::put($name, $string);
		}
	}
}
