<?php
include ("../koneksi.php");
$query = mysql_query ("DELETE FROM tbkabidc WHERE no_surat='".$_GET['id']."'");
if ($query)
?>
<meta http-equiv="refresh" content="0; url=http://<?=$myUrl;?>/ktu.php?menu=Kasubdit Penanganan">