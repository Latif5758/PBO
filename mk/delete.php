<?php 
	include "../connection.php";

	$id = $_GET["mata_kuliah"];

	$sql = ociparse($conn, "declare begin
			p_mahasiswa_mata_kuliah('', '', $id, 'del_mk'); 
			p_mahasiswa_nilai('', '', $id, '', 'del_mk');
			p_mata_kuliah($id, '', '', 'delete'); 
		end;");
	oci_execute($sql);

	if (oci_num_rows($sql) > 0) {
		echo "
			<script>alert('mata kuliah berhasil dihapus');
				document.location.href = 'index.php';
			</script>
		";
	}
?>