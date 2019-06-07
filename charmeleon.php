<?php

class charmeleon extends pokemon{

	public function __construct($name){

		$charmeleonAttack1 = new attack('head butt', 10);
		$charmeleonAttack2 = new attack('flare', 30);
		$charmeleonResistance = new resistance('lighting', 10);
		$charmeleonWeakness = new weakness('water', 2);

		parent::__construct($name, 'Fire', 60,[$charmeleonAttack1, $charmeleonAttack2], $charmeleonWeakness, $charmeleonResistance);


	}



}
