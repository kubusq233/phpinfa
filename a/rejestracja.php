<form method="POST" action="rejestracja.php">
	l: <input type="text" name="l" /> <br />
	h: <input type="password" name="h" /> <br />
	<button type="submit">zarejestruj</button>
</form>

<?php 
	require_once "funkcje.php";

	if(isset($_POST['l']))
	{
		$l = $_POST['l'];
		$h = $_POST['h'];
		
		$p = polaczZDB();
		
		$z = "SELECT COUNT(ID) FROM uzytkownik WHERE LOGIN = '$l';";
		
		$rej = "INSERT INTO uzytkownik (LOGIN, HASLO)VALUES ('$l', '$h');";
		
		$q = mysqli_query($p, $rej);
		$q1 = mysqli_query($p, $z);
		$r = $p->query($z)->fetch_array(MYSQLI_NUM);
	
		
			if($q1 != $l)
			{
				echo "Login istnieje już w bazie";
			}
			else
			{
				session_start();
				$_SESSION['czyZarejestrowano'] = 1; 
				header("Location: logowanie.php");
			}
		
	}
		
		
?>