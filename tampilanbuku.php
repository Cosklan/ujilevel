<?php
    include 'connection.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h4>Welcome To Perpus</h4>
        <i class="uil uil-user-circle"></i>
        <p>Welcome User</p>
        <div class="head2">
            <a href="tampilanpinjam.php"><i class="uil uil-server-alt"></i>Data Peminjam</a>
            <a href="tampilanbuku.php"><i class="uil uil-book"></i>Data Buku</a>
        </div>
    </div>
    </div>
    <div class="isi">
        <h3><a href="buku.html">+</a></h3>
        <h1>Data Buku Perpus</h1>
      <table>
        <tr>
            <th>ID</th>
            <th>Nama Buku</th>
            <th>Tipe Buku</th>
            <th>Kondisi</th>
            <th>Status</th>
            <th>Peminjam</th>
            <th>Jumlah</th>
            <th>Action</th>
        </tr>
        <?php
            $sql ="SELECT * FROM buku";
            $query = mysqli_query($connect,$sql);

            while ($data = mysqli_fetch_array ($query)){
                echo "
                    <tr>
                        <td>$data[id_buku]</td>
                        <td>$data[nama_buku]</td>
                        <td>$data[tipe_buku]</td>
                        <td>$data[kondisi]</td>
                        <td>$data[status]</td>
                        <td>$data[peminjam]</td>
                        <td>$data[jumlah]</td>
                        <td>
                            <a href='formeditbuku.php?id_buku=".$data['id_buku']."'><i class='uil uil-edit'></i></a>
                            <a href='hapusbuku.php?id_buku=".$data['id_buku']."'><i class='uil uil-trash'></i></a>
                        </td>
                    </tr>
                ";
            }
         ?>   
        </table> 
    </div>
</body>
</html>