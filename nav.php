<nav>
    <ul>
        <li><a href="?menu=kontak">kontak</a></li>
        <li><a href="?menu-sejarah">sejarah</a></li>
        <li><a href="?menu-jurusan">jurusan</a></li>
    </ul>

</nav>
<h1>sejarah smk revit </h1>

<?php //vid 11,12,13
if(isset($_GET['menu'])){
    $menu=$_GET['menu'];
    require_once $menu.'.php';
}

if(isset($_POST['kirim'])){
    $em=$_POST['email'];
    $pw=$_POST['password'];
    echo $em.'<br>'.$pw;
}
?>