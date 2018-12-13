<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.18
 * Time: 10:07
 */

interface Saver
{
 public function save($string);
}


/*
 * public static function init($name){
		if ($name == 'file'){
			return new FileSaver();
		}elseif ($name == 'db'){
			return new DbSaver();
		}
		return false;
	}
 */
