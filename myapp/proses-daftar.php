<?php
include("config.php");
// Mengambil data dari formulir
if(isset($_POST['Submit'])){
$NIS = $_POST['NIS'];
$nm = $_POST['nm'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];
$nomor = $_POST['nomor'];


// Memeriksa koneksi
$sql = "INSERT INTO tb_pendaftaran (NIS,nama,ttl,jk,kelas,nomor) VALUES ('$NIS','$nm','$ttl','$jk','$kelas', '$nomor')";
$query = mysqli_query($db, $sql);
// apakah query simpan berhasil?
if ($query) {
    // Get the last inserted ID
    $last_id = mysqli_insert_id($db);
    
    // Redirect to the confirmation page with the ID parameter
    header("Location: cetakbaru.php?id=$last_id");
} else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: proses-daftar?status=gagal');
}

} else {
die("Akses dilarang...");
}
?>

