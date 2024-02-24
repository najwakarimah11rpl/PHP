<?php
class DB{
    //properti
public $host ="127.0.0.1";
private $user="root";
private $password=" ";
private $database="dbrestoran";

    //method
public function selectData(){
    echo 'select data';
} public function gatDatabase(){
    echo $this->database;
} public  function tampil(){
    $this->selectData();
} public static function insertData(){
    echo "static function";
}
} DB::insertData();
$db=new DB;
$db->selectData(); echo '<br>'.$db->host.'<br>';
echo $db->getDatabase();

 
?>