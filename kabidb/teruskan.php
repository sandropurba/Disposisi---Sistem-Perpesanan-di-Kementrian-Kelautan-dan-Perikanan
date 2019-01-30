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
<form action="update.php" method="post">
<table width="581">
<tr>
   <td width="200" height="34">Perihal Surat</td><td width="40">:</td>
   <td width="600"><input type="text" name="perihal_surat"  value="<?php echo $a;?>"></td>
</tr>
<tr>
   <td height="33">Nomor Surat</td><td>:</td>
   <td><input type="text" name="no_surat" value="<?php echo $b;?>" readonly="readonly"><img class="gambar" src="../image/lock2.png" width="20" height="22"/></td>
</tr>
<tr>
   <td height="32">Tanggal Surat</td><td>:</td>
   <td><input type="text" name="tanggal_surat"  value="<?php echo $c;?>"></td>
</tr>
<tr>
   <td height="43">Dateline Surat</td><td>:</td>
   <td><input type="text" name="dateline_surat"  value="<?php echo $d;?>"></td>
</tr>
<tr>
   <td height="43">Tujuan Disposisi</td><td>:</td>
   <td><input type="text" name="tujuan_desposisi"  value="<?php echo $e;?>"></td>
</tr>
<tr><td></td><td></td>
   <td><input class="button" type="submit" name="cmdinput" value="Submit">
     <a  class="button" href="http://<?=$myUrl;?>/ktu.php?menu=halamandepan">Tutup</a></li>
</tr>
</table>
</form>
</div>
</body>
</html>