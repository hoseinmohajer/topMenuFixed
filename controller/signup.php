<?php
include_once "../model/database.php";
include_once "../utils/error.php";
if($_POST){
	query("insert into users (`firstname`, `lastname`, `username`, `password`, `phonenumber`, `cellphone`, `email`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['username']."','".$_POST['pass']."','".$_POST['phonenumber']."','".$_POST['cellphone']."','".$_POST['email']."')");
	header('Location: ../view/htm/signup.htm');
}else{
	// die("شما باید مقادیر خواسته شده را وارد کنید !");
	error("شما باید مقادیر خواسته شده را وارد کنید !", "warning");
}
?>






