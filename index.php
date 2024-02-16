<?php
require_once "Database.php";

$usedb=new Database;
echo $usedb -> insertData(); echo "<br>";
echo $usedb -> db(); 
echo $usedb -> ambil();
echo $usedb -> selectData();  echo "<br>";
echo $Database::selecData();
echo $usedb -> selecData(); 

echo "<br>";
$usepenjualan=new penjualan;
echo $usepenjualan ->barang(); echo "<br>";
echo Penjualan::pelanggan();



?>