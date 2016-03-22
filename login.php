<?php

require_once "login_logic.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Log-in</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div>
	<form action="" method="POST">
		<label>Naam<input type="text" name="name" placeholder="eigen naam invoeren"></label><br>
		<label>Username<input type="text" name="username" placeholder="voer username in"></label><br>
		<label>wachtwoord<input type="password" name="password" placeholder="voer wachtwoord in"></label><br>
		<input type="submit" value="save">
	</form>
	</div>

</body>
</html>