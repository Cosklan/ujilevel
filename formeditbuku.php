<?php
    include 'connection.php';

    $id_buku = $_GET['id_buku'];
    $sql = "SELECT * FROM buku WHERE id_buku='$id_buku'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("Data Not Found");
    }
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
</head>
<body>
    <div class="welcome">
        <h4>Welcome To Perpus</h4>
        <i class="uil uil-user-circle"></i>
        <p>Welcome User</p>
        <div class="head2">
            <a href="tampilanpinjam.php"><i class="uil uil-server-alt"></i>Data Peminjam</a>
            <a href="tampilanbuku.php"><i class="uil uil-book"></i>Data Buku</a>
        </div>
    </div>
    <form action="editbuku.php" method="post">
        <h3 class="juduls">Edit Data Peminjam</h3>
            <div class="insertpinjam"><p><label>id pinjam : <input type="number" name="id_buku" value="<?php echo $data['id_buku'] ?>" required = "required"> </label></p>
            <p><label>nama buku: <input type="text" name="nama_buku" value="<?php echo $data['nama_buku'] ?>" required = "required"></label></p>
            <p><label>nama peminjam : <input type="text" name="tipe_buku" value="<?php echo $data['tipe_buku'] ?>" required = "required"></label></p>
            <p><label>kelas : <input type="text" name="kondisi" value="<?php echo $data['kondisi'] ?>" required = "required"></label></p>
            <p><label>jenis kelamin : <input type="text" name="status" value="<?php echo $data['status'] ?>" required = "required"></label></p>
            <p><label>tanggal pinjam : <input type="date" name="peminjam" value="<?php echo $data['peminjam'] ?>" required = "required"></label></p>
            <p><label>Alamat : <input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>"></input></label></p>
        </div>
        <input type="submit" name="editbuku" id="simpanbuku" value="simpan perubahan">
    </form>
</body>
</html>