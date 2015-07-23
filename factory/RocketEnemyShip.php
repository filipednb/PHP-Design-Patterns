<?php

	/*
	* Class RocketEnemyShip
	*
	*/

	class RocketEnemyShip extends EnemyShip {
		
		function __construct(){
			
			$this->setName("Rocket Enemy Ship");
			
			$this->setDamage(10.0);
			
		}
		
	}
	
?>