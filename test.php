<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','vragen');

	// prepare id and values to be updated in table books in database
	$id = $connection->escape_string($_GET["id"]);
	$answer =$connection->escape_string($_GET["answer"]);
	
	
	// prepare update instruction
	$sql = "UPDATE vraag SET answer = '$answer' WHERE id = $id";
	
	// execute update instruction
	$result = $connection->query($sql);
?>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$vraag = NULL;
		if (isset($_GET['id'])):
			
			$db = new mysqli('localhost','root','','vragen');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * from vraag where id=$id";
			$result = $db->query($query);
		
			$vraag = $result->fetch_assoc();		
		endif;
		if ($vraag == NULL):
			
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','vragen');
		
		
		$id = $db->escape_string($_POST["id"]);
		$answer = $db->escape_string($_POST["answer"]);
		

		
		
		
		$query = "UPDATE vraag set answer='$answer' where id=$id";
		$result = $db->query($query);
	
    
    
    exit();
	endif;

?>