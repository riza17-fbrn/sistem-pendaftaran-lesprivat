 <?php 
      include 'koneksi.php';

      if (isset($_POST['submit'])) {
       
        // ambil 1 id terbesar di kolom no_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(no_pendaftaran,5)) AS no FROM pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->no + 1);
        echo $generateId;

        // proses insert
        
        // $no = $_POST['no_pendaftaran'];
        // $tahun = $_POST ['thn_ajaran'];
        // $jurusan = $_POST ['jurusan'];
        // $nama = $_POST ['nama'];
        // $tgl = $_POST ['tgl_lahir'];
        // $jk = $_POST ['jk'];
        // $kelas = $_POST ['kelas'];
        // $jadwal = $_POST ['jadwal'];
        // $alamat = $_POST ['alamat'];
        // $agama = $_POST ['agama'];
        // $mapel = $_POST ['mata_pelajaran'];
        
        
        

        $insert = mysqli_query($conn, "INSERT INTO pendaftaran VALUES (
          '".$generateId."',
          '".date('Y-m-d')."',
          '".$_POST['thn_ajaran']."',
          '".$_POST['jurusan']."',
          '".$_POST['nama']."',
          '".$_POST['tgl_lahir']."',
          '".$_POST['jk']."',
          '".$_POST['kelas']."',
          '".$_POST['jadwal']."',
          '".$_POST['alamat']."',
          '".$_POST['agama']."',
          '".$_POST['mata_pelajaran']."'
          )");


        if($insert){
          echo '<script>window.location="berhasil.php?no='.$generateId.'"</script>';
        }else{
          echo 'huft'.mysqli_error($conn);
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

           <!--  <tr>
              <td>No Pendaftaran</td>
              <td>:</td>
              <td>
                <input type="hidden" name="no_pendaftaran" class="input-control">
              </td>
            </tr>
 -->
            <tr>
              <td>Tahun Ajaran</td>
              <td>:</td>
              <td>
                <input type="text" name="thn_ajaran" class="input-control" value="2020/2021" readonly>
              </td>
            </tr>

            <tr>
              <td>Jurusan</td>
              <td>:</td>
              <td>
                <select class="input-control" name="jurusan">
                  <option value="">--Pilih--</option>
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
                <input type="text" name="nama" class="input-control">
              </td>
            </tr>

            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td>
                <input type="date" name="tgl_lahir" class="input-control">
              </td>
            </tr>

            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td>
                <input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
              </td>
            </tr>

            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td>
                <input type="text" name="kelas" class="input-control">
              </td>
            </tr>

            <tr>
              <td>Jadwal</td>
              <td>:</td>
              <td>
                <input type="text" name="jadwal" class="input-control">
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
              <td>Agama</td>
              <td>:</td>
              <td>
                <select class="input-control" name="agama">
                  <option value="">--Pilih--</option>
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
                <input type="text" name="mata_pelajaran" class="input-control">
              </td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td>
                <input type="submit" name="submit" class="btn-daftar" value="Daftar">
              </td>
            </tr>


            
          </table>
        </div>

      </form>

    </section>

 </body>
 </html>