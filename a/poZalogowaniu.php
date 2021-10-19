<?php
require_once "funkcje.php";
czyZalogowany();

echo "<br />witaj ", $_SESSION['login'];



?>

<form method="POST" action="poZalogowaniu.php">
	<button type="submit" name="wyloguj">wyloguj</button>
	<button type="submit" name="zmien">zmien haslo</button>
	<button type="submit" name="usun">usun</button>
</form>

<?php
if(isset($_POST['wyloguj']))
{
	wyloguj();
	
	header("Location: logowanie.php");
}
?>