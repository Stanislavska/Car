<?php

include_once('CarInterface.php');

class Car implements CarInterface{
	private $brand;
	private $model;
	private $color;
	private $doors_num;
	
	public function Car($brand, $model, $color, $doors_num){
		$this->brand = $brand;
		$this->model = $model;
		$this->color = $color;
		$this->doors_num = $doors_num;
	}
	
	public function helloCar(){
		return "Hello! This is me  - your car: " . $this->color . " " . $this->brand . " " . $this->model . "\n";
	}
	
	public function getBrand(){
		return $this->brand;
	}
	
	public function setBrand($brand){
		$this->brand = $brand;
	}
	
	public function getModel(){
		return $this->model;
	}
	
	public function setModel($model){
		$this->model = $model;
	}
	
	public function getColor(){
		return $this->color;
	}
	
	public function setColor($color){
		$this->color = $color;
	}
	
	public function getDoorsNum(){
		return $this->brand;
	}
	
	public function setDoorsNum($doors_num){
		$this->brand = $brand;
	}
	
	

}

?>