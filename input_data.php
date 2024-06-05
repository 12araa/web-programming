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

  $nim = $_GET['nim'];
  $nama = $_GET['nama'];
  $telepon = $_GET['telepon'];
  $jurusan = $_GET['jurusan'];
  $alamat = $_GET['alamat'];

  if(empty($nim) || empty($nama)){
    die("NIM dan Nama harus diisi");
  }

  $sql = "INSERT INTO tbl_mahasiswa (nim, nama, telepon, jurusan, alamat)
        VAlUES ('$nim', '$nama', '$telepon', '$jurusan', '$alamat')";

  if(mysqli_query($conn, $sql)){
    // echo "Input data berhasil";
    header("Location: koneksi.php");
    exit;

  }else{
    echo "Error insert data";
  }

?>