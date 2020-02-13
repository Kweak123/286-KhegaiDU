<?php
//1
function getplus($a){
	print ($a + 10);
}
getplus(1000);	

		echo '<br><br>';
//2
function getplus2($a){
	return $a + 10;
}
echo getplus2(25);

		echo '<br><br>';
//3
function pythagoras($a, $b){
	return (sqrt(pow($a, 2) + pow($b, 2)));
}
echo pythagoras(6, 8);

		echo '<br><br>';
//4
		//ипотека на 10 лет на сумму 5млн рублей
function ipoteka($a, $b, $c){
	return $c*($b/$c + $a*$b) + (($a*$b * ($c-1)) / 2);
}
echo ipoteka(11.5, 5000000, 10);

		echo '<br><br>';
//5
function col(...$a){
	$b = count($a);
	print ($b);
}
col(1, 2, 3 ,4);

		echo '<br><br>';
//6
function col2(...$a){
	$b = array_sum($a) / count($a);
	print ($b);
}
col2(4, 4, 4, 4);

		echo '<br><br>';
//7
function op($num1, $num2, $operator){
	eval("\$str = \"$num1\"$operator\"$num2\";");
	echo $str;
	 

}
op (10, 15, '+');

		echo '<br><br>';
//8








?>