 <?php 
      include 'koneksi.php';
      
?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Penerimaan siswa les privat</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https:One&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css2?family=Potta+">
 </head>
 <body>
 
    <!-- bagian box formulir -->
    <section class="box-formulir">

      <h2>Pendaftaran Berhasil</h2>


      <div class="box">
        <h4>Kode Pendaftaran Anda Adalah : <?php echo $_GET['no'] ?></h4>
        <a href="cetak_bukti.php?no=<?php echo $_GET['no'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
      </div>

    </section>

 </body>
 </html>