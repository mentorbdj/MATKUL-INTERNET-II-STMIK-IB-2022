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
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Arsa',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Media',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
            [
                'nama' => 'Jaya',
                'nip'  => '21078043'
            ],
        ];
    ?>
    <h3>Daftar Mahasiswa</h3>
    <table border=1>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
        </tr>
        <?php foreach ($dataMahasiswa as $key => $mahasiswa) : ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $mahasiswa['nip'] ?></td>
            <td><?= $mahasiswa['nama'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>