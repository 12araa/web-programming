<?php
    // konfigurasi koneksi database
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "instiki";
 
   // membuat koneksi
   $conn = mysqli_connect($servername, $username, $password, $dbname);
 
   // cek koneksi
  //  if(!$conn){
  //    echo "koneksi gagal";
  //  }else{
  //    echo "koneksi berhasil <br>";
  //  }
  // -------------------------------------------------------------------------------------

  $a = $_GET['nim'];

  //   querry delete
  $sql = "DELETE FROM tbl_mahasiswa WHERE nim='$a'";

  if(mysqli_query($conn,$sql)){
    echo "Data berhasil dihapus";
    header("Location: tampil_data.php");

  }else{
    echo "Data gagal dihapus";
  }


?>