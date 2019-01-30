<?php
include "../koneksi.php";
//proses input data siswa
if(isset($_POST['cmdinput'])) {
$perihal_surat=   addslashes(strip_tags($_POST['tperihal']));
$no_surat=   addslashes(strip_tags($_POST['tno']));
$tanggal_surat=   addslashes(strip_tags($_POST['ttanggal']));
$dateline_surat=   addslashes(strip_tags($_POST['tdateline']));
$tujuan_desposisi=   addslashes(strip_tags($_POST['ttujuan']));
$nama=   addslashes(strip_tags($_POST['tpelaksana']));
$jabatan=   addslashes(strip_tags($_POST['tjabatan']));
$keterangan=   addslashes(strip_tags($_POST['tketerangan']));
//insert ke tabel
$dataku= "INSERT INTO kabidblanjut VALUES('$perihal_surat','$no_surat','$tanggal_surat','$dateline_surat','$tujuan_desposisi','$nama','$jabatan','$keterangan')";
$sql = mysql_query($dataku);
if ($sql) {
 echo"
	<script>
				alert('Data Berhasil Di Tambah.');
			location.href='../barbuk.php?menu=tampilkabidb';
		</script>";
}else{
echo "<h2><font color=red> Data gagal ditambahkan, Data Tersebut Sudah Ditambahkan Sebelumnya</font></h2>";
}
}
?>