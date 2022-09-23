<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP PRAKTIKUM 1</h1>

    <form action="" method="get">
        <label for="">Nama Lengkap</label> <br>
        <input type="text" name="namaLengkap" placeholder="Masukan Nama Anda"> <br>

        <label for="">Tempat Lahir</label> <br>
        <input type="text" name="tempatLahir" placeholder="Masukan Tempat Lahir Anda"> <br>

        <label for="">Tanggal Lahir</label> <br>
        <input type="text" name="tanggalLahir" placeholder="Masukan Tanggal Lahir Anda"> <br>

        <label for="">Alamat Tinggal</label> <br>
        <input type="text" name="alamatTinggal" placeholder="Masukan Alamat Tinggal Anda"> <br>

        <button type="submit">Kirim</button>
    </form>

    <br>
    <br>
    <br>
    <br>

    <?php
        if (@$_GET['namaLengkap']) {
            $nama = @$_GET['namaLengkap']; // untuk mengambil nilai dari method GET
            echo "Nama : $nama <br>"; // ini untuk menampilkan nilai variable (string)
        }
        
        if (@$_GET['tempatLahir']) {
            $tempatLahir  = @$_GET['tempatLahir']; 
            $tanggalLahir = @$_GET['tanggalLahir']; 
            echo "TTL : $tempatLahir, $tanggalLahir <br>"; 
        }
        
        if (@$_GET['alamatTinggal']) {
            $alamat = $_GET['alamatTinggal']; 
            echo "Alamat : $alamat <br>";
        }
    ?>

</body>
</html>