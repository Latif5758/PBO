<?php 
	$conn = oci_connect("VOKER", "invokerjaya");
	if (!$conn) echo "[failed] can not connect to database";
	error_reporting(0);	
?>