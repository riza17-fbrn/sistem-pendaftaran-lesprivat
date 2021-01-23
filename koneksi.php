 <?php

//membuat koneksi database
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "lesprivat";

 $conn = mysqli_connect($host,$user,$pass,$db);

 if (!$conn){
 	echo "Koneksi ke server gagal :" .mysqli_connect_error($conn);
	 }

 ?> 