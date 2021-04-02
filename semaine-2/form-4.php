<!DOCTYPE html>

<html>

	<head>
		<title>Formulaire</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<form method="get" action="live-4.php">
			<input type="number" name="nb1" required placeholder="Nombre 1">
			<input type="number" name="nb2" required placeholder="Nombre 2">
			<select name="operation">
				<option value="+">Addition</option>
				<option value="-">Soustraction</option>
				<option value="*">Multiplication</option>
				<option value="/">Division</option>
			</select>
			<input type="submit" value="Calculer">
		</form>
	</body>

</html>