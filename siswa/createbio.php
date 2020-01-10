<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Biodata</title>
</head>

<body>
    <fieldset>
        <legend>Input Data Mahasiswa</legend>
        <form action="prosesbio.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <th>Nama </th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required></textarea></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="kelamin" required>Laki-Laki
                    <input type="radio" name="kelamin" required>Perempuan</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik">Khatolik</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="lahir" required></td>
                </tr>
                <!-- <tr>
                    <th>Umur</th>
                    <td><input type="number" name="umur" required></td>
                </tr> -->
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>