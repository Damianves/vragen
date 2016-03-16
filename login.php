<?php
$name = $_GET['name'];
$username = $_GET['username'];
$password = $_GET['password'];
$logname='visitor1';
$pass='test';
?>
<?php
if ($username==$logname and $password==$pass) {
	$view='good';
	$frame='ok';
}
else
{
	$view='false';
	$frame='notok';
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Log-in</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body class="<?php echo $view; ?>">
	<div class="<?php echo $frame;?>">
	<form action="" method="GET">
		<label>Naam<input type="text" name="name" placeholder="eigen naam invoeren"></label><br>
		<label>Username<input type="text" name="username" placeholder="voer username in"></label><br>
		<label>wachtwoord<input type="password" name="password" placeholder="voer wachtwoord in"></label><br>
		<input type="submit" value="save">
	</form>
	</div>

</body>
</html>