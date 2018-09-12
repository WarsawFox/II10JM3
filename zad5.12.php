<?php
$A=4;
class Figury
{
	public $bokiFigur;
	function obliczObwód ()
	{
		  $obwód=$Figury->bokiFigur * $A; 	
	}
	function wyswietlWartość ()
	{
		echo 'obwód wynosi: '.$obwód;
	}
	
}
class Kwadrat extends Figury
{
public $bok;
function obliczPole ()
{
	 $pole=$Kwadrat->bok * $Kwadrat->bok; 
}
	
}
Kwadrat->obliczPole ();




?>