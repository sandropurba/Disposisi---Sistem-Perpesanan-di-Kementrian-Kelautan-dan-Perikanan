<html>
<style type="text/css">
<!--
.style7 {font-size: 13px}
-->
</style>
<head></head>
<link href="../css/style.css" rel="stylesheet" /> 
<body>
<div id="kotak2">
<div id="atas">Edit Data surat</div>
<?php
include ("../koneksi.php");
$query = mysql_query ("SELECT * FROM tbkabidb WHERE no_surat='".$_GET['id']."'");
$row = mysql_fetch_array ($query);
$a = $row['perihal_surat'];	   $b = $row['no_surat'];
$c = $row['tanggal_surat'];	   $d = $row['dateline_surat'];
$e = $row['tujuan_desposisi'];
?>

  <table border="0" cellpadding="5">
<form action="updatekabid.php" method="post">
<table width="581">
<tr>
   <td width="200" height="34">Perihal Surat</td><td width="40">:</td>
   <td width="600"><input type="text" name="tperihal" value="<?php echo $a;?>"readonly="readonly"><img class="gambar" src="../image/lock2.png" width="20" height="22"/></td>
</tr>
<tr>
   <td height="33">Nomor Surat</td><td>:</td>
   <td><input type="text" name="tno" value="<?php echo $b;?>"readonly="readonly"><img class="gambar" src="../image/lock2.png" width="20" height="22"/></td>
</tr>
<tr>
   <td height="32">Tanggal Surat</td><td>:</td>
   <td><input type="text" name="ttanggal" value="<?php echo $c;?>"readonly="readonly"><img class="gambar" src="../image/lock2.png" width="20" height="22"/></td>
</tr>
<tr>
   <td height="43">Dateline Surat</td><td>:</td>
   <td><input type="text" name="tdateline" value="<?php echo $d;?>"readonly="readonly"><img class="gambar" src="../image/lock2.png" width="20" height="22"/></td>
</tr>
<tr>
   <td height="43">Dateline Surat</td><td>:</td>
   <td><input type="text" name="ttujuan" value="<?php echo $e;?>"readonly="readonly"><img class="gambar" src="../image/lock2.png" width="20" height="22"/></td>
</tr>
<tr>
   <td height="43">Nama Pelaksana</td><td>:</td>
   <td><input type="text" name="tpelaksana" value=""></td>
</tr>
<tr>
   <td height="43">Jabatan</td><td>:</td>
   <td><input type="text" name="tjabatan" value=""></td>
</tr>
<tr>
   <td height="43">Keterangan</td><td>:</td>
   <td><input type="text" name="tketerangan" value=""></td>
</tr></select>  </td>
</tr>
<tr><td></td><td></td>
   <td><input class="button" type="submit" name="cmdinput" value="Proses">
     <a  class="button" href="http://<?=$myUrl;?>/barbuk.php?menu=Kasubdit penyidikan barbuk">Tutup</a></li></td>
</tr>
</table>
</form>
</div>
</body>
</html>