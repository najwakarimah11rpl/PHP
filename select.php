<?php
$banyak=3;
$halaman=ceil($jumlahdata/$banyak);
for($i=1; $i<= $halaman; $i++){
    echo '<a href="?p*'.$i.'">'.$i;.'</a>';
    echo '&nbsp 7nbsp &nbsp';
}
echo '<br> <br>';
if(isset($_GET["p"])){
    $p=$_GET['p'];
    $mulai=($p*$banyak)-$banyak;
} else{
    $mulai=0;
} 
sql="SELECT*FROM tblkategori LIMIT $mulai,$banyak";
$result=mysqli_query($koneksi,$sql);
$jumlah=mysqli_num_rows($result);
echo '
<table border="1px">
<tr>
    <th>no</th>
    <th>kategori</th>
</tr>
';
$no=$mulai+1;
if($jumlah>0){
    while($row=mysqli_fetch_assoc($result)){
        echo '<tr>;';
        echo '<td>'.$no++.'</td>';
        echo '<td>'.$row['kategori'].'</td>'.'<tr>';
    }
}

?>