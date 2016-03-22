<?php  
require_once 'select.php';
require_once "check.php";


?>


<!DOCTYPE html>
<html>
<head>
	<title>Vragen admin</title>
	<link rel="stylesheet" type="text/css" href="vraag.css">
</head>
<body>
	<div class="top">
		<h2><a href="../vragen/login.php">Admin</a><h2>
		<h1>Vragen</h1>
		<p>Stel ze hier!</p>
	</div>
<div class="content">

<form action="add.php" method="get"> 
				
				<label> Vraag:</label>
					<input name="question"placeholder="Invoeren vraag"><br>
				<label>Voornaam:</label>
					<input name="firstname" placeholder="Invoeren voornaam"><br>
				<label>Achternaam:</label>
					<input name="lastname" placeholder="Invoeren achternaam"><br>
				<label><input type="submit" name="submit" value="save"></label><br>
</form>

<table>
	<thead>
		<tr>
			<th>Vraag</th>
			<th>Voornaam</th>
			<th>Achternaam</th>
			<th>Antwoord</th>
			<th>link</th>
			<th>delete</th>
		</tr>
	</thead>
<?php
	foreach($questions as $question) {
?>
	
	<tr>
		<td><?php echo $question['question'];?></td>
		<td><?php echo $question['firstname'];?></td>
		<td><?php echo $question['lastname'];?></td>
		<td><?php echo $question['answer'];?></td>
		<td><a href="ba.php?id=<?=$question['id']?>">vraag beantwoorden</a></td>
		<td><a href="delete.php?id=<?$question['id']?>">vraag verwijderen</a></td>
					
	</tr>	
	
<?php
	}
?>

</div>
</body>
</html>