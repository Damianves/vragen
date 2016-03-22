<?php
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$logname='visitor1';
	$pass='test';
	?>
	<?php
	if ($username==$logname and $password==$pass) {
		header('Location: http://localhost/vragen/vragenadmin.php');
		$admin="true";
	}
	else
	{
		$failed="Gebruikersnaam of wachtwoord is onjuist";
	}
?>
