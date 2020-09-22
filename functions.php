<?php 

require_once(__DIR__."/Walkable.php");


function goForAWalk(Walkable $walkable)
{
	$walkable->walk();
}