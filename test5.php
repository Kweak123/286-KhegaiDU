<?php
$array = [1, 2, [3, [4, 5]], 6];
 
function recursive($array, $operator = True){
	
	foreach ($array as $items){
		print_r($items);
		if (is_array($items)){
			print_r($items);
			recursive($items);
		}
		else{
			recursive($items);
		}
	}
}
recursive($array);






?>