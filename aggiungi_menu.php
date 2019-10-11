<!DOCTYPE html>
<html>
<head></head>
<body>
	<span>Primi:</span><br>
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

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connessione fallita: " . $conn->connect_error);
	}
		
		$q_primo = "SELECT * FROM primo";
		$ris_primo = $conn->query($q_primo);	
		if ($ris_primo->num_rows > 0) {
		    while($row = $ris_primo->fetch_assoc()) {
		        echo($row["id"]. ") " . $row["nome"]. '<br>');
		    }
		}
?>
	<br><span>Secondi:</span><br>
	<?php
			$q_secondo = "SELECT * FROM secondo";
			$ris_secondo = $conn->query($q_secondo);	
			if ($ris_secondo->num_rows > 0) {
			    while($row = $ris_secondo->fetch_assoc()) {
			        echo($row["id"]. ") " . $row["nome"]. '<br>');
			    }
			}
	?>
	<br><span>Dessert:</span><br>
	<?php
			$q_dessert = "SELECT * FROM dessert";
			$ris_dessert = $conn->query($q_dessert);	
			if ($ris_dessert->num_rows > 0) {
			    while($row = $ris_dessert->fetch_assoc()) {
			        echo($row["id"]. ") " . $row["nome"]. '<br>');
			    }
			}
	?>
	<form method="post" action="aggiungi_menu.php">
		<br><span>Per inserire un nuovo menu: </span><br><br>
		<span>Inserisci il nome del menu: </span>
		<input type="text" name="new_menu"><br><br>

		<span>Inserisci l'id del primo: </span>
		<input type="number" name="new_primo"><br><br>

		<span>Inserisci l'id del secondo: </span>
		<input type="number" name="new_secondo"><br><br>

		<span>Inserisci l'id del dessert: </span>
		<input type="number" name="new_dessert"><br><br>

		<input type="submit" name="Invio">
	</form>
	<?php
		$new_menu = $_POST['new_menu'];
		$new_primo = $_POST['new_primo'];
		$new_secondo = $_POST['new_secondo'];
		$new_dessert = $_POST['new_dessert'];

		$query = "INSERT INTO menu (nome_menu, id_primo, id_secondo, id_dessert) VALUES ('$new_menu', '$new_primo', '$new_secondo', '$new_dessert')";
	?>
</body>
</html>

