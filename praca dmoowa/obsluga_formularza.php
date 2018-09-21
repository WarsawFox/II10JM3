<!DOCTYPE html>
<title>obsluga_logowania form 16</title>
<meta charset='UTF-8'>
<?php
if( isset($_POST["przsubmit"]) )
{
		if( empty($_POST['polimie']) ){
			echo '<p>Nie podałeś Imienia.</p>';
		}else{
			echo '<p> Imie: ' . $_POST['polimie'] . '</p>';
		}
}
		else
		{
		echo 'Nie użyłeś formularza by się tu dostać :C';
		}
	



?>