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
	$query = "SELECT menu.nome_menu, primo.nome, secondo.nome, dessert.nome FROM primo INNER JOIN menu ON primo.id = menu.id_primo INNER JOIN secondo ON secondo.id = menu.id_secondo INNER JOIN dessert ON dessert.id = menu.id_dessert WHERE menu.nome_menu = '$menu'";

	/*//query
	$q_primo = "SELECT nome FROM primo WHERE id=1";
	$ris_primo = $conn->query($q_primo);
	$array_primo = $ris_primo->fetch_array(MYSQLI_ASSOC);	
	foreach ($array_primo as $primo)

	$q_secondo = "SELECT nome FROM secondo WHERE id=1";
	$ris_secondo = $conn->query($q_secondo);
	$array_secondo = $ris_secondo->fetch_array(MYSQLI_ASSOC);	
	foreach ($array_secondo as $secondo)
	  
	$q_dessert = "SELECT nome FROM dessert WHERE id=1";
	$ris_dessert = $conn->query($q_dessert);
	$array_dessert = $ris_dessert->fetch_array(MYSQLI_ASSOC);	
	foreach ($array_dessert as $dessert)


	/*$crea_tab_primo = "CREATE TABLE primo (
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL)";

    $crea_tab_secondo = "CREATE TABLE secondo (
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL)";

    $crea_tab_dessert = "CREATE TABLE dessert (
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL)";

    $crea_tab_menu = "CREATE TABLE menu (
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
	primo VARCHAR(30) FOREIGN KEY REFERENCES primo.id,
	secondo VARCHAR(30) FOREIGN KEY REFERENCES secondo.id,
	dessert VARCHAR(30) FOREIGN KEY REFERENCES dessert.id)";

	$val_tab_primo = "INSERT INTO primo (id, nome)
	VALUES (1, Pasta al pomodoro);"
	$conn->query($val_tab_primo);

	$val_tab_primo = "INSERT INTO primo (id, nome)
	VALUES (2, Spaghetti alla carbonara);"
	$conn->query($val_tab_primo);

	$val_tab_primo = "INSERT INTO primo (id, nome)
	VALUES (3, Spaghetti allo scoglio);"
	$conn->query($val_tab_primo);*/
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
	<?php echo $primo; ?><br>
	<?php echo $secondo; ?><br>
	<?php echo $dessert; ?><br>
</div>
</body>
</html>