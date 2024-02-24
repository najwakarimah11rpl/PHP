<?php
require_once "../function.php";
$sql="SELECT *FROM tblkategori WHERE idkategori=$id";
$result=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_assoc($result);

$kategori="jelly";
$id=18;
$sql="UPDATE tblkategori SET kategori='$kategori'WHERE idkategori=$id";
$result=mysqli_query($koneksi,$sql);
echo $sql;
?>