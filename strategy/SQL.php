<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.18
 * Time: 10:32
 */

class SQL
{
	private static $instance;

	private function __construct()
	{
	}
	private function __clone()
	{

	}
	private function __sleep()
	{

	}
	private function __wakeup()
	{

	}

	public static function getInstance(){
		if (self::$instance == null){
			self::$instance = new PDO('mysql:host=localhost;dbname=test' , 'admin' , '123456');
		}
		return self::$instance;
	}
}

