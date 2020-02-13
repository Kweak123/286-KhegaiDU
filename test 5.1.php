<?php
include 'VarDumper.php';
class cow{
	public $legs = 4;
	public $head = 1;
	public $eyes = 2;
	public $tail = 1;
	public $steps = 1;
	public $horns = 2;
	public $litermilk = 0;
	public $love = 0;

		public function go(){
			if ($this->steps != 0 ){
			return $this->steps++;
		}
	}

		public function jump(){
			$this->legs--;
		}
		
		public function say($text){
			echo $text;
		}

		public function cutoff(){
			$this->horns--;
			$this->horns--;
		}

		public function milk(){
			$this->litermilk++;
		}

		public function iron(){
			$this->love = $love + 100;
		}

		public function kill(){
			$this->head--;
			$this->love = $love - 100;
			$this->litermilk--;	
		}

}
$cow1 = new cow();
VarDumper::dump($cow1,10,true);
$cow1->go();
VarDumper::dump($cow1,10,true);
$cow1->jump();
VarDumper::dump($cow1,10,true);
$cow1->say("Хаааай");
VarDumper::dump($cow1,10,true);
$cow1->cutoff();
VarDumper::dump($cow1,10,true);
$cow1->milk();
VarDumper::dump($cow1,10,true);
$cow1->iron();
VarDumper::dump($cow1,10,true);
$cow1->kill();
VarDumper::dump($cow1,10,true);

?>