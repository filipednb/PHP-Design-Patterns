<?php

	/*
	* Class EnemyShip
	*
	*/
	
	abstract class EnemyShip {
		
		private $name;
		private $speed;
		private $directionX;
		private $directionY;
		private $amtDamage;
		
		public function getName() { return $this->name; }
		public function setName($newName) { $this->name = $newName; }
		
		public function getDamage()	{ return $amtDamage; }
		public function setDamage($newDamage) { $this->amtDamage = $newDamage; }
		
		public function followHeroShip(){
			
			echo $this->getName() + " is following the hero <br />";
			
		}
		
		public function displayEnemyShip(){
			
			echo $this->getName() + " is on the screen <br />";
			
		}
		
		public function enemyShipShoots() {
			
			$this->getName() + " attacks and does " + $this->getDamage() + " damage to hero <br />";
			
		}
		
	}

?>