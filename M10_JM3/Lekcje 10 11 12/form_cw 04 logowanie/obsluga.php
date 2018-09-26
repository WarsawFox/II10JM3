<!DOCTYPE html>
<title>Obsługa logowania</title>
<meta charset='UTF-8'>

<?php
		// var_dump($_POST);
		// var_dump(  empty($_POST['dlogin'])  );
		
	if( isset($_POST["dsubmit"]) ){
		
		if( empty($_POST['dlogin']) ){
			echo '<p>Nie podałeś loginu.</p>';
		}else{
			echo '<p> login: ' . $_POST['dlogin'] . '</p>';
		}
		
		if( empty($_POST['dhaslo']) ){
			echo '<p>Nie podałeś hasła.</p>';
		}else{
			echo '<p> hasło: ' . $_POST['dhaslo'] . '</p>';
		}
		
		// isset() - sprawdza czy dana zmienna istnieje,
		//		     jest ustawiona
		
	}else{
		// echo "<p>Dostałeś się tutaj z pominięciem formularza</p>";
		// przekierowanie z poziomu PHP
		echo 'dostałeś się z pominięciem formularza';
		//header("Location: ./index.html");
	}
?>		
		
	



