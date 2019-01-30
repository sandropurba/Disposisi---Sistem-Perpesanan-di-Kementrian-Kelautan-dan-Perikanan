<!doctype html>
<?php include("kabidc/hasil.php");?>
<html>
<head>
	<title>Pesan</title>
	<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css"/>
<link href="css/style.css" rel="stylesheet" />
<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'Y-m-d',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#dateline').Zebra_DatePicker({
            format: 'Y-m-d',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>
	</head>
<body>
<div align="center">
<form action="ktu.php?menu=penanganan&amp;act=tambahberita" method="post" enctype="multipart/form-data" name="frminput">
<div id="atas">Input Surat</div>
<table cellpadding="10" cellspacing="10" border="0" width="807">
<tr>
<td width="130">Perihal Surat</td>
<td width="12">:</td>
<td width="565"><textarea name="tperihal" cols="30"></textarea></td>
</tr><br>
<tr>
<td>Nomor Surat</td>
<td>:</td> <td><input type="text" name="tno" size="39"></td>
</tr>
<tr>
<td>Tanggal Surat</td>
<td>:</td> <td><input type="text" name="ttanggal" id="tanggal" /></td>
</tr>
<tr>
<td>Dateline Surat</td>
<td>:</td><td><input type="text" name="tdateline" id="dateline"/></td>
</tr>
<tr>
<td>Tujuan Desposisi</td>
<td>:</td><td><input type="text" name="ttujuan" size="60" Value="Kasubdit Penanganan Barang Bukti Dan Awak Kapal"></td>
</tr>
<tr>
<td></td><td></td>
<td>&nbsp;&nbsp;
  <a  class="button" href="http://<?=$myUrl;?>/ktu.php?menu=halamandepan">Tutup</a></li>
  <input type="submit" class="button" name="cmdinput" value="Submit">  &nbsp;
  </td>
</tr>
</table>
</div>
</body>
</html>