<?php
function checkCircularLogged() {
	$sessionCircularUser=$_SESSION['circular_user'];
	$sessionCircularPass=$_SESSION['circular_pass'];
	if ($sessionCircularUser=="" || $sessionCircularPass=="") {
		$circular_logged_state=0; // Not Logged
	} else {
		$circular_logged_state=1; // Logged
	}

	return $circular_logged_state;
}

function makeRandomPassword($length="7", $showDateTime="") {
  $salt = "abchefghjkmnpqrstuvwxyz0123456789";
  srand((double)microtime()*1000); 
	$i = 0;
	while ($i <= $length) {
			$num = rand() % 33;
			$tmp = substr($salt, $num, 1);
			$pass = $pass . $tmp;
			$i++;
	}
	
	if ($showDateTime==1) {
		$dateTime=date("ymdHis");
	} else {
		$dateTime="";
	}
	return $dateTime.$pass;
}

function getFileExtension($filename) {
	$extension=strtolower(substr($filename, strrpos($filename, '.') + 1));
	return $extension;
}
?>