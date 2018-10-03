<?php
		// var_dump($_POST);
		// var_dump(  empty($_POST['dlogin'])  );
		$czypodane = 'false';
	if( isset($_POST["dsubmit"]) ){
		
		if( empty($_POST['dlogin']) ){
			echo '<p>Nie podałeś loginu.</p>';
		} else{
			$czypodane ='true';
		}		
		if( empty($_POST['dhaslo']) ){
			echo '<p>Nie podałeś hasła.</p>';
			$czypodane = 'false';
		}else{
			if ($czypodane == 'true'){
				echo 'Łączę z bazą';
				$baza = mysql_connect('localhost',$_POST['dlogin'] , $_POST['dhaslo']); 
				if ($baza === false) 
					die('Nie można było nawiązać połączenia z bazą '
					.'z powodu błędu: ' . mysql_error());
				$ok = mysql_select_db('moja_baza');
				if ($ok===false) 
					die('Nie udało się wybrać bazy danych'
					.'z powodu błędu: '.mysql_error());
				// --- tutaj instrukcje korzystające z bazy danych --
				//np. tworzymy tabele:
				$zapytanie = 'CREATE TABLE osoby (imie VARCHAR(128), nazwisko VARCHAR(128), nr_telefonu char(7))';
				$odpowiedz = mysql_query($zapytanie);
				if($odpowiedz===false) die ('Nie udało się ponieważ '
					.mysql_error());
								
				//A to na koniec
				mysql_close($baza);
			}
		}
	
	}else{
		// echo "<p>Dostałeś się tutaj z pominięciem formularza</p>";
		// przekierowanie z poziomu PHP
		echo 'dostałeś się z pominięciem formularza';
		//header("Location: ./index.html");
	}
?>		
		
	



