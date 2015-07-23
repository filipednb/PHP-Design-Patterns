<?php

	/*
	* Class EnemyShipFactory
	* This is a factory thats only job is creating ships
	* By encapsulating ship creation, we only have one
	* place to make modifications
	*/

	class EnemyShipFactory{
	
		// This could be used as a static method if we
		// are willing to give up subclassing it
		
		function makeEnemyShip($newShipType) {
			
			if ($newShipType == "U") {
				
				return new UFOEnemyShip();
				
			} 
			else if ($newShipType == "R") {
				
				return new RocketEnemyShip();
				
			} 
			else if ($newShipType == "B") {
				
				return new BigUFOEnemyShip();
				
			} 
			else  {
				echo "ShipType not found: " . $newShipType . "<br />";
				return false;
			}
			
		}
		
	}


?>