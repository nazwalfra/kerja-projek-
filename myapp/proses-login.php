<s><?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "db_forum casis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil nilai yang dikirimkan dari formulir
$enteredNickname = $_POST['email'];
$enteredPassword = $_POST['password'];

// Periksa kecocokan di database
$sql = "SELECT * FROM login WHERE nm_email = '$enteredNickname' AND password = '$enteredPassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: form-daftar.php?status=sukses');
    // Anda dapat melakukan pengalihan ke halaman lain atau tindakan lain di sini
} else {
    header('Location: login.php?status=gagal');
}

$conn->close();
?>