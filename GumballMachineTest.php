<?php
	require 'GumballMachine.php';
	/**
	* 
	*/
	class GumballMachineTest extends PHPUnit_Framework_TestCase
	{
		public $gumballMachineInstane;

		public function setup()
		{
			$this->gumballMachineInstane = new GumballMachine();
		}
		public function testIfWheelWorks(){
			$this->gumballMachineInstane->setGumballs(100);
			$this->gumballMachineInstane->turnWheel();
			$this->assertEquals(99,$this->gumballMachineInstane->getGumballs());
		}
	}
?>