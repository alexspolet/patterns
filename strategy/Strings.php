<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.18
 * Time: 13:57
 */

class Strings
{
	private $string;
	private $saver;

	public function __construct(Saver $saver)
	{
		$this->string;
		$this->saver = new $saver();
	}

	public function addString($string){
		$this->string = $string;
	}

	public function save(){
		$this->saver->save($this->string);
	}

}