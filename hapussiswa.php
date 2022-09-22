<?php
    include 'connection.php';

    $id_pinjam = $_GET['id_pinjam'];

    $sql = "DELETE FROM perpus WHERE id_pinjam = '$id_pinjam'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header ('Location: tampilanpinjam.php');
    }else {
        header ('Location: hapussiswa.php?status=gagal');
    }
?>