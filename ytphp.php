<?php
echo "TUGAS YUTUB NAJWA"."<br>";

//vid 2
echo "halo";

//vid 3
$tulisan= "belajarr";
echo $a;
$angka='2024';
echo 'Tahun.'.$angka.'<br>';
var_dump($tulisan); echo '<br>';
var_dump((int)$angka+2);

// vid 4
function belajar(){
    echo "saya belajar";

} function persegi($p=5,$l=3){
    $luas =$p*$l;
    echo $luas;
} function luas($p=5,$l=3){
    $luas =$p*$l;
    return $luas;
} function out(){
    return "balajar function";
} echo luas (100,3)*5;

// vid 5
$a=5; $b=10;
$c=$a+$b;  $c=$a-$b;    $C=$a<$b;
$c=$a*$b;  $c=$a/$b;    $c=$a%$b;
echo '<br>'.$c.'<br>';

// vid 6
$nilai=101;
if($nilai>100 ||$nilai<0){
    echo "nilai salah";
} else {echo "nilai benar";}

// vid 7
$pilihan='tambah';
switch($pilihan){
    case 'tambah':
        echo "anda memilih tambah";
        break;
    case 'ubah':
        echo 'anda memilih ubah';
        break;
    case 'hapus':
            echo 'anda memilih hapus';
            break;
    default: echo 'pilihan belum ada'; break;}

// vid 8
$aa=1; do{
    echo '<br>',$aa.',';
     $aa++;
} while ($aa <100); echo '<br>';

// vid 9
$nama["joni"]="surabaya";
$nama["budi"]="malang";
$nama["siti"]="sidoarjo";
$nama["tejo"]="semarang";
var_dump($nama); echo '<br>';
foreach($nama as $k=>$v){
    echo $k."=>".$v;}

// vid 10
$aray=(
    "budi"=>"surabaya","tomo"=>"candi","anton"=>"buduran");
var_dump($nam); echo '<br>';
foreach($nam as $s=>$d){
    echo $s=.'.'.$d.'<br>';
}


// vid 14
session_start();
var_dump($_SESSION); echo '<br>';
if (isset($_GET['menu'])){
    $menu =$_GET['menu'];
    echo $menu;
switch ($menu){
    case 'isi':
        isiSession();
        break;
    case 'hapus':
        unset($_SESSION['user']);
        break;
    case 'destroy':
        session_destroy();
        break;
    default: //code
    break;
}} function isiSession(){
    $_SESSION['user']='yamada';
    $_SESSION['nama']='akito yamada';
    $_SESSION['alamat']='surabaya';}


// vid 15
$coname='user';
$covalue='nana';
setcookie($coname,$covalue);
$covalue='nini';
setcookie($coname,$covalue);
echo $_COOKIE[$coname].'<br>';
setcookie("user","",time()-3600); echo '<br>';
var_dump($_COOKIE); 

// vid 16
?>
<form action="" method="post" enctype="multipart/form-data">
    pilih file gambar:
    <input type="file" name="upload">
    <input type="submit" name="kirim" value="simpan">
</form>
<?php
if(isset($_POST['kirim'])){
    $file=$_FILES['upload'];
    //var_dump($_FILES['upload']);
    foreach($file as $key => $value){
        echo $key.'='.$value.'<br>';}
$name=$_FILES['upload']['name'];
$temp=$_FILES['upload']['temp_name'];
echo $name.'='.$temp;
move_uploaded_file($temp,'gambar/'.$name);}

// vid 18 
require_once "..";
$sql="SELECT*FROM tblkategori";
$result=mysqli_query($koneksi,$sql);
var_dump($result);
$jumlah=mysqli_num_rows($result);
echo '<br>'.$jumlah;

$no=0;
if($jumlah>0){
    while($row=mysqli_fetch_assoc($result)){
        echo '<tr>'.'<td>',$row['idkategori'].'<td>';
        echo '<td>',$row['kategori'].'<td>';
        echo '/<tr>';
    }
}   echo '</table>';
?>