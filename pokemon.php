<?php

class pokemon {

	public $name;
	public $energytype;
	public $weakness;
	public $resistance;
	public $attack;
	public $hitpoints;


	public function __construct($name, $energytype, $weakness, $resistance, $attack, $hitpoints){
		$this->name = $name;
		$this->energytype = $energytype;
		$this->weakness = $weakness
		;
		$this->resistance = $resistance;
		$this->attack = $attack;
		$this->hitpoints = $hitpoints;

	}
	public function __toString() {
		return json_encode($this);
	}


	public function attack($attackedPokemon, $attackName)
	{

	//start

		$totalDamage = 0;
		$attackDamage = 0;
		echo "<br>";
		echo $this->name. 'attacks'. $attackedPokemon->name. 'with the attack '.$attackName;

		foreach ($this->attacks as $availableAttack) {
			if ($availableAttack->name == $attackName){
				$attackDamage = $availableAttack->damage;

			};
			
		}

		$totalDamage = $attackDamage;

		if ($this->energytype == $attackedPokemon->weakness->energytype) {
			$totalDamage = $attackedPokemon->weakness->multiplier*$attackdamage;
		}

		if ($this->energytype == $attackedPokemon->resistance->energytype) {
			$totalDamage = $totalDamage - $attackedPokemon->resistance->worth;
		}

		echo "<br> Does" . $totalDamage . "damage";
		$attackedPokemon->hitpoints = $attackedPokemon->hitpoints - $totalDamage;

		echo "<br> New hitpoints of ".$attackedPokemon->name . " is " . $attackedPokemon->hitpoints;
		

	//eerste attack: pikachu valt charmeleon aan met ring attack.

    //tussenresultaat damage laten zien en health aangepast.

    //tweede attack: charmeleon valt pikachu aan met flare attack

    //resultaat damage laten zien en health aangepast 
	}

	public function toonInfo(){
		echo "<h3>".$this->name. "</h3>";
		echo "type:". $this->energytype. "<br>";
		echo "weakness:". $this->weakness."<br>";
		echo "resistance". $this->resistance."<br>";
		echo "hitpoints". $this->hitpoints."<br>";

	/*	foreach ($this->attacks as $key) {
			echo " ";
			echo $key->name . ",";
			echo $key->damage . " ";
			
		}
		echo "<br>";


		echo "Weakness: ";
		echo $this->weakness->energytype . ","; 
		echo $this->weakness->multiplier . "<br>";


		echo "Resistance: ";
		echo $this->resistance->energytype . ",";
		echo $this->resistance->worth . "<br>";*/

	}


    


}
