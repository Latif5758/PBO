<?php 
	$conn = oci_connect("VOKER", "invokerjaya");
	error_reporting(0);
	if (!$conn) {
		echo "[failed] can not connect to database";
		
	} else {
		// echo "[success] connected to database";
	}
?>