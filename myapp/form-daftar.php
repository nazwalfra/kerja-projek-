<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Daftar CASIS </title> 
    <link rel="stylesheet" href="form-daftar.css">
   </head>
<body>
  <div class="wrapper">
    <h2>PENDAFTARAN</h2>
    <h4>Calon kepengurusan Osis</h4><br>
    <form action="proses-daftar.php" method="post">
      <div class="input-box" name="tgl">
        <p style="color :black">NIS</p>
        <input type="text" name="NIS"  placeholder="Masukkan NIS anda" required>
      </div><br>
      <div class="input-box">
        <p style="color :black">Nama</p>
        <input type="text" name="nm" placeholder="Masukkan nama anda" required>
      </div><br>
      <div class="input-box">
        <p style="color :black">Tempat Tanggal Lahir</p>
        <input type="text" name="ttl" placeholder="Masukkan tempat, tanggal lahir anda" required>
      </div><br>
      <div class="box">
        <p style="color :black">Jenis Kelamin</p>
        <div style="color:dimgray;">
          <input type="radio"  name="jk" class="input-control" value="Laki-laki" required> Laki-laki &nbsp;&nbsp;
          <input type="radio"  name="jk" class="input-control" value="Perempuan" required> Perempuan
        </div>
      </div> <br>
      <div class="input-box">
        <p style="color :black">Kelas</p>
        <input type="text" name="kelas" placeholder="Masukkan kelas anda" required>
      </div><br>
      <div class="input-box">
        <p style="color :black">No whatsApp</p>
        <input type="text" name="nomor" placeholder="Masukkan no whatsapp anda 628XX" required>
      </div><br>
      <div class="policy">
        <input type="checkbox" required> 
        <h3>Saya menyetujui ketentuan & syarat yang berlaku</h3>
      </div>
      <div class="input-box button" >
        <div>
          <input type="Submit" name="Submit" value="Submit">
        </div>
      </div>
    </form>
  </div>
</body>
</html>