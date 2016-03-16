<?php
	$connection = new mysqli('localhost','root','','vragen');
		
	$sql = "SELECT * From vraag";
	
	$result = $connection->query($sql);
	
	$questions = $result->fetch_all(MYSQLI_ASSOC);

?>