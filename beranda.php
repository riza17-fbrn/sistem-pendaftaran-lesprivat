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
        <li><a href="keluar.php">Keluar</a></li>
      </ul>
    </header>

    <!-- bagian content -->
    <section class="content">
      <h2>Beranda</h2>
      <div class="box">
        <h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di Penerimaan Siswa Les Privat</h3>
      </div>
    </section>

 </body>
 </html>