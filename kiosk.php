	<style>
		table {
			width: 100%;
		}
		th, td{
			border: 1px solid #dddddd;
			text-align: center;
			}
	</style>
	<h1>NASZ ASORTYMENT</h1></br>
	<a href="import.php">ZAKUP ITEMY</a><br/>
	<a href="sprzedaz.php">SPRZEDAJ ITEMY</a><br/>
<?php 
	$con = mysqli_connect("localhost","root","","kiosk");
	
	$zap = "SELECT * FROM towary";
	
	$q = mysqli_query($con, $zap);
	
	while ($row = mysqli_fetch_array($q))
		{
			echo "
			<table>
				<tr>
					<th>ID</th>
					<th>Nazwa</th>
					<th>Opis</th>
					<th>Cena</th>
					<th>Ilość</th>
				</tr>
				<tr>
					<td>".$row['idTowar']."</td>
					<td>".$row['Nazwa']."</td>
					<td>".$row['Opis']."</td>
					<td>".$row['CENA']."</td>
					<td>".$row['ILOŚĆ']."</td>
				</tr>
			</table>";
		}
	
	
	mysqli_close($con);
?>
