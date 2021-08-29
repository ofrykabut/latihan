<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
</head>
<body>
	<marquee>
		<h1 style="color: pink">SELAMAT DATANG DI FORM DATA KARTU MAHASISWA MANGGARAI SECARA DIGITAL DI HARAPKAN ISI DENGAN BAIK</h1>
		<h1 style="color: pink">SELAMAT DATANG DI FORM DATA KARTU MAHASISWA MANGGARAI SECARA DIGITAL DI HARAPKAN ISI DENGAN BAIK</h1>
	</marquee>

</body>
</html>
<html>
<head>
<title>Pendaftaran KTM</title>
</head>
<meta charset="utf-8">
<title>jQuery UI Datepicker – Default functionality</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"&gt;
<script src="http://code.jquery.com/jquery-1.9.1.js"></script&gt;>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script&gt;>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( “#tgl” ).datepicker();
});
</script>
<body>
<form enctype="multipart/form-data"method="post" action="ktm.php" >
<table width="452" border="0" align="center" cellpadding="2" cellspacing="5" bgcolor="003300">
<tr>
<td height="40" align="center" bgcolor="5EAE9E"><strong><font color="F9FDFF">INSERT DATA</font></strong></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><table width="400" border="0" align="center" cellpadding="3" cellspacing="5">
<tr>
<td width="113">Nama</td>
<td width="11">:</td>
<td width="237"><input name="nm" type="text"  size="30" maxlength="30"></td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><input name="tempat-lahir" type="text"  size="30" maxlength="30"></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><input type="date" id="tgl" name="tgl"></td>
</tr>
<tr>
<td>Fakultas</td>
<td>:</td>
<td>
<?php
$fakultas="Teknik";
echo " $fakultas ";
?></td>
</tr>
<tr>
<td>Prog.Studi</td>
<td>:</td>
<td>
<?php
$prog="Teknik Informatika";
echo  $prog ;
?>
</td>
</tr>
<tr>
<td>NPM</td>
<td>:</td>
<td><input name="npm" type="text"  size="12" maxlength="30"></td>
</tr>
<tr>
<td align="top">Alamat</td>
<td>:</td>
<td><textarea align=top name="alamat" cols="30" rows="2"></textarea></td>
</tr>
<tr>
<td>Pass Foto</td>
<td>:</td>
<td><input name="foto" type="file" id="foto" size="30" /></td>
</tr>
<tr>
<td colspan="3" align="right"><input type="reset" value="Hapus Form"><input name="simpan" type="submit" value="Simpan Data" bgcolor="1FCB4A"></td>
</tr>
</table></td>
</tr>
</table>
</form>
</body>
</html>