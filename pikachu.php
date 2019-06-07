<?php

class pikachu extends pokemon{

	public function __construct($name){

		$pikachuAttack1 = new attack('electric ring', 50);
		$pikachuAttack2 = new attack('pika punch', 20);
		$pikachuResistance = new resistance('fighting', 20);
		$pikachuWeakness = new weakness('fire', 1.5);


		parent::__construct($name, 'Lightning', 60,[$pikachuAttack1, $pikachuAttack2], $pikachuWeakness, $pikachuResistance);


	}

}
