<?php
include '../database.php';
$biodata = new Biodata();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
    foreach ($biodata->showbio($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $kelamin = $data['kelamin'];
        $agama = $data['agama'];
        $lahir = $data['lahir'];
        $umur = $data['umur'];
    }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
             <tr>
            <th>Jenis Kelamin</th>
                <td><input type="radio" name="kelamin" readonly>Laki-Laki
                  <input type="radio" name="kelamin" value="<?php echo $kelamin ; ?>" readonly >Perempuan</td>
             </tr>
             <tr>
                    <th>Agama</th>
                    <td>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik" readonly>Khatolik</option>
                </select>
            </td>
            <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="lahir" value="<?php echo $lahir; ?>" readonly></td>
                </tr> 
                <tr>
                    <th>Umur</th>
                    <td><input type="number" name="umur" value="<?php echo $umur; ?>" required></td>
                </tr>
        </table>
    </fieldset>
</body>

</html>