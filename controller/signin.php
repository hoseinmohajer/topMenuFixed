<?php
include_once "../model/database.php";
include_once "../utils/error.php";
session_start();
$sql = query("SELECT password FROM `users` where username = '".$_POST['username']."'");

while($row[]=mysql_fetch_array($sql));
if($row[0]['password'] == $_POST['password']){
	$_SESSION['username'] = $_POST['username'];
	header('Location: ../view/htm/index.php');
}else{
	header('Location: ../view/htm/signin.php');
}

?>






