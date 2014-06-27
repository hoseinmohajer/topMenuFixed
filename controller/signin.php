<?php
include_once "../model/database.php";
include_once "../utils/error.php";

// $result = query("SELECT password FROM users WHERE username ='" . $_POST["username"] . "'");

// print_r($result);

$con = mysql_connect("localhost", "root", "root");
	if(!$con){
		die("There is an error in database connection: ". mysqli_connect_errno());
	}
mysql_select_db("resturant");	
$sql = "SELECT * FROM `users` where username = 'admin'";
$sql = mysql_query($sql);
echo mysql_error();

//= Closed while ====================//
/*everytime it fetches the row, adds it to array...*/
while($r[]=mysql_fetch_array($sql));

echo "<pre>";
//= Prints $r as array =================//
print_r ($r);
//=============================//
echo "</pre>";

?>






