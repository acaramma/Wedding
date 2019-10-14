<html>
<body>
<div id="container">
	<form method="post" action="menu.php">
		<span>Visualizza il contenuto del menù </span><br>
		<span>Inserisci il nome del menù: </span>
		<input type="text" name="menu">
		<input type="submit" name="Invio">
	</form>

	<form method="post" action="aggiungi.php">		
		<span>Inserisci la tipologia del piatto:</span><br>
		<select>
			<option name="tipo" value="primo">Primo</option>
			<option name="tipo" value="secondo">Secondo</option>
			<option name="tipo" value="dessert">Dessert</option>
		</select>
		<br><span>Aggiungi nuovi piatti:</span>
		<input type="text" name="new_piatti">
		<input type="submit" name="Invio">
	</form>	

	<form method="post" action="aggiungi_menu.php">
		<span>Visualizza e inserisci il nuovo menù:</span>
		<input type="submit" name="Invio">
	</form>

	<form method="post" action="visualizza_menu.php">
		<span>Visualizza e cancella i menù: </span>
		<input type="submit" name="Invio">
	</form>
</div>
</body>
</html>