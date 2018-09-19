<?php

var_dump( $_GET["e-mail"] );
Echo '<br>';
if( isset($_GET["kolor"]) ){
	var_dump( $_GET["kolor"] );
}
Echo '<br>';
if( isset($_GET["samochod"]) ){
	var_dump( $_GET["samochod"] );
Echo '<br>';
if( isset($_GET["zainteresowania1"] ) ){
	var_dump( $_GET["zainteresowania1"] );	
}

if( isset($_GET["zainteresowania2"]) ){
	var_dump( $_GET["zainteresowania2"] );
	
if( isset($_GET["zainteresowania3"]) ){
	var_dump( $_GET["zainteresowania3"] );
if( isset($_GET["zainteresowania4"]) ){
	var_dump( $_GET["zainteresowania4"] );
	
}
Echo '<br>';
var_dump( $_GET["plik"] );
Echo '<br>';
var_dump( $_GET["opinia"] );
Echo '<br>';
var_dump( $_GET["lub"] );
?>