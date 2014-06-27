<?php


function query($query){
	
	$con = mysqli_connect("localhost", "root", "root", "resturant");
	if(!$con){
		die("There is an error in database connection: ". mysqli_connect_errno());
	}

	if (mysqli_query($con,$query)) {
	  // echo "the query execute successfully";
	  return mysqli_query($con,$query);
	} else {
	  echo "Error creating table: " . mysqli_error($con);
	}

	// $select = mysqli_query($con, "SELECT ".$foo." FROM ".$tablename." WHERE ".$colname = $colvalue."");

	mysqli_close($con);
}




?>