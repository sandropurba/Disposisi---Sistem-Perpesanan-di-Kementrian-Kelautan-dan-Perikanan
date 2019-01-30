<?php
include ("../koneksi.php");
$a = $_POST['perihal_surat'];
$b = $_POST['no_surat'];
$c = $_POST['tanggal_surat'];
$d = $_POST['dateline_surat'];
$e = $_POST['tujuan_desposisi'];

$query = mysql_query ("UPDATE tbkabidb SET perihal_surat='$a',
tanggal_surat='$c', dateline_surat='$d', tujuan_desposisi='$e' WHERE no_surat='$b'");
?>
<script language="javascript"> alert ("DATA TELAH TERUPDATE");</script>
<meta http-equiv="refresh" content="0; url=http://<?=$myUrl;?>/barbuk.php?menu=Kasubdit Penyidikan">