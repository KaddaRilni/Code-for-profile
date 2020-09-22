<?php 
require_once(__DIR__."/Cat.php");
require_once(__DIR__."/Human.php");
require_once(__DIR__."/CatDrink.php");
require_once(__DIR__."/Walkable.php");
require_once(__DIR__."/Talkable.php");
require_once(__DIR__."/functions.php");
require_once(__DIR__."/HasName.php");

$cat = new Cat();
$human = new Human('Данила');
$cat->drink(); //Котик пьет молоко
goForAWalk($cat); //топ-топ
goForAWalk($human); //ТОП-ТОП 
echo $human->getName(); //Данила