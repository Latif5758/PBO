<?php 
	include "../connection.php";

	$id = $_GET["mahasiswa"];

	$sql = ociparse($conn, "declare begin p_mahasiswa($id, '', '', 'delete'); end;");
	oci_execute($sql);

	if (oci_num_rows($sql) > 0) {
		echo "
			<script>alert('mahasiswa berhasil dihapus');
				document.location.href = 'index.php';
			</script>
		";
	}
?>