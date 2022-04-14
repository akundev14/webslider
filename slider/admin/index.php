<?php

    include 'koneksi.php';

?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Editor Side</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row"> 
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="formdata.php" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Tambah Data</a>
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=1;
                                    $query ="SELECT id,judul,deskripsi,gambar FROM carousel ORDER BY id ASC";
                                    $result = $connection->query($query);
                                    while($data=mysqli_fetch_array($result)){
                                ?>

                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td width="10%"><?php echo $data['judul'] ?></td>
                                    <td width="20%"><?php echo $data['deskripsi'] ?></td>
                                    <td><img src="images/<?php echo $data['gambar'] ?>" width="25%" height="25%"></td>
                                    <td width="15%">
                                        <a href="formedit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning" Title="Edit"><span class="glyphicon glyphicon-edit"></a>
                                        <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='deletedata.php?id=<?php echo $data['id']; ?>&gambar=<?php echo $data['gambar']; ?>' }" class="btn btn-danger" Title="Delete"><span class="glyphicon glyphicon-remove"></a>
                                    </td>
                                </tr>

                                    <?php
                                    $no++;
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

</html>