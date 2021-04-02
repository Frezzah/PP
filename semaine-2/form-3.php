<!DOCTYPE html>

<html>

	<head>
		<title>Formulaire</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<form method="get" action="live-3.php">
			<input type="number" name="age" required placeholder="Age">
			<input type="text" name="prenom" required placeholder="Prénom">
			<select name="sexe">
				<option value="homme">Homme</option>
				<option value="femme">Femme</option>
			</select>
			<input type="submit" value="Afficher">
		</form>
	</body>

</html>