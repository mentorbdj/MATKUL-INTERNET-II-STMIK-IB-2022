<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP PRAKTIKUM 2</h1>

    <?php
        $errNamaLengkap     = "";
        $errEmail           = "";
        $errTanggalLahir    = "";
        $errTempatLahir     = "";
        $errAlamat          = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (@$_POST['namaLengkap']) {
                $nama = @$_POST['namaLengkap']; // untuk mengambil nilai dari method GET
                echo "Nama : $nama <br>"; // ini untuk menampilkan nilai variable (string)
            } else {
                $errNamaLengkap = "Nama Lengkap Tidak Boleh Kosong";
            }
    
            if (@$_POST['email']) {
                
            } else {
                $errEmail = "Email Tidak Boleh Kosong";
            }
    
            if (@$_POST['tanggalLahir']) {
                
            } else {
                $errTanggalLahir = "Tanggal Lahir Tidak Boleh Kosong";
            }
            
            if (@$_POST['tempatLahir']) {
                $tempatLahir  = @$_POST['tempatLahir']; 
                $tanggalLahir = @$_POST['tanggalLahir']; 
                echo "TTL : $tempatLahir, $tanggalLahir <br>"; 
            } else {
                $errTempatLahir = "Tempat Lahir Tidak Boleh Kosong";
            }
    
            if (@$_POST['alamatTinggal']) {
                $alamat = $_POST['alamatTinggal']; 
                echo "Alamat : $alamat <br>";
            } else {
                $errAlamat = "Alamat Tidak Boleh Kosong";
            }
        }
    ?>

    <br>
    <br>

    <form action="" method="post">
        <label for="">Nama Lengkap</label> <br>
        <input type="text" name="namaLengkap" placeholder="Masukan Nama Anda" autocomplete="off"> <br>
        <span style="color: red"><?php echo $errNamaLengkap; ?></span> <br>

        <label for="">Email</label> <br>
        <input type="email" name="email" placeholder="Masukan Email Anda" autocomplete="off"> <br>
        <span style="color: red"><?php echo $errEmail; ?></span> <br>

        <label for="">Tempat Lahir</label> <br>
        <input type="text" name="tempatLahir" placeholder="Masukan Tempat Lahir Anda" autocomplete="off"> <br>
        <span style="color: red"><?php echo $errTempatLahir; ?></span> <br>

        <label for="">Tanggal Lahir</label> <br>
        <input type="text" name="tanggalLahir" placeholder="Masukan Tanggal Lahir Anda" autocomplete="off"> <br>
        <span style="color: red"><?php echo $errTanggalLahir; ?></span> <br>

        <label for="">Alamat Tinggal</label> <br>
        <input type="text" name="alamatTinggal" placeholder="Masukan Alamat Tinggal Anda" autocomplete="off"> <br>
        <span style="color: red"><?php echo $errAlamat; ?></span> <br>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>