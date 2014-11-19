<?php

include_once('EngineInterface.php');

class Engine implements EngineInterface{

	private $hetHP;

	public function RaceCar($hetHP){
		$this->hetHP = $hetHP;
	}

	public funtion hetHP(){
		return $this->hetHP;
	}
	

}

?>