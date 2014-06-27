<?php
include_once "../model/database.php";
include_once "../utils/error.php";

if($_POST){
	query("insert into subscription (`email`) VALUES ('".$_POST['subscriptionEmail']."')");
	header('Location: ../view/htm/' . $_POST['pagename']);
}else{
	error("لطفا ایمیل معتبر وارد کنید !", "warning");
}


print_r($_POST['pagename']);

?>