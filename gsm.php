<?php
require_once('battery.php');

class GSM{
	public $model;
	public $brand;
	public $price;
	public $ba;

	public function __construct($m = "Galaxy3", $b="Samsung", $p = 700){
		$this->ba = new battery();
		$this->model = $m;
		$this->brand = $b;
		$this->price = $p;
	}

	public function show_gsm_info(){
		echo "GSM info: ...<br/>
			Brand: $this->brand; Model: $this->model;
			price: $this->price; Battery()...<br/>";
		$this->ba->show_battery();
	}
}

$nokia_petko = new GSM();
$nokia_petko->ba->show_battery();
$nokia_petko->show_gsm_info();
?>