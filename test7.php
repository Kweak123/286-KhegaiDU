<!DOCTYPE html>
<html>
	<head>
		<title>Forma</title>
	</head>

	<body>
		<form action="test7.php">
		<input type="text" name="name" size="30" maxlength="30" value="">
		<br>
		<input type ="text" name="second neme" size="30" maxlength="30" value="">
		<br>
		<input type="submit" name="enter" value="enter">
		<input type="reset" name="delete" value="delete">
		</form>
	</body>

</html>

<?php
class posList
{
	
	public $money;
	public $money2=2;
	public $file;
	
	
	public function posList_files1() 
	{
		echo $this->money2; 	
	}
	
}

$post=new posList();
echo $post->posList_files1;
var_dump($_GET);


?>