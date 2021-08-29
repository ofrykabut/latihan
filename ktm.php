<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale">
	<title>krm</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
	<script>
		window.print();
	</script>
<title>Kartu KTM</title>
</head>
<body>
</head>
<body>
<form>
<table style="vertical-align: 7px" width="400" align="center" cellpadding="15" cellspacing="9" bgcolor="003300">
<tr><td>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="003300">
	<table>
		<tr>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<td>
				<img src="logo/12.jpg"></td>
			<td>
				<p style="color:pink"><strong>IKATAN MAHASISWA MANGGARAI</strong>
					<strong> KEFAMENANU</strong>sss
				</p><p style="color:pink">SELAMAT DATANG</p>
			</td>
		</tr>
	</table>
<tr>
</tr>

<tr>
<td bgcolor="FFFFFF"><table width="500" border="0" align="center" cellpadding="3" cellspacing="2">
<tr>
<td width="150">Nama</td>
<td width="11">:</td>
<td width="237">
<?php
$namaku=$_POST["nm"];
print $namaku;
?></td>
<td rowspan="6" valign="center">

<?php
//fungsi untuk menyimpan gambar
$foto1=$_FILES["foto"]["tmp_name"];
$foto2=$_FILES["foto"]["name"];

if(move_uploaded_file($foto1, $foto2))
{
echo "";

}
else
echo "Upload Foto GAGAL";
echo  "<img src='$foto2' height=100 width=80>" ;

?>

</td>
</tr>
<tr>
<td>Tempat/Tanggal Lahir</td>
<td>:</td>
<td>
<?php
$tempat=$_POST["tempat-lahir"];
print $tempat;
echo ",";
$tgllahir = $_POST["tgl"];
print $tgllahir;
?>
</td>
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
<td>Program Studi</td>
<td>:</td>
<td>
<?php
$prog="Teknik Informatika";
echo " $prog ";
?>
</td>
</tr>
<tr>
<td>NPM</td>
<td>:</td>
<td>
<?php
$nim=$_POST["npm"];
print $nim;
?>
</td>
</tr>
<tr>
<td align="top">Alamat</td>
<td>:</td>
<td>
<?php
$alt=$_POST["alamat"];
print $alt;
?>
</td>
</tr>
<tr></tr>
<tr>
<td colspan="4" align="center"><font size="2" color="006600">kartu br</td>
</tr>
</table></td>
</tr>
</table>
</td>
</td>
</tr>
</table>
</form>
</body>
</html>