<?php
require_once "balogic.php";
$id=$_GET['id'];
?>

<form  method="post">
		<div>
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<label for="name">Vraag beantwoorden:</label>
			<input type="text" id="answer" name="answer">
		</div>
		
		<div>
			<label>Save answer</label>
			<input type="submit" value="Save">
		</div>
	</form>
	