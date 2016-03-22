<?php 
$admin = $_POST['admin'];
$adm="true";

if (!$adm== $admin){

	header('Location: http://localhost/vragen/login.php');
}else{

	header('Location:http://localhost/vragen/vragenadmin.php');
}


?>