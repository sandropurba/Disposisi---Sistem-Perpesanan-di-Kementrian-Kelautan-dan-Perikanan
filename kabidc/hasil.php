<?php
include("koneksi.php");
if(isset($_GET['act']) && $_GET['act']=="tambahberita"){//Jika Penambahan
	$perihal_surat = mysql_real_escape_string($_POST['tperihal']);
	$no_surat = mysql_real_escape_string($_POST['tno']);
	$tanggal_surat = mysql_real_escape_string($_POST['ttanggal']);
	$dateline_surat = mysql_real_escape_string($_POST['tdateline']);
	$tujuan_desposisi = mysql_real_escape_string($_POST['ttujuan']);

	$dataku= "INSERT INTO tbkabidc VALUES('$perihal_surat','$no_surat','$tanggal_surat','$dateline_surat','$tujuan_desposisi')";
$sql = mysql_query($dataku);
	if($sql){
		echo "<script>
				alert('Data Berhasil Di Tambah.');
			location.href='ktu.php?menu=penanganan&amp';
		</script>";
	}
}
?>
