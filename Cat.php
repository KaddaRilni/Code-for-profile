<?php 

require_once(__DIR__."/Walkable.php");
require_once(__DIR__."/Talkable.php");
require_once(__DIR__."/CatDrink.php");

abstract class Animal implements Walkable,Talkable
{
	public function sleep(int $minutes)
	{
		echo 'Животное уснуло на ' . $minutes . 'минут' . PHP_EOL;
	}
}
class Cat extends Animal
{
	use CatDrink;

	public function walk()
	{
		echo 'топ-топ' . PHP_EOL;
	}
	
	public function say()
	{
		echo "мяу" . PHP_EOL;
	}
}
