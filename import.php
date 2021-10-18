<form action="import.php" method="POST">
	<h1>ZAKUP RZECZY</h1></br>
ID Towaru: <input type="number" name="idtowar"/></br>
Ilość: <input type="number" name="ilosc"/></br>
<button type="submit"> ZAKUP </button>
</form>
<a href="kiosk.php">SPRAWDŹ ITEMY</a><br/>
<a href="sprzedaz.php">SPRZEDAJ ITEMY</a><br/>



<?php 
$con = mysqli_connect("localhost","root","","kiosk");

$idt = $_POST['idtowar'];
$ilosc = $_POST['ilosc'];
$cena = $_POST['cena'];

$zap = "UPDATE towary SET `ilosc` = $ilosc WHERE IdTowar = $idt";


mysqli_close($con);
?>

