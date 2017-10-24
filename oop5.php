<?php

class manusia {

	public $suara;
	public $berat;

	public function __construct($suara,$berat){
		$this->suara = $suara;
		$this->berat = $berat;
	}
	public function get_suara(){
		return $this->suara;
	}
	public function get_berat(){
		return $this->berat;

	}
}
?>