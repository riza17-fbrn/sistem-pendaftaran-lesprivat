 <?php 
      session_start();
      include 'koneksi.php';
      if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
      }

      $peserta = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE no_pendaftaran = '".$_GET['no']."' ");
      $p = mysqli_fetch_object($peserta);
      
?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Penerimaan siswa les privat || Administrator</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https:One&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css2?family=Potta+">
 </head>
 <body>

    <!-- bagian header -->
    <header>
      <h1><a href="beranda.php">Admin Penerimaan Siswa Les Privat</a></h1>
      <ul>
        <li><a href="beranda.php">Beranda</a></li>
        <li><a href="data_peserta.php">Data Peserta</a></li>
        <li><a href="keluar">Keluar</a></li>
      </ul>
    </header>

    <!-- bagian content -->
    <section class="content">
      <h2>Detail Peserta</h2>
      <div class="box">
        <table class="table-data" border="0">

      <tr>
        <td>No Pendaftaran</td>
        <td>:</td>
        <td><?php echo $p->no_pendaftaran ?></td>
      </tr>

      <tr>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td><?php echo $p->thn_ajaran ?></td>
      </tr>

      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><?php echo $p->jurusan ?></td>
      </tr>

      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?php echo $p->nama ?></td>
      </tr>

      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $p->tgl_lahir ?></td>
      </tr>

      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $p->jk?></td>
      </tr>

      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><?php echo $p->kelas ?></td>
      </tr>

      <tr>
        <td>Jadwal</td>
        <td>:</td>
        <td><?php echo $p->jadwal?></td>
      </tr>

      <tr>
        <td>Alamat Lengkap</td>
        <td>:</td>
        <td><?php echo $p->alamat ?></td>
      </tr>

      <tr>
        <td>Agama</td>
        <td>:</td>
        <td><?php echo $p->agama?></td>
      </tr>

      <tr>
        <td>Mata Pelajaran</td>
        <td>:</td>
        <td><?php echo $p->mata_pelajaran ?></td>
      </tr>

    </table>
      </div>
    </section>

 </body>
 </html>