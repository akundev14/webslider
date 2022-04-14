<?php 

include "koneksi.php";



$judul = $_POST['judul'];
$desk = $_POST['deskripsi'];

$sumber = $_FILES['gambar']['tmp_name'];

    $target = 'images/';

    $nama_gambar = $_FILES['gambar']['name'];



$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if($pindah){

$query = "insert into carousel values('','$judul','$desk','$nama_gambar')";

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