<?php
function query($query){
	
	$con = mysql_connect("localhost", "root", "root");
	if(!$con){
		die("There is an error in database connection: ". mysql_error());
	}
	$select = mysql_select_db("resturant");
	if(!$select){
		die("There is an error in database selection: ". mysql_error());
	}
	$_query = mysql_query($query);
	if ($_query) {
	  return $_query;
	} else {
	  echo "Error creating table: " . mysql_error();
	}
	mysql_close($con);
}
?>