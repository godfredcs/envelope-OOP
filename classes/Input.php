<?php 

class Input
{	
	/**
	 * Method to check whether input has been posted.
	 * 
	 * @param  string $type [description]
	 * @return [type]       [description]
	 */
	public static function exists($type = 'post')
	{
		switch($type) {
			case 'post':
				return !empty($_POST) ? true : false;
			case 'get':
				return !empty($_POST) ? true : false;
			default:
				return false;
		}
	}

	/**
	 * Method to get input.
	 * 
	 * @param  [type] $item [description]
	 * @return [type]       [description]
	 */
	public static function get($item)
	{
		if (isset($_POST[$item])) {
			return $_POST[$item];
		} else if (isset($_GET[$item])) {
			return $_GET[$item];
		}

		return '';
	}
}
