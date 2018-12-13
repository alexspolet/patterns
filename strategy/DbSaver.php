<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.18
 * Time: 10:12
 */

class DbSaver implements Saver
{
	public function save($string)
	{


		$db = SQL::getInstance();
		$query = "INSERT INTO stings (str) VALUES (:string)";
		$stmt = $db->prepare($query);
		$stmt->execute(['string' => $string]);

		if (!$db->lastInsertId()) {
			echo "string $string didn't add to db" . '<br>';
			//return false;
		} else {
			//return true;
			echo "string $string added to db" . '<br>';
		}
	}

}