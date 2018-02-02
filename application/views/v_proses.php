<?php
$cn = new mysqli('localhost','root','','ticketnusantara');
if (isset($_POST['id']))
{ 
	$xid=$_POST['id'];
	$name=$_POST['nama'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];	
	$phone=$_POST['phone'];
$query_masuk="insert into tbakun(id,name,address,gender,phone) values ('$xid','$name','$address','$gender','$phone')";
$cn->query($query_masuk);
}
if ($cn)
{
	echo "<script type='text/javascript'>
			alert('Data Berhasil Disimpan. Lihat Data');
			top.location='lihat.php'; 
			</script>";
}
else
{
	echo "<script type='text/javascript'>
			alert('Nik Sudah Ada, Gagal Menyimpan Data');
			top.location='data.php'; 
			</script>";
}
?>