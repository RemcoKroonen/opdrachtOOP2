<?php

class Pokemon {

	public $name;
	public $energytpe;
	public $weakness;
	public $resistance;
	public $attack;
	public $hitpoints;


	public function __construct($name, $energytpe, $weakness, $resistance, $attack, $hitpoints){
		$this->name = $name;
		$this->energytpe = $energytpe;
		$this->weakness = $weakness
		;
		$this->resistance = $resistance;
		$this->attack = $attack;
		$this->hitpoints = $hitpoints;

	}


}
