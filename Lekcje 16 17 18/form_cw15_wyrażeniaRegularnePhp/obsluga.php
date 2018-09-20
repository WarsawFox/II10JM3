<!DOCTYPE html>
<title>Obsługa logowania</title>
<meta charset='UTF-8'>

<?php
		// var_dump($_POST);
		// var_dump(  empty($_POST['dlogin'])  );
				
	if( isset($_POST["dsubmit"]) ){
		if( empty($_POST['dimie']) ){
			echo '<p>Nie podałeś Imienia.</p>';
		}else{
			echo '<p> Imie: ' . $_POST['dimie'] . '</p>';
		}
		if( empty($_POST['dwiek']) ){
			echo '<p>Nie podałeś wieku.</p>';
		}else{
			$wiek=$_POST['dwiek'];
			if(($wiek<18)||($wiek>150))
				echo 'Masz nieodpowiedni wiek by się zarejestrować';
			else
				echo '<p> wiek: ' . $_POST['dwiek'] . '</p>';
		}
		if( empty($_POST['dlogin']) ){
			echo '<p>Nie podałeś loginu.</p>';
		}else{
			if(strlen($_POST['dlogin'])<5)
				echo 'Podałeś za krótki login';
			else
				echo '<p> login: ' . $_POST['dlogin'] . '</p>';
		}
		
		if( empty($_POST['dhaslo']) ){
			echo '<p>Nie podałeś hasła.</p>';
		}else{
			$duzeLitery = preg_match('@[A-Z]@', $_POST['dhaslo']);
			$maleLitery = preg_match('@[a-z]@', $_POST['dhaslo']);
			$liczby = preg_match('@[0-9]@', $_POST['dhaslo']);

			if(!$duzeLitery || !$maleLitery || !$liczby || strlen($_POST['dhaslo']) < 6) {
			  echo "W haśle są niedozwolone znaki lubi hasło jest za krótkie";
			}
			
			echo '<p> hasło: ' . $_POST['dhaslo'] . '</p>';
		}
		if( empty($_POST['demail']) ){
			echo '<p>Nie podałeś emaila.</p>';
		}else{
			if(!filter_var($_POST['demail'],FILTER_VALIDATE_EMAIL))
				echo 'Podałeś nieprawidłowy e-mail';
			else
				echo '<p> email: ' . $_POST['demail'] . '</p>';
		}
		
	}else{
		// echo "<p>Dostałeś się tutaj z pominięciem formularza</p>";
		// przekierowanie z poziomu PHP
		echo 'dostałeś się z pominięciem formularza';
		//header("Location: ./index.html");
	}
?>