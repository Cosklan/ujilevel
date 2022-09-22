<?php
    include 'connection.php';

    if(isset($_POST['editbuku'])){
        $id_buku = $_POST['id_buku'];
        $nama_buku = $_POST['nama_buku'];
        $tipe_buku = $_POST['tipe_buku'];
        $kondisi = $_POST['kondisi'];
        $status = $_POST['status'];
        $peminjam = $_POST['peminjam'];
        $jumlah = $_POST['jumlah'];

        $sql = "UPDATE `buku` SET `id_buku`='$id_buku',`nama_buku`='$nama_buku',`tipe_buku`='$tipe_buku',`kondisi`='$kondisi',`status`='$status',`peminjam`='$peminjam',`jumlah`='$jumlah' WHERE 1";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            header ('Location: tampilanbuku.php');
        }else {
            header ('Location: edit.php?status=gagal');
        }
    }
?>