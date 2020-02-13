<?php

//implode "VarDumper.php";

class snake {
	public $inn = '------------------------';

	public function snak(){
		$s = $this->inn;
		$arr = str_split($s);
		foreach ($arr as $key => $x) {
			$arr[$key] = "*";
			$key++;
			$arr[$key] = '>';

			echo implode($arr). '<br>';
		}
	}
}

$n = new snake();
$n -> snak();















?>