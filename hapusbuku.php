<?php
    include 'connection.php';

    $id_buku = $_GET['id_buku'];

    $sql = "DELETE FROM buku WHERE id_buku = '$id_buku'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header ('Location: tampilanbuku.php');
    }else {
        header ('Location: hapusbuku.php?status=gagal');
    }
?>