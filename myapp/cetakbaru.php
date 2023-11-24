<?php
require "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch data from the database based on the ID
    $sql = "SELECT * FROM tb_pendaftaran WHERE id_daftar = $id";
    $result = mysqli_query($db, $sql);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        die("Query failed");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .container {
            padding: 20px;
        }

        @media print {
            /* Hide the logout button when printing */
            button[type="submit"] {
                display: none;
            }

            /* Hide the link in the print view */
            #print-link {
                display: none;
            }
        }
    </style>
</head>
<body> 

<div class="container"> 

    <!-- Logout button on the left side -->
    <form action="logout.php" method="post">
    <button type="submit" style="margin: 5px; justify-content: left; margin-right: 25rem;" class="btn btn-danger">Logout</button>
    </form>

    <div style="text-align: center;"><br>
        <h2>FORMULIR PENDAFTARAN FOCASIS</h2>
        <h2>PADA TAHUN AJARAN 2023</h2>
    </div>
    <br><br><br>
    <div>
        <table class="table">
            <tr style="height: 10px;">
                <td>ID PENDAFTARAN</td>
                <td>:</td>
                <td> <?php echo isset($data['id_daftar']) ? $data['id_daftar'] : ''; ?></td>
            </tr>
            <tr>
                <td>NAMA LENGKAP</td>
                <td>:</td>
                <td><?php echo isset($data['nama']) ? $data['nama'] : ''; ?></td>
            </tr>
            <tr>
                <td>TEMPAT TANGGAL LAHIR</td>
                <td>:</td>
                <td><?php echo isset($data['ttl']) ? $data['ttl'] : ''; ?></td>
            </tr>
            <tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td><?php echo isset($data['jk']) ? $data['jk'] : ''; ?></td>
            </tr>
            <tr>
                <td>KELAS</td>
                <td>:</td>
                <td><?php echo isset($data['kelas']) ? $data['kelas'] : ''; ?></td>
            </tr>
        </table>
    </div>
    <br><br>
    <div style="text-align: right;">
    <span><br><br>
    <!-- 18 Januari 2020 -->
        <p style="transform: translateX(18px);" ><?php echo date('d F Y') ?></p>
        <p style="transform: translateX(33px);font-weight: bold;">Calon Pengurus Osis</p>
    </span><br><br><br>
        <p style="transform: translateX(45px);">...............................................</p>
    </div>
        <!-- <tbody>

        <?php
        $sql = "SELECT * FROM tb_pendaftaran";
        $query = mysqli_query($db, $sql);
        
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$tb_pendaftaran['id_daftar']."</td>";
            echo "<td>".$tb_pendaftaran['nama']."</td>";
            echo "<td>".$tb_pendaftaran['jk']."</td>";
            echo "<td>".$tb_pendaftaran['kelas']."</td>";
            }
        
        
        ?>

        </tbody> -->
    <script>
    window.print()
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</div>
    

</body>
</html>