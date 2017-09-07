<?php

class DB
{
	private static $instance = null;

	private $pdo = null;

	private function __construct()
	{
		try {
			$this->pdo = new PDO('mysql:host='. Config::get('mysql/host') .';dbname='. Config::get('mysql/db'),  Config::get('mysql/username'), Config::get('mysql/password'));
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	/**
	 * This method returns an instance of DB class.
	 * @return [Object] [description]
	 */
	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			self::$instance = new DB;
		}

		return self::$instance;
	}
}
