<?php
$connection = new mysqli('localhost','root','','vragen');


$stmt = $connection->prepare("INSERT INTO vraag (question, firstname, lastname) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $question, $firstname, $lastname);

$question = $_GET['question'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];

$stmt->execute();


$connection->close();



?>
<?php
header('Location:http://localhost/vragen/home.php');

?>




