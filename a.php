<form action="a.php" method="POST">
Login: <input type="text" name="login"/> <br/>
Haslo: <input type="password" name="haslo"/> <br/>
<button type="submit">zaloguj</button>
</form>

<?php 
$con = mysqli_connect("localhost", "root","","logowanie");

$login = $_POST['login'];
$haslo = $_POST['haslo'];

$zap = "SELECT * FROM `loguj`";
$wyn = mysqli_query($con, $zap);
$row = mysqli_fetch_array($wyn);
	
	if($login == $row)
	{
		echo "Złe hasło<br/>";
	}
	else
		{
			echo "Zły login<br/>";
		}
	if($haslo == $row)
	{
		echo "Zalogowano<br/>";
	}
	var_dump($_POST);

?>