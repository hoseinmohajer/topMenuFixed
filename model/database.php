<?php


function query($query){
	
	$sql = mysql_connect("localhost", "root", "root");
	if(!$sql){
		die("There is an error in database connection: ". mysqli_connect_errno());
	}
	$con = mysql_select_db("resturant");
	if(!$con){
		die("There is an error in database selection: ". mysqli_connect_errno());
	}
	$_query = mysql_query($query);
	if ($_query) {
	  return $_query;
	} else {
	  echo "Error creating table: " . mysqli_error($con);
	}

	// $select = mysqli_query($con, "SELECT ".$foo." FROM ".$tablename." WHERE ".$colname = $colvalue."");

	mysqli_close($con);
}




?>