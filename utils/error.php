<?php
function error($msg, $type, $url) {
	switch ($type) {
		case 'success':
			echo $msg;
			break;
		case 'warning':
			echo $msg;
			break;
		case 'danger':
			echo $msg;
			break;
		
		default:
			echo "The type value is unknown!";
			break;
	}
}


?>