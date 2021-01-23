 <?php 
      include 'koneksi.php';
?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Cetak Peserta</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https:One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css2?family=Potta+">
<script>
  window.print();
</script>
 </head>
 <body>
 
    <h2>Laporan Calon Siswa</h2><br><br>
    <table border="1">
          <thead>
            <tr>
              <th>No</th>
              <th>No Pendaftaran</th>
              <th>Tahun Ajaran</th>
              <th>Jurusan</th>
              <th>Nama Lengkap</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Jadwal</th>
              <th>Mata Pelajaran</th>
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
              <td><?php echo $row['thn_ajaran'] ?></td>
              <td><?php echo $row['jurusan'] ?></td>
              <td><?php echo $row['nama'] ?></td>
              <td><?php echo $row['tgl_lahir'] ?></td>
              <td><?php echo $row['jk'] ?></td>
              <td><?php echo $row['kelas'] ?></td>
              <td><?php echo $row['jadwal'] ?></td>
              <td><?php echo $row['mata_pelajaran'] ?></td>
    
            </tr>

          <?php } ?>

          </tbody>

        </table>

 </body>
 </html>