 <from>
    barang:
    <input type="text" name="namabarang" placeholder="barang"> <br>
    harga:
 <input type="submit" name="harga" placeholder="harga barang"> <br>
    stok:
    <input type="submit" name="stok" placeholder=" "> 
<button>simpan</button>



 
</from>
 

 <?php
 //php ke browser pake xamp

echo "PERCOBAAN PHP KE HTML";
echo "tabel barang";
$hos="127.0.0.1";
$user="root";
$db="dbtoko";
$pw="toko";

//database barang


$konek=new mysqli($hos, $user, $pw, $db);
if(isset($_POST["simpan"])){
$namabarang=$_POST["namabarang"];
$harga=$_POST["harga"];                
$stok=$_POST["stok"];

    $sql="INSERT INTO barang(namabarang,harga,stok) VALUES('$namabarang',$harga,$stok)";
    $hasil=mysqli_query($konek,$sql);

}
$namabarang="keyboard";
$harga=5000;                //values
$stok=5;

$sql="INSERT INTO barang(namabarang,harga,stok) VALUES('$namabarang',$harga,$stok)";
//$sql="INSERT INTO barang(namabarang,harga,stok) VALUES('mouse',9000,10)";
$hasil=mysqli_query($konek,$sql);


$s="SELECT * FROM barang";
$ha=mysqli_query($k, $s);
var_dump($ha);

echo "<table border=2px>
<thead>
<th> barang
</th>

</thead>  <tbody>"; <br>
while($row=mysqli_fetch_array)(ha){
    echo "";
    echo $row[0] ."<br>";
} echo "</tbody><table>"


//database pelanggan


$namapelanggan="ragil";
$alamat="magersari";
$telp=920137;


$sql="INSERT INTO pelanggan(namapelanggan,alamat,telp) VALUES('nana,taman pinang',292892)";
$sql="INSERT INTO pelanggan(namapelanggan,alamat,telp) VALUES('$namapelanggan,$alamat',$telp)";
$hasil=mysqli_query($konek,$sql);


//pelanggan gawe pr,d github. beda file jgn 1 file


echo "tabel pelanggan";
$sql="SELECT*FROM pelanggan";
echo "<table>
<thead> <th> pelanggan </th>
</thead> <tbody>";


while($ro=mysqli_fetch_array)(ha){
    echo "$ro[0]" ."<br>";
} echo "</tbody <table>";

?>