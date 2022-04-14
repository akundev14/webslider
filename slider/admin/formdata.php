<?php

    include 'koneksi.php';
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">

        <meta name="author" content="">

        <title>Form Data</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>

    <body>

        <div class="container">

            <div class="row"> 

                <div class="panel panel-primary">

                    <div class="panel-heading">

                        <span class="fa fa-user"> Tambah Data</span>

                    </div>

                    <!-- /.panel-heading -->

                    <div class="panel-body">

                        <form action="tambahdata.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">

                            <label>Judul</label>

                            <input name="judul" type="text" class="form-control" placeholder="Judul .." required>

                            </div><div class="form-group">

                            <label>Deskripsi</label>

                            <input name="deskripsi" type="text" class="form-control" placeholder="Deskripsi .." required>

                            </div>

                            <div class="form-group">

                                <label>Gambar</label>

                                <input name="gambar" id="gambar" type="file" class="form-control" required>

                            </div>

                            <input type="submit" class="btn btn-primary" value="Simpan">

                            <a href="index.php" class="btn btn-warning"> Kembali</a>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>

</html>    