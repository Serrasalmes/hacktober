<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM tbl_siswa WHERE id_siswa = '$id'";

if($koneksi->query($query)) {
    header("location: admin/login.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
?>