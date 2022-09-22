<?php
    include 'connection.php';
    
    if(isset($_POST['simpanbuku'])){
        $id_buku = $_POST['id_buku'];
        $nama_buku = $_POST['nama_buku'];
        $tipe_buku = $_POST['tipe_buku'];
        $kondisi = $_POST['kondisi'];
        $status = $_POST['status'];
        $peminjam = $_POST['peminjam'];
        $jumlah = $_POST['jumlah'];

        $sql = "INSERT INTO `buku`(`id_buku`, `nama_buku`, `tipe_buku`, `kondisi`, `status`, `peminjam`, `jumlah`) VALUES ('$id_buku','$nama_buku','$tipe_buku','$kondisi','$status','$peminjam','$jumlah')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampilanbuku.php');
        }else{
            header('Location: simpanbuku.php?status=gagal');
        }
    }
?>