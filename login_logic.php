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