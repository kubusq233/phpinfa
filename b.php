<form action="b.php" method="POST">
Login: <input type="text" name="login"/> <br/>
Haslo: <input type="password" name="haslo"/> <br/>
<button type="submit">zaloguj</button>
</form>

<?php 
$con = mysqli_connect("localhost", "root","","logowanie"); //laczenie z baza

$login = $_POST['login']; //pobieranie loginu
$haslo = $_POST['haslo']; //pobieranie hasla

$zap = "SELECT * FROM `loguj`"; //zapytanie wybierajace wszystkie pola z tabeli loguj
$wyn = mysqli_query($con, $zap); 
$row = mysqli_fetch_array($wyn);

	$has = $row['haslo'];
	$log = $row['login'];
	
	if($login == $log) //sprawdzanie czy login jest poprawny
	{
		if($haslo == $has) //sprawdzanie czy haslo jest poprawne
			{
				echo "Zalogowano<br/>";
			}
		else
			{
				echo "Złe hasło<br/>";
			}
	}
	else
		{
			echo "Zły login<br/>";
		}
		
	var_dump($_POST);
	mysqli_close($con);
?>