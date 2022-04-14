<?php

include "koneksi.php";



$id_user=$_POST['id'];

$username=$_POST['judul'];



if(isset($_POST['ubah_foto'])){ 
    $sumber = $_FILES['gambar']['name'];
    $nama_gambar = $_FILES['gambar']['tmp_name'];
    $fotobaru = date('dmYHis').$sumber;
    $path = "images/".$fotobaru;

    if(move_uploaded_file($nama_gambar, $path)){
        

        $query = "SELECT * FROM carousel WHERE id='".$id_user."'";

        $sql = $connection->query($query);

        $data = mysqli_fetch_array($sql);


        if(is_file("images/".$data['gambar'])){ 

            unlink("images/".$data['gambar']);}


        $query = "update carousel set judul='$username', gambar='$fotobaru' where id='$id_user' ";

        $sql = $connection->query($query);



        if($sql){ 
            header("location: index.php");
        }else{

            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

            echo "<br><a href='index.php'>Kembali Ke Form</a>";

        }

    }else{

        echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 

                location = 'index.php'; 

                </script>";

    }

}else{ 

    $query = "update carousel set judul='$judul' where id='$id_user' ";

    $sql = $connection->query($query); 

    if($sql){
        header("location: index.php"); // Redirect ke halaman index.php

    }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

        echo "<br><a href='index.php'>Kembali Ke Form</a>";

    }

}

?>