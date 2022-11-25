<?php 
	$conn = oci_connect("VOKER", "invokerjaya");
	if (!$conn) {
		echo "[failed] can not connect to database";
		
	} else {
		// echo "[success] connected to database";
	}
?>