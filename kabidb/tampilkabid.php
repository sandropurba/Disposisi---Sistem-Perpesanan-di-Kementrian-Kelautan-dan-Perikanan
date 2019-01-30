<?php
function getDatetimeNow() {
    $tz_object = new DateTimeZone('Asia/Jakarta');
    //date_default_timezone_set('Asia/Jakarta');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d');
}
?>
<html>
<head><title>Data Kasubdit Penyidikan</title>
<style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	font-weight: bold;
}
.style3 {color: #FF0000}
.style4 {
	font-size: x-large;
	font-weight: bold;
}
-->
</style>
<div id="container">
</head>
<body>
<div style="margin-bottom:15px;" align="right">
		<form action="barbuk.php?menu=searchb&amp;act=search" method="post" name="formcari">
		<input type="text" name="perihal_surat" placeholder="Cari Berdasar Perihal Surat" class="masuk" style="width:250px;" />
		<input type="submit" name="submit" id="tombol" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
		</form>
	</div>
<div id="atas">Kasubdit Penyidikan</div>
<link rel="stylesheet" href="../css/style.css">  
<link rel="stylesheet" href="../css/style2.css">  

  <?php
date_default_timezone_set("Asia/Jakarta");
$query = mysql_query ("SELECT * FROM tbkabidb order by tanggal_surat DESC");
?>
<div align="center">
  <table border="1" cellpadding="5">
  <tr class="head">
	  <th>Perihal Surat</th>
	  <th>Nomor Surat</th>
	  <th>Tanggal Surat</th>
	  <th>Dateline Surat</th>
	  <th>Tujuan Disposisi</th>
	  <th>Status Surat</th>
	  <th>Propertis</th>
	</tr>
  <?php
while ($row = mysql_fetch_assoc ($query)){
$tanggal_surat = $row['tanggal_surat'];
$dateline_surat = $row['dateline_surat'];
?>
		
  <tr>
	  <td data-content="perihal surat"><?php echo $row['perihal_surat'];?></td>
	  <td data-content="Nomor Surat"><?php echo $row['no_surat'];?></td>
	  <td data-content="Tanggal Surat"><?php echo $row['tanggal_surat'];?></td>
	  <td data-content="Dateline Surat"><?php echo $row['dateline_surat'];?></td>
	  <td data-content="Tujuan Disposisi"><?php echo $row['tujuan_desposisi'];?></td>
	  <td data-content="Status Surat">
<?php  

//echo getDatetimeNow();exit;

  $datetime1 = new DateTime($dateline_surat);
  $datetime2 = new DateTime(getDatetimeNow());
  $difference = $datetime1->diff($datetime2);
  //echo $difference->days;
  
if (getDatetimeNow() >= $dateline_surat){
	echo "<font color='black'><font size=1>Sudah Habis!!!";
}elseif($difference && $difference->days > 1){
	echo "<font color='green'><font size=1><b>".$difference->days." hari lagi</b></font>";
}elseif($difference->days == 1){
	echo "<font color='red'><font size=1><b>Masa Berlaku akan Habis!!!</b></font>";
}
?>
	  </td>
	  <td data-content="Propertis" width="100"><div align="center"><a href="kabidb/teruskankabid.php?id=<?php echo $row['no_surat'];?>"><strong>Tindak Lanjut</strong></a></div></td>
  </tr>
  <?php
}
?>
  </table>
</div>
</div>
</body>
</html>