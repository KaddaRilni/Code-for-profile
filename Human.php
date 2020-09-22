<?php 

require_once(__DIR__."/Walkable.php");
require_once(__DIR__."/Talkable.php");
require_once(__DIR__."/HasName.php");

class Human implements Walkable,Talkable,HasName
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function walk()
	{
		echo 'ТОП-ТОП' . PHP_EOL;
	}

	public function say()
	{
		echo 'Привет' . PHP_EOL;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name; 
	}
}