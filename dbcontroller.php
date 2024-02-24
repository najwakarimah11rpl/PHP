<?php
class DB{
    private $host ="127.0.0.1";
    private $user="root";
    private $password=" ";
    private $database="dbrestoran";
    private $koneksi;

public function __construct(){
    $this->koneksi=$this-> koneksiDB();
} public function koneksiDB(){
    $koneksi=mysqli_connect($host,$user,$password,$database);
    return $koneksi;
} public function getAll($sql){
    $result=mysqli_query($this->koneksi,$sql);
    while ($row=mysqli_fetch_assoc($result)){
        $data[]=$row;
    } return $data;
}  public function getITEM($sql){
    $result = mysqli_query($this->koneksi,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
public function rowCOUNT($sql){
    $result = mysqli_query($this->koneksi,$sql);
    $count = mysqli_num_rows($result);
    return $count;      
} public function runSQL($sql){
    $result = mysqli_query($this->koneksi,$sql);

} } 

$db=new DB;
var_dump($db);
$row=$db->getAll("SELECT *FROM tblkategori");
var_dump($row);
foreach($row as $key){
    echo $key['kategori'];
}


?>
