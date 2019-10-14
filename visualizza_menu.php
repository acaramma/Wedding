<!DOCTYPE html>
<html>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "Ciao123@";
		$dbname = "wedding";
		
		function console_log( $data ){
		  echo '<script>';
		  echo 'console.log('. json_encode( $data ) .')';
		  echo '</script>';
		}	

		// connessione db
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		    die("Connessione fallita: " . $conn->connect_error);
		}

		//visualizza i menu
		$q_menu = "SELECT * FROM menu";
		$ris_menu = $conn->query($q_menu);	

		$q_primo = "SELECT primo.nome FROM primo INNER JOIN menu ON primo.id = menu.id_primo WHERE menu.id_primo = primo.id";
		$ris_primo = $conn->query($q_primo);

		$q_secondo = "SELECT secondo.nome FROM secondo INNER JOIN menu ON secondo.id = menu.id_secondo WHERE menu.id_secondo = secondo.id";
		$ris_secondo = $conn->query($q_secondo);

		$q_dessert = "SELECT dessert.nome FROM dessert INNER JOIN menu ON dessert.id = menu.id_dessert WHERE menu.id_dessert = dessert.id";
		$ris_dessert = $conn->query($q_dessert);

		if ($ris_menu->num_rows > 0) {
		    while($row = $ris_menu->fetch_assoc()) {
		        echo($row["id_menu"]. ") " . $row["nome_menu"]. '<br>');
		        
				$array_primo = $ris_primo->fetch_array(MYSQLI_ASSOC);	
				foreach ($array_primo as $primo)
				echo($primo . '<br>');
				
				$array_secondo = $ris_secondo->fetch_array(MYSQLI_ASSOC);	
				foreach ($array_secondo as $secondo)
				echo($secondo . '<br>');
				
				$array_dessert = $ris_dessert->fetch_array(MYSQLI_ASSOC);	
				foreach ($array_dessert as $dessert)
				echo($dessert . '<br><br>');
		    }		    
		}		
	?>

	<form method="post" action="visualizza_menu.php">
		<span>Cancella il menu: </span><br>
		<span>Inserisci l'id del menu: </span>
		<input type="number" name="delete_menu">
		<input type="submit" name="Invio">
	</form>

	<?php
		//cancella il menu
		$delete_menu = $_POST['delete_menu'];
		$query = "DELETE FROM menu WHERE id_menu = '$delete_menu'";
		$del_menu = $conn->query($query);
	?>
</body>
</html>