<?php
    include 'connection.php';
    
    if(isset($_POST['simpansiswa'])){
        $id_pinjam = $_POST['id_pinjam'];
        $nama_buku = $_POST['nama_buku'];
        $nama_peminjam = $_POST['nama_peminjam'];
        $kelas = $_POST['kelas'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO `perpus`(`id_pinjam`, `nama_buku`, `nama_peminjam`, `kelas`, `tgl_pinjam`, `tgl_kembali`, `alamat`) VALUES ('$id_pinjam','$nama_buku','$nama_peminjam','$kelas','$tgl_pinjam','$tgl_kembali','$alamat')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampilanpinjam.php');
        }else{
            header('Location: simpansiswa.php?status=gagal');
        }
    }
?>