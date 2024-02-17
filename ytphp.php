<?php
echo "TUGAS YUTUB NAJWA"."<br>";

//vid 1
echo "halo";

//vid 2
$tulisan= "belajarr";
echo $a;
$angka='2024';
echo 'Tahun.'.$angka.'<br>';
var_dump($tulisan); echo '<br>';
var_dump((int)$angka+2);

// vid 3
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

// vid 4
$a=5; $b=10;
$c=$a+$b;  $c=$a-$b;    $C=$a<$b;
$c=$a*$b;  $c=$a/$b;    $c=$a%$b;
echo '<br>'.$c.'<br>';

// vid 5
$nilai=101;
if($nilai>100 ||$nilai<0){
    echo "nilai salah";
} else {echo "nilai benar";}

// vid 6
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

// vid 7
$aa=1; do{
    echo '<br>',$aa.',';
     $aa++;
} while ($aa <100); echo '<br>';

// vid 8
$nama["joni"]="surabaya";
$nama["budi"]="malang";
$nama["siti"]="sidoarjo";
$nama["tejo"]="semarang";
var_dump($nama); echo '<br>';
foreach($nama as $k=>$v){
    echo $k."=>".$v;
}









?>