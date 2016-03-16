<?php
	$connection = new mysqli('localhost','root','','vragen');
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {

		$id =$connection->escape_string($_GET['id']);
		$query = "SELECT * from vraag where id=$id";


	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$id = $connection->escape_string($_POST['id']);
		$answer = $connection->escape_string($_POST['answer']);
		
		$sql = "UPDATE vraag SET answer = '$answer' WHERE id = $id";
		$result = $connection->query($sql);
		header('Location: http://localhost/vragen/home.php');
	}

	
?>
