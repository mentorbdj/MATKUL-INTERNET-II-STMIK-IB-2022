<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo strtoupper('tampilan index halaman user') ?>
    </title>
</head>
<body>
    <?php

    include 'fungsi.php';

    ?>

    <h1><?php titleHalaman('luthfy') ?></h1>

    <?php

    tableData([
        ['name' => 'luthfy'],
        ['name' => 'luthfy']
    ]) 
    
    ?>
</body>
</html>