<?php

include "koneksi.php";
session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }

    
$id_user=$_GET['id'];

$gambar=$_GET['gambar'];
$query = "Delete From carousel Where id='$id_user'";

$hasil =$connection->query($query);

    if($hasil){
        unlink("images/".$gambar);
        header("location:index.php");

    }

    else{

        echo "Hapus Data Gagal";

    }
?>