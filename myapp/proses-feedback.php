<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['feed'])){
// ambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['message'];

// buat query
$sql = "INSERT INTO `feedback`(`nama`, `email`,`pesan`) VALUES ('$nama','$email','$pesan')";
$query = mysqli_query($db, $sql);
// apakah query simpan berhasil?
if( $query ) {
// kalau berhasil alihkan ke halaman index.php dengan status=sukses
header('Location: index.php?status=sukses');
} else {
// kalau gagal alihkan ke halaman indek.php dengan status=gagal
header('Location: index.php?status=gagal');
}
} else {
die("Akses dilarang...");
}
?>