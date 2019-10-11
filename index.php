<html>
<head>
	<title>Wedding Planner</title>
</head>
<body>
	<div id= "container">
		<form method="post" action="menu.php">
			<span>Seleziona il menù</span><br>
			<input type="radio" name="menu" value="terra">Terra<br>
			<input type="radio" name="menu" value="mare">Mare<br>
			<input type="radio" name="menu" value="linea">Linea<br><br>
			<span>Conferma per visualizzare il menù: </span>
			<input type="submit" name="Invio">
		</form>
		<form method="post" action="aggiungi.php">		
			<span>Inserisci il tipo di piatto:</span><br>
			<input type="radio" name="tipo" value="primo">Primo<br>
			<input type="radio" name="tipo" value="secondo">Secondo<br>
			<input type="radio" name="tipo" value="dessert">Dessert<br><br>
			<span>Aggiungi nuovi piatti:</span><br><br>
			<input type="text" name="new_piatti">
			<input type="submit" name="Invio">
		</form>
	</div>
</body>
</html>