<html>
<head>
	<title>Wedding Planner</title>
</head>
<body>
	<div id="container">
		<form method="post" action="menu.php">
			<span>Inserisci il nome del menu: </span>
			<input type="text" name="menu">
			<input type="submit" name="Invio">
		</form>

		<form method="post" action="aggiungi.php">		
			<span>Inserisci la tipologia del piatto:</span><br>
			<input type="radio" name="tipo" value="primo">Primo<br>
			<input type="radio" name="tipo" value="secondo">Secondo<br>
			<input type="radio" name="tipo" value="dessert">Dessert<br><br>
			<span>Aggiungi nuovi piatti:</span>
			<input type="text" name="new_piatti">
			<input type="submit" name="Invio">
		</form>	

		<form method="post" action="aggiungi_menu.php">
		<br><span>Per inserire un nuovo menu: </span>
			<input type="submit" name="Invio">
		</form>
	</div>
</body>
</html>
