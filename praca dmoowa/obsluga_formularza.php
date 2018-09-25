<!DOCTYPE html>
<title>obsluga_logowania form 16</title>
<meta charset='UTF-8'>
<?php
if( isset($_POST["przsubmit"]) )
{
		if( empty($_POST['polimie']) ){
			echo '<p>Nie podałeś imienia.</p>';
		}else{
			$liczby = preg_match('@[^0-9]@', $_POST['polimie']);
			$wyraz1 = preg_match('@[^kurwa]@', $_POST['polimie']);
			$wyraz2 = preg_match('@[^chuj]@', $_POST['polimie']);
			$wyraz3 = preg_match('@[^pierdole]@', $_POST['polimie']);
			if(!$liczby || !$wyraz1 || !$wyraz2 || !$wyraz3) {
			  echo "W imieniu są cyfry lub niedozowlone wyrazy";
			}
		}
			
			echo '<p> Imie: ' . $_POST['polimie'] . '</p>';
		if( empty($_POST['polnazwisko']) ){
			echo '<p>Nie podałeś nazwiska.</p>';
		}else{
			$liczby = preg_match('@[^0-9]@', $_POST['polnazwisko']);
			if(!$liczby) {
			  echo "W nazwisku są cyfry";
			}
			
			echo '<p> Nazwisko: ' . $_POST['polnazwisko'] . '</p>';
		}
		if( empty($_POST['pollogin']) ){
			echo '<p>Nie podałeś loginu.</p>';
		}else{
		$duzeLitery = preg_match('@[A-Z]@', $_POST['pollogin']);
		$maleLitery = preg_match('@[a-z]@', $_POST['pollogin']);
			if(!$duzeLitery || !$maleLitery || strlen($_POST['pollogin']) < 6) {
			  echo "W loginie są niedozwolone znaki lubi login jest za krótki";
		}
			
				echo '<p> login: ' . $_POST['pollogin'] . '</p>';
}
if( empty($_POST['polhaslo']) ){
			echo '<p>Nie podałeś hasła.</p>';
		}else{
			$duzeLitery = preg_match('@[A-Z]@', $_POST['polhaslo']);
			$maleLitery = preg_match('@[a-z]@', $_POST['polhaslo']);
			$znakspec= preg_match('@[\0-\9]@', $_POST['polhaslo']);
			if(!$duzeLitery || !$maleLitery || !$znakspec || strlen($_POST['polhaslo']) < 8) {
			  echo "W haśle są niedozwolone znaki lubi hasło jest za krótkie";
			}
			
			echo '<p> hasło: ' . $_POST['polhaslo'] . '</p>';
		}
		if( empty($_POST['poluwagi']) ){
			echo '<p>Nie podałeś uwag.</p>';
		}else{
			$spacje = preg_match('@(.)@', $_POST['poluwagi']);
			//$znakbiale= preg_match('@[]@', $_POST['poluwagi']);
			$kropka= preg_match('@.', $_POST['poluwagi']);
			if(!$spacje || $kropka ) {
			  echo "Uwaga źle sformułowana";
			}
			
			echo '<p> Uwaga: ' . $_POST['poluwaga'] . '</p>';
		}


}
		else
		{
		echo 'Nie użyłeś formularza by się tu dostać :C';
		}
	
?>