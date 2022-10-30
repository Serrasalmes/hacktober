<?php
include('koneksi.php');

$id = $_GET['id'];
$query = "DELETE FROM tbl_siswa WHERE id_siswa = '$id'";

if($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "<script>alert('Data Gagal Dihapus!')</script>";
}
?> 