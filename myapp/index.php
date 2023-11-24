<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> CASIS </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <!-- home section starts -->

    <section class="home" id="home">
        <header>
            <a href="#home"><img src="logo.png" class="logo"></a>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#kontak">Contact</a></li>
            </ul>
            <div class="buttons">
                <a href="login.php" class="active">Login</a>
            </div>
        </header>
        <div class="content">
            <div class="textbox">
                <h2>Join Us!</h2>
                <p>Fill up personal information and start journey with us.</p>
                <a href="#about"><h6>FOCASIS?</h6></a>
            </div>
            <div class="imgBox">
                <img src="project.png" class="project">
            </div>
        </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts -->

    <div id="about"><br><br>
      <section class="about" >
          <heading>
              <div class="hero">About Us</div>
          </heading>
          <div class="content1">
              <div class="image">
                  <img src="about.png">
              </div>
              <div class="text-center">
                  <h2>Apa itu FOCASIS</h2>&nbsp
                  <p>FOCASIS adalah singkatan dari Forum Calon Ke Pengurusan OSIS. 
                    Focasis Ini adalah wadah pendaftaran untuk siswa/i SMK TELKOMUNIKASI TELESANDI BEKASI yang berminat 
                    ingin menjadi bagian dari Organisasi Intra Sekolah [OSIS]. Website ini merupakan langkah awal untuk kalian para siswa/i yang berminat untuk menjadi bagian dari calon OSIS. 
                    Ketentuannya adalah sebagai berikut :</p>
              </div>
          </div>
      </section>
    </div>

    <!-- about section starts -->

    <!--ketentuan section starts-->

      <section class="rules" id="ketentuan">
          <heading>
            <a class="rules">Ketentuan</a>
          </heading>
          <div class="syarat">
            <div class="how">
                  <h2>1. Merupakan siswa/i kelas X &nbsp;&nbsp;&nbsp;dan XI, tidak duduk di tingkat &nbsp;&nbsp;&nbsp;akhir.</h2><br>
                  <h2>2. Memiliki budi pekerti yang baik &nbsp;&nbsp;&nbsp;&nbsp;dan sopan santun terhadap &nbsp;&nbsp;&nbsp;&nbsp;orang tua, guru, dan teman.</h2><br>
                  <h2>3. Memiliki bakat sebagai &nbsp;&nbsp;&nbsp;&nbsp;pemimpin.</h2><br>
                  <h2>4. Tidak terlibat penggunaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Narkoba.</h2><br>
                  <h2>5. Memiliki kemauan, kemampuan, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan pengetahuan yang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memadai.</h2><br>
                  <h2>6. Bersedia mengikuti tahap &nbsp;&nbsp;&nbsp;&nbsp;selanjutnya. </h2><br>
            </div>
          <div class="rule">
            <div class="images">
                <img src="ketentuan.png">
            </div>
          </div>
      </section>

    <!--ketentuan section ends-->

    <!-- contact section starts -->
    <div id="kontak"><br><br>
      <section class="kontak" >
          <heading>
              <div class="contact">Contact Us</div>
          </heading><br>
          <div class="container"><br>
              <div class="content">
                <div class="left-side">
                  <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">SMK TELEKOMUNIKASI TELESANDI BEKASI Mekarsari Raya Jalan KH. Mochammad, Bekasi.</div>
                    <div class="text-two">40171</div>
                  </div>
                  <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+0098 9893 5647</div>
                  </div>
                  <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">casis@gmail.com</div>
                    <div class="text-two">info.casis@gmail.com</div>
                  </div>
                </div>
                <div class="right-side">
                  <div class="topic-text">Send us a message</div>
                  <p>Jika infromasi yang kami berikan kurang jelas, Anda dapat mengirimkan pertanyaannya disini. Dengan senang hati kami akan membantu Anda.</p>
                <form action="proses-feedback.php" method="POST">
                  <div class="input-box" >
                    <input type="text" name="nama" placeholder="Enter your name">
                  </div>
                  <div class="input-box" >
                    <input type="text" name="email" placeholder="Enter your email">
                  </div>
                  <div class="input-box message-box" >
                  <input type="text" name="message" placeholder="Enter your message">
                  </div>
                  <input type="submit" value="Send Now" name="feed" >
                </form>
              </div>
              </div>
            </div>
          </section>
    </div>
    <!-- contact section ends -->
</body>
</html>

