<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<style>
    body{
        background-color: #f0f0f0;
    }
    table{
        background-color: white;
    }
    td{
        padding: 5px 20px;
    }
</style>
<body>
    <center>
        <h1>Data Siswa</h1>
        <a href="<?= base_url("home/form")?>">Tambah siswa</a>
        <br><br><br>
        <table border="3">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 0 ; foreach($siswa as $sis) {?>
            <tr>
                <td><?= ++$i ?></td>
                <td><?= $sis->nama ?></td>
                <td><?= $sis->jk ?></td>
                <td><?= $sis->nama_ayah?></td>
                <td><?= $sis->nama_ibu?></td>
                <td><?= $sis->alamat?></td>
                
                <td>
                    <a href="<?= base_url("home/hapus/") ?><?= $sis->id?>">hapus</a> |
                    <a href="<?= base_url("home/detail/") ?><?= $sis->id?>">detail</a> |
                   
                </td>
            </tr>
            <?php }?>
        </table>
    </center>
</body>

</html>