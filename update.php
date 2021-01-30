 <?php 
      include 'koneksi.php';
      $no = $_GET ['no_pendaftaran'];
      $result = mysqli_query ($conn , "SELECT * FROM pendaftaran WHERE no_pendaftaran = '$no' ");

      if (isset($_POST['ubah']))
       {
        $no_pendaftaran = $_POST ['no_pendaftaran'];
        $daftar = $_POST ['tgl_daftar'];
        $thn_ajaran = $_POST ['thn_ajaran'];
        $jurusan = $_POST ['jurusan'];
        $nama = $_POST ['nama'];
        $tgl_lahir = $_POST ['tgl_lahir'];
        $jk = $_POST ['jk'];
        $kelas = $_POST ['kelas'];
        $jadwal = $_POST ['jadwal'];
        $alamat = $_POST ['alamat'];
        $agama = $_POST ['agama'];
        $mata_pelajaran = $_POST ['mata_pelajaran'];


        $query = mysqli_query($conn , "UPDATE pendaftaran SET no_pendaftaran = '$no_pendaftaran',tgl_daftar = '$daftar',thn_ajaran = '$thn_ajaran',jurusan = '$jurusan',nama = '$nama',tgl_lahir = '$tgl_lahir',jk = '$jk',kelas = '$kelas',jadwal = '$jadwal',alamat = '$alamat',agama = '$agama',mata_pelajaran = '$mata_pelajaran' WHERE no_pendaftaran = '$no_pendaftaran'");

        if ($query) {
         echo "
                <script>
                  alert('data berhasil anda ubah say');
                  document.location.href = 'data_peserta.php';
                </script>
              ";
        }else{
          echo "data gagal anda ubah say";
        }

      }

     
?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Penerimaan siswa les privat</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
 </head>
 <body>
 
    <!-- bagian box formulir -->
    <section class="box-formulir">

      <h2>Formulir pendaftaran siswa baru les privat</h2>

      <!-- bagian form -->
      <form action="" method="post">
    
        <div class="box">
          <table border="0" class="table-form">
            <?php

                while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
              <td>No Pendaftaran</td>
              <td>:</td>
              <td>
                <input type="hidden" name="no_pendaftaran" class="input-control" value="<?php echo $row['no_pendaftaran'] ?>" readonly>
              </td>
            </tr>           
             <tr>
              <td>Tanggal Daftar</td>
              <td>:</td>
              <td>
                <input type="text" name="tgl_daftar" class="input-control" value="<?php echo $row['tgl_daftar'] ?>" readonly>
              </td>
            </tr>
            <tr>
              <td>Tahun Ajaran</td>
              <td>:</td>
              <td>
                <input type="text" name="thn_ajaran" class="input-control" value="<?php echo $row['thn_ajaran'] ?>" readonly>
              </td>
            </tr>

            <tr>
              <td>Jurusan</td>
              <td>:</td>
              <td>
                <select class="input-control" name="jurusan" value="<?php echo $row['jurursan'] ?>">
                 
                  <option value="Teknik Otomotif">Rekayasa Perangkat Lunak</option>
                  <option value="Teknik Otomotif">Teknik Komputer dan Jaringan</option>
                  <option value="Teknik Otomotif">Teknik Industri</option>
                  <option value="Teknik Otomotif">Teknik Sepedah Motor</option>
                  <option value="Teknik Otomotif">Teknik Otomotif</option>
                  <option value="Teknik Las">Teknik Las</option>
                  <option value="Teknik Listrik">Teknik Listrik</option>
                </select>
              </td>
            </tr>
            
          </table>
        </div>

        <h3>Data Diri Calon Siswa</h3>
        <div class="box">
          <table border="0" class="table-form">

            <tr>
              <td>Nama Lengkap</td>
              <td>:</td>
              <td>
                <input type="text" name="nama" class="input-control" value="<?php echo $row['nama'] ?>">
              </td>
            </tr>

            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td>
                <input type="date" name="tgl_lahir" class="input-control" value="<?php echo $row['tgl_lahir'] ?>">
              </td>
            </tr>

            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td>
              <select class="input-control" name="jk" value="<?php echo $row['jk'] ?>">
                 
                  <option value="laki-laki">Laki - laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td>
                <input type="text" name="kelas" class="input-control" value="<?php echo $row['kelas'] ?>">
              </td>
            </tr>

            <tr>
              <td>Jadwal</td>
              <td>:</td>
              <td>
                <input type="text" name="jadwal" class="input-control" value="<?php echo $row['jadwal'] ?>">
              </td>
            </tr>

            <tr>
              <td>Alamat Lengkap</td>
              <td>:</td>
               <td>
                <input type="text" name="alamat" class="input-control" value="<?php echo $row['alamat'] ?>">
             </td>
            </tr>

            <tr>
              <td>Agama</td>
              <td>:</td>
              <td>
                <select class="input-control" name="agama" value="<?php echo $row['agama'] ?>">
                  
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Konghuchu">Konghuchu</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>Mata Pelajaran</td>
              <td>:</td>
              <td>
                <input type="text" name="mata_pelajaran" class="input-control" value="<?php echo $row['mata_pelajaran'] ?>">
              </td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td>
                <input type="submit" name="ubah" class="btn-daftar" value="Daftar">
              </td>
            </tr>


            <?php } ?>
          </table>
        </div>

      </form>

    </section>

 </body>
 </html>