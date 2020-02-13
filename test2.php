<?php
$one = 3;
$two = 10;
$three = $one +  $two;

	echo $three;

		echo '<br>';
		echo '<br>';


$str = "Бережков Андрей Вячеславович";

$short = substr($str, 17, -35);
$short1 = substr($str, 29, -22);

$name = explode(" ", $str);

	echo $name[0];
	echo ' ';
	echo $short;
	echo '.';
	echo $short1;
	echo '.';

		echo '<br>';
		echo '<br>';

	echo strtoupper('hello world');

		echo '<br>';
		echo '<br>';

	echo ucfirst(strtolower('HELLO WORLD'));

		echo '<br>';
		echo '<br>';

$data = explode('-', '07-10-2002');
	echo $data[2].'.'.$data[1].'.'.$data[0];

		echo '<br>';
		echo '<br>';

	echo strtoupper('php');

		echo '<br>';
		echo '<br>';

	echo strtolower('PHP');

		echo '<br>';
		echo '<br>';

	echo ucfirst('london');

		echo '<br>';
		echo '<br>';

	echo strtolower('London');

		echo '<br>';
		echo '<br>';

$english = "london is the capital of great britain";
$english = ucwords($english);
	
	echo $english;

		echo '<br>';
		echo '<br>';

	echo ucfirst(strtolower('LONDON'));

		echo '<br>';
		echo '<br>';

$str = "html css php";
$stra = strlen($str);

	echo $stra;

		echo '<br>';
		echo '<br>';

$password = "hophsdk";
$str = strlen($password);
if ($str > 5 and $str <10){
	echo "Пароль подходит";
	}else{
	echo "Пароль не подходит";
	}

		echo '<br>';
		echo '<br>';

$str = "html css php";
$short = substr($str, 0, -7);
$short1 = substr($str, 5, -3);
$short2 = substr($str, 8);

	echo $short;
	echo $short1;
	echo $short2;

		echo '<br>';
		echo '<br>';

$str = "hello";
$short = substr($str, 2);

	echo $short;

		echo '<br>';
		echo '<br>';

$str = "htsdg://sadklgjasdflkgjsdf";
if (substr($str, 0, 7) == "http://"){
	echo "yes";
	}else{
		echo "no";
}

		echo '<br>';
		echo '<br>';

$str = "httgdfgsdf//sadklgjasdflkgjsdf";
if (substr($str, 0, 7) == "http://" or substr($str, 0, 7) == "https://") {
	echo "yes";
	}else{
		echo "no";
}

		echo '<br>';
		echo '<br>';

$str = "https://sadklgjasdflkgjsdf.jog";
if (substr($str, -4, 4) == ".png") {
	echo "yes";
	}else{
		echo "no";
}

		echo '<br>';
		echo '<br>';

$str = "https://sadklgjasdflkgjsdf.jog";
if (substr($str, -4, 4) == ".png" or substr($str, 0, 7) == ".jpg") {
	echo "yes";
	}else{
		echo "no";
}

		echo '<br>';
		echo '<br>';

$str = "1234567890";
$stra = strlen($str);
if ($stra > 5){
	$str1 = substr($str, 5);
	echo $str1;
	echo "...";
		}else if ($stra <= 5){
	echo $str;
}

		echo '<br>';
		echo '<br>';

$data = "31.12.2013";
$data1 = str_replace( "." , "-", $data);
	echo $data1;

		echo '<br>';
		echo '<br>';

$str = "aaaaaaaabbbbbbbcccccc";
$str1 = str_replace(['a', 'b', 'c'], [1, 2, 3], $str);

	echo $str1;

		echo '<br>';
		echo '<br>';

$str = "1a2b3c4b5d6e7f8g9h0";
$str1 = str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], "", $str);

	echo $str1;

		echo '<br>';
		echo '<br>';

$str = "abcaabc";

	echo strtr($str, ['a' => '1', 'b' => '2', 'c' => '3']);
	echo '<br>';
	echo strtr($str, "abc", "123");

		echo '<br>';
		echo '<br>';

$str = "dslkmaskgmadfgad";

	echo substr_replace($str, "!!!", 3, 5);

		echo '<br>';
		echo '<br>';

$str = "abc abc abc";

	echo strpos($str, "b");

		echo '<br>';
		echo '<br>';

$str = "abc abc abc";

	echo strpos($str, "b", 6);

		echo '<br>';
		echo '<br>';

$str = "abc abc abc";

	echo strpos($str, "b", 3);

		echo '<br>';
		echo '<br>';

$str = "aaa aaa aaa aaa aaa";

	echo strpos($str, " ", 4);

		echo '<br>';
		echo '<br>';

$str = "..fjfgjnf.gbnjfgbj.";
if (strpos($str, "..", 0) ){
	echo "yes";
	}else{
	echo "no";
}

		echo '<br>';
		echo '<br>';

$str = "http://sadklgjasdflkgjsdf";
if (substr($str, 0, 7) == "http://"){
	echo "yes";
	}else{
	echo "no";
}

		echo '<br>';
		echo '<br>';

$str = "html css php";
$str1 = explode(" ", $str);

	var_dump ($str1);

		echo '<br>';
		echo '<br>';

$arr = ["html", "css", "php"];
$str = implode(" ", $arr);

	echo $str;

		echo '<br>';
		echo '<br>';

$date = '2013-12-31';
$arr = explode('-', $date);

	echo $arr[2].'.'.$arr[1].'.'.$arr[0];

		echo '<br>';
		echo '<br>';

$str = "1234567890";
$arr = str_split($str, 2);
	
	var_dump($arr);

		echo '<br>';
		echo '<br>';

$str = "1234567890";
$arr = str_split($str, 1);
	
	var_dump($arr);

		echo '<br>';
		echo '<br>';

$str = '1234567890';
$arr = str_split($str, 2);

	echo $arr[0].'-'.$arr[1].'-'.$arr[2].'-'.$arr[3].'-'.$arr[4];

		echo '<br>';
		echo '<br>';

$str = " 123 ";

	 var_dump (trim($str));

		echo '<br>';
		echo '<br>';

$str = "/123/";

	 var_dump (trim($str, "/"));

		echo '<br>';
		echo '<br>';

$str = rtrim("слова слова слова", '.');

	echo $str, '.';

		echo '<br>';
		echo '<br>';

$str = "12345";

	echo strrev($str);

		echo '<br>';
		echo '<br>';

$str = "level";
$str1 = strrev($str);
if ($str1 == $str){
	echo "да это палиндром";
	}else{
	echo "нет это не палиндром";
}

		echo '<br>';
		echo '<br>';

$str = 'dfsdfhsfh';

	echo str_shuffle($str);

		echo '<br>';
		echo '<br>';

$dan = str_shuffle('qwertyuiopasdfghjklzxcvbnm');
 echo substr($dan, 0, 6);

 		echo '<br>';
 		echo '<br>';

echo number_format(12345678, 0, '', ' ');

		echo '<br>';
		echo '<br>';

for ($i=0; $i <= 9; $i++) {
echo str_repeat('x', $i) . '<br>';
}

		 echo '<br>';
		 echo '<br>';

for ($i=0;$i<=9;$i++){
echo str_repeat($i, $i). "<br>";
}

		echo '<br>';
		echo '<br>';

echo strip_tags('html, <b>php</b>, js');

		echo '<br>';
		echo '<br>';

$str = "<br>njad</br> <i>jgd</i> <b>akfg</b>";

	echo strip_tags($str, '<b><i>');

		echo '<br>';
		echo '<br>';

	echo htmlspecialchars('html, <b>php</b>, js');

		echo '<br>';
		echo '<br>';

	echo ord('a');
	echo ord('b');
	echo ord('c');
	echo ord(' ');

		echo '<br>';
		echo '<br>';

	echo 'с 65 по 90 и с 97 по 122';

		echo '<br>';
		echo '<br>';

	echo chr(33);

		echo '<br>';
		echo '<br>';

$str = chr(79);

	echo $str;

		echo '<br>';
		echo '<br>';

$len = 5;
for ($i = 1; $i <= $len; $i++){
	$str = str_shuffle(substr("123456789", 0, 10));
}
	echo $str;

		echo '<br>';
		echo '<br>';

$str = 'K';
$str1 = ord($str);
if ($str1 > 64 and $str1 < 91){
	echo "Это большая буква";
	}else if ($str1 > 96 and $str1 < 123){
	echo "Это малеенькая буква";
	}

		echo '<br>';
		echo '<br>';

	echo strchr('ab-cd-ef', '-');

		echo '<br>';
		echo '<br>';

	echo strrchr('ab-cd-ef', '-');

		echo '<br>';
		echo '<br>';

	echo strstr('ab--cd--ef', '--');

		echo '<br>';
		echo '<br>';

$str = 'var_test_text';
//$str1 = str_replace('_', ' ', $str);
//$str2 = ucwords($str1);
//$str3 = lcfirst($str2);
//$str4 = str_replace(' ', '', $str3);

	//echo $str4;

$str4 = str_replace(' ', '', lcfirst(ucwords(str_replace('_', ' ', $str))));

	echo $str4;

		echo '<br>';
		echo '<br>';

$arr = array(12, 13, 14, 23);
foreach ($arr as $value) {
	if (strpos($value, "3") !== false) {
		echo $value;
	}
}
















	



























































?>