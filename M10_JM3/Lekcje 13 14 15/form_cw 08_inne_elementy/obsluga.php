<!DOCTYPE html>
<title>Odebrane dane</title>
<meta charset='UTF-8'>

<?php

var_dump( $_GET["ta1"] );

var_dump( $_GET["s1"] );

var_dump( $_GET["pole1"] );



if( isset($_GET["cb1"] ) ){
	var_dump( $_GET["cb1"] );	
}

if( isset($_GET["cb2"]) ){
	var_dump( $_GET["cb2"] );
}

if( isset($_GET["plec"]) ){
	if($_GET["plec"]=="M")
		echo "<br>Jesteś mężczyzną<br>";
	else{
		echo "<br>Jesteś kobietą<br>";
	}
	
} else
{
	echo "<br>nie została wybrana żadna opcja<br>";
}



if( isset($_GET["18lat"]) ){
	var_dump( $_GET["18lat"] );
}





var_dump($_GET["ulubiony_kolor"]);




var_dump($_GET["urodziny"]);







if(isset($_GET["plik"])){
	var_dump($_GET["plik"]);
}




?>












