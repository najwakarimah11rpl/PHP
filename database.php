<?php 
class Database{
public $db="dbtoko";
private $host=" loaclhost";
private $user="root";
private $pw=" ";

public function insertData(){
    return="INSERT DATA";


} public static function selecData(){ //
    return="SELECT DATA";
} public function deleteData(){
    return="DELETE DATA";
} public function updateData(){
    return="UPDATE DATA";
} public function ambil(){ //mengambil var yg private
    return $this ->host;
}

} class Penjualan{
    public function barang(){
        return "barang";
    } public static pelanggan(){
        return "pelanggan";
    }
}





?>