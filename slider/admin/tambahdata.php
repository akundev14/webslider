<?php 

include "koneksi.php";
session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }


$judul = $_POST['judul'];
$desk = $_POST['deskripsi'];

$sumber = $_FILES['gambar']['tmp_name'];

    $target = 'images/';

    $nama_gambar = $_FILES['gambar']['name'];
    $namabaru = date('dmYHis-').$nama_gambar;



$pindah = move_uploaded_file($sumber, $target.$namabaru);

if($pindah){

$query = "insert into carousel values('','$judul','$desk','$namabaru')";

$hasil =$connection->query($query);

}

if($hasil)

{

header("location:index.php");

}

else{

    echo "Penyimpanan gagal";

} 

?>