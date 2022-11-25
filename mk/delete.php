<?php 
	include "../connection.php";

	$id = $_GET["mata_kuliah"];

	$sql = ociparse($conn, "declare begin p_mata_kuliah($id, '', '', 'delete'); end;");
	oci_execute($sql);

	if (oci_num_rows($sql) > 0) {
		echo "
			<script>alert('mata kuliah berhasil dihapus');
				document.location.href = 'index.php';
			</script>
		";
	}
?>