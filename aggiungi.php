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

	$tipo = $_POST["tipo"];
	$new_piatti = $_POST["new_piatti"];

	$query = "INSERT INTO $tipo (nome) VALUES ('$new_piatti')";
	if(mysqli_query($conn, $query)){
    echo "Piatto inserito";
	} else{
	    echo "Errore";
	}

?>