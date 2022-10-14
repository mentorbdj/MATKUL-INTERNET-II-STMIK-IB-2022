<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <?php
        $dataMahasiswa = [
            [
                'nama' => 'Luthfy',
                'nip' => '21078043'
            ],
            [
                'nama' => 'Arsa',
                'nip' => '21078043'
            ],
            [
                'nama' => 'Media',
                'nip' => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip' => '21078043'
            ]
        ];
    ?>
    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataMahasiswa as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?= $value['nip'] ?></td>
                <td><?= $value['nama'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>