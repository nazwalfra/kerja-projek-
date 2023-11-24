<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data diri</title>
    <link rel="stylesheet" type="test/css" href="css/sttyle.css">
    <link rel="stylesheet" href="sttyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=Montserrat:wght@300;400;700&family=Poppins:wght@600&family=Quicksand:wght@500&family=Silkscreen&display=swap" rel="stylesheet">
</head>
<body>
     <section class="box-formulir">

        <h2>DAFTAR</h2>
        <h4>FORUM CASIS</h4>

            <div class="box">
                <table border="10" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm_peserta" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                            <input type="date" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="
                            Laki-laki"> Laki-laki &nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="
                            Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama">
                                <option value="">--Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Alasan Masuk</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alasan_masuk"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Visi Misi</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="visi_misi"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                        </td>
                    </tr>
                </table>
            </div>
        </form>

     </section>

</body>
</html>