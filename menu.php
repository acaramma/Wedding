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

	$menu = $_POST["menu"];
	//query
		$q_primo = "SELECT menu.nome_menu, primo.nome FROM primo INNER JOIN menu ON primo.id = menu.id_primo WHERE menu.nome_menu = '$menu'";
		$ris_primo = $conn->query($q_primo);
		$array_primo = $ris_primo->fetch_array(MYSQLI_ASSOC);	
		foreach ($array_primo as $primo)
	
		$q_secondo = "SELECT menu.nome_menu, secondo.nome FROM secondo INNER JOIN menu ON secondo.id = menu.id_secondo WHERE menu.nome_menu = '$menu'";
		$ris_secondo = $conn->query($q_secondo);
		$array_secondo = $ris_secondo->fetch_array(MYSQLI_ASSOC);	
		foreach ($array_secondo as $secondo)
	
		$q_dessert = "SELECT menu.nome_menu, dessert.nome FROM dessert INNER JOIN menu ON dessert.id = menu.id_dessert WHERE menu.nome_menu = '$menu'";
		$ris_dessert = $conn->query($q_dessert);
		$array_dessert = $ris_dessert->fetch_array(MYSQLI_ASSOC);	
		foreach ($array_dessert as $dessert)
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="menu">
	<span>Il menù selezionato è: </span><br>
	<?php echo $primo; ?><br>
	<?php echo $secondo; ?><br>
	<?php echo $dessert; ?><br>
</div>
</body>
</html>