<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.18
 * Time: 10:11
 */

class FileSaver implements Saver
{
	public function save($string)
	{

		$res =file_put_contents(__DIR__ . '/dir/file.txt', $string . PHP_EOL , FILE_APPEND);
		if (!$res){
			echo "string $string didn\'t add to file  <br>";
		}else{
			echo "string $string added to file  <br>";
		}
	}
}