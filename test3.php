<?php
//a
	echo array_sum(range(1, 100));

		echo "<br><br>";
//b
$arr = ['a', 'b', 'c', 'd', 'e'];
$arr = array_map('strtoupper', $arr);
	var_dump($arr);	

		echo "<br><br>";
//1
$arr = [1, 2, 2, 4, 5, 7, 55, 5];
	echo count($arr);

		echo "<br><br>";
//2
$arr = [1, 2, 2, 4, 5, 7, 55, 5678];
	echo count($arr);
	echo end($arr);

		echo "<br><br>";
//3
$arr = [1, 2, 3, 4, 5];
	var_dump(in_array(3, $arr));

		echo "<br><br>";
//4
$arr = [1, 2, 3, 4, 5];
	echo array_sum($arr);

		echo "<br><br>";
//5
$arr = [1, 2, 3, 4, 5];
	echo array_product($arr);

		echo "<br><br>";
//6
$arr = [5, 5, 5, 5, 5];
$arr1 = array_sum($arr);
$arr2 = count($arr);
	echo $arr1 / $arr2;	

		echo "<br><br>";
//7
	var_dump (range(1, 100));

		echo "<br><br>";
//8
		var_dump(range("a", "z"));

		echo "<br><br>";
//9
$arr = range(1, 9);
$arr1 = implode("-", $arr);
	echo $arr1;

		echo "<br><br>";
//10
		echo array_sum(range(1, 100));

		echo "<br><br>";
//11
	echo array_product(range(1, 10));

		echo "<br><br>";
//12
$arr = [1, 2, 3];
$arr1 = ["a", "b", "c"];
	var_dump (array_merge($arr, $arr1));

		echo "<br><br>";
//13
$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3);
	var_dump($result);	

		echo "<br><br>";
//14
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 2);
	var_dump($arr);

		echo "<br><br>";
//15
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 3);
	var_dump($result);

		echo "<br><br>";
//16
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 3, 0, ["a", "b", "c"]);
	var_dump($arr);

		echo "<br><br>";
//17
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 0, ["a", "b"]);
	var_dump($arr);

		echo "<br><br>";
//18
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
	var_dump($keys);
	echo "<br>";
	var_dump($values);

		echo "<br><br>";
//19
$arr = ['a', 'b', 'c'];
$arr1 = [1, 2, 3];
$arr2 = array_combine($arr, $arr1);
	var_dump ($arr2);

		echo "<br><br>";
//20
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$result = array_flip($arr);
	var_dump($result);

		echo "<br><br>";
//21
$arr = [1, 2, 3, 4, 5];
$arr = array_reverse($arr);
	var_dump($arr);

		echo "<br><br>";
//22
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
	echo array_search('-', $arr);

		echo "<br><br>";
//23
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$arr1 = array_search('-', $arr);
$arr2 = array_splice($arr, 1, 1);
	var_dump($arr);	

		echo "<br><br>";
//24
$arr = ['a', 'b', 'c', 'd', 'e'];
$arr1 = array_replace($arr, [0 => '!', 3 => '!!']);
	var_dump($arr1);	

		echo "<br><br>";
//25
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];	
//sort($arr);
//rsort($arr);
asort($arr);
	var_dump($arr);

		echo "<br><br>";
//26
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$key = array_rand($arr);
	var_dump($arr [$key]);

		echo "<br><br>";
//27
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	var_dump(array_rand($arr));

		echo "<br><br>";
//28
$arr = ['a', 'b', 'c', 'd', 'e'];
shuffle($arr);
	var_dump($arr);	

		echo "<br><br>";
//29
$arr = range(1, 25);
shuffle($arr);
	var_dump($arr);

		echo "<br><br>";
//30
$arr = range('a', 'z');
shuffle($arr);
	var_dump($arr);

		echo "<br><br>";
//31
$arr1 = range('a', 'z');
shuffle($arr1);
$arr = array_slice($arr1, 1, 6);
	var_dump($arr);

		echo "<br><br>";
//32
$arr = [1, 2, 3, 4, 5];
$arr1 = array_shift($arr); 
$arr2 = array_pop($arr);
	var_dump($arr1, $arr2);

		echo "<br><br>";
//33
$arr = [1, 2, 3, 4, 5];
$arr1 = array_unshift($arr, 0);
$arr2 = array_push($arr, 6);
	var_dump($arr);

		echo "<br><br>";
//34
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
while (count($arr) > 0){
	$arr1 = array_shift($arr);
	$arr1 = array_pop($arr);
}
	echo $arr1;


















?>