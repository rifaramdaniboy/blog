<!DOCTYPE html>
<html>
<head>
	<title>Lahiha Crud - Index Biodata</title>
</head>
<body>
	<center>Biodata Mahasiswa</center>\
	<fieldset>
		<legend>Bioata Mahasiswa</legend>
		<a href="createbio.php">Tambah Data</a>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kelamin</th>
				<th>Agama</th>
				<th>Lahir</th>
				<th>Umur</th>
				<th colspan="3">Aksi</th>
			</tr>
			<?php
			include '../database.php';
			$biodata = new Biodata();
			$no = 1;

			foreach ($biodata->indexbio() as $data) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['kelamin']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td><?php echo $data['lahir']; ?></td>
                    <td><?php echo $data['umur']; ?></td>
                    <td>
                        <a href="showbio.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="editbio.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <a href="prosesbio.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
		</table>
	</fieldset>

</body>
</html>