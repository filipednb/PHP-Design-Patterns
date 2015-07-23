<?php

	require_once "EnemyShip.php";
	require_once "UfoEnemyShip.php";
	require_once "RocketEnemyShip.php";
	require_once "BigUFOEnemyShip.php";
	require_once "EnemyShipFactory.php";				
	

	 class EnemyShipTesting {
	
		private $possibleShips = array("U","R","X","B",); // Included "X" type to test an error message
		
		function __construct(){
			
			// Create the factory object
			$objShipFactory = new EnemyShipFactory();
			
			// Enemy ship object
			$objTheEnemy = null;
			
			
			foreach ($possibleShips as $shipToMake) {
				$objTheEnemy = $objShipFactory->makeEnemyShip($shipToMake);		
				if($objTheEnemy) $this->doStuffEnemy($objTheEnemy);
				
			}
					
			
		}
		
		// Executes methods of the super class
		
		function doStuffEnemy($objAnEnemyShip){
			
			$objAnEnemyShip->displayEnemyShip();
			
			$objAnEnemyShip->followHeroShip();
			
			$objAnEnemyShip->enemyShipShoots();
			
		}
		
	}
	
	$testingShips = new EnemyShipTesting();

?>