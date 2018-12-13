<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.18
 * Time: 11:00
 */

function __autoload($name){
	require_once $name . '.php';
}


$strs = [
		'
		To Exceed; Avoid Limitations; To Be Extremely or Abundantly over the top. To be annoyingly exclamatory. Very Obnoxious, or, in some circumstances, said to reject the truth being presented before one\'s self.
Derives from Swiss German "Uberlicht".
"Dude, your totally being OVERLY."
"Oh, OK, your overly to the MAX."
"Stevie was totally being overly around Jessica Yesterday..."
"Overly People are easily recognizable because they are often bubbly, cheesy, or outspoken.
'
		,
	'vasia pupkin'
];
foreach ($strs as $str) {
	if (strlen($str) > 256) {
		$class = 'DbSaver';
	} else {
		$class = 'FileSaver';
	}

	$string = new Strings(new $class);
	$string->addString($str);
	$string->addString($str);

	$string->save();
}

