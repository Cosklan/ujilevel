<?php
    include 'connection.php';

    if(isset($_POST['editsiswa'])){
        $id = $_POST['id_pinjam'];
        $nama_buku = $_POST['nama_buku'];
        $nama_peminjam = $_POST['nama_peminjam'];
        $kelas = $_POST['kelas'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        $alamat = $_POST['alamat'];

        $sql = "UPDATE `perpus` SET `nama_buku`='$nama_buku',`nama_peminjam`='$nama_peminjam',`kelas`='$kelas',`tgl_pinjam`='$tgl_pinjam',`tgl_kembali`='$tgl_kembali',`alamat`='$alamat' WHERE 1";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            header ('Location: tampilanpinjam.php');
        }else {
            header ('Location: editsiswa.php?status=gagal');
        }
    }
?>