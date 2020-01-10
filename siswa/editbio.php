<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
    include '../database.php';
    $biodata = new Biodata();
    foreach ($biodata->editbio($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $kelamin = $data['kelamin'];
        $agama = $data['agama'];
        $umur = $data['umur'];
    }
    ?>
    <fieldset>
        <legend>Edit Data Mahasiswa</legend>
        <form action="prosesbio.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama </th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="kelamin" required>Laki-Laki
                    <input type="radio" name="kelamin" value="<?php echo $kelamin ; ?>" required >Perempuan</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik" value="<?php echo $agama; ?>">Khatolik</option>
                    </select>
                    </td>
                 <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="lahir" value="<?php echo $lahir; ?>" required></td>
                </tr> 
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>