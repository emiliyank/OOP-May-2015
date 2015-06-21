<?php

interface iTest{
	public function test1();
	public function test2($a);

}

class C implements iTest{
	public $p = "5";

	public function test1(){
		echo "implement test1() <br/>";
	}

	public function test2($param){
		echo "realize test2() with parameter = $param <br/>";
	}

}

$o1 = new C();
$o1->test1();
$o1->test2('fafla');
?>