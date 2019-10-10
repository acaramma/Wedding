<?php
	$servername = "localhost";
	$username = "root";
	$password = "Ciao123@";
	$dbname = "wedding";
	// connessione db
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connessione fallita: " . $conn->connect_error);
	}

	//query
	$primo = "SELECT nome FROM primo WHERE id=1";
	$ris_primo = $conn->query($primo);
	$secondo = "SELECT nome FROM secondo WHERE id=1";
	$ris_secondo = $conn->query($secondo);
	$dessert = "SELECT nome FROM dessert WHERE id=1";
	$ris_dessert = $conn->query($dessert);
?>