<?php
include '../database.php';
$biodata = new Biodata();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    $agama = $_POST['agama'];
    $lahir = $_POST['lahir'];
}

if ($aksi == "tambah") {
    $biodata->create($nama, $alamat, $kelamin , $agama , $lahir ,$umur );
    header("location:indexbio.php");
} elseif ($aksi == "update") {
    $biodata->update($id, $nama, $alamat , $kelamin , $agama , $lahir , $umur);
    header("location:indexbio.php");
} elseif ($aksi == "delete") {
    $biodata->delete($_GET['id']);
    header("location:indexbio.php");
}
?>
     