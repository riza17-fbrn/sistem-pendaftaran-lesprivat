 <?php 
      session_start();
      include 'koneksi.php';
      if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
      }
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
      <h2>Data Peserta</h2>
      <div class="box">
        <a href="cetak_peserta.php" target="_blank" class="btn-cetak">Print</a>
        <table class="table" border="1">
          <thead>
            <tr>
              <th>No</th>
              <th>No Pendaftaran</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
                $no = 1;
                $list_peserta = mysqli_query($conn, "SELECT * FROM pendaftaran");
                while ($row = mysqli_fetch_array($list_peserta)) {
            ?>

            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $row['no_pendaftaran'] ?></td>
              <td><?php echo $row['nama'] ?></td>
              <td><?php echo $row['jk'] ?></td>
              <td>
                <a href="detail_peserta.php?no=<?php echo $row['no_pendaftaran'] ?>">Detail</a> ||
                <a href="hapus_peserta.php?no=<?php echo $row['no_pendaftaran'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>

          <?php } ?>

          </tbody>

        </table>
      </div>
    </section>

 </body>
 </html>