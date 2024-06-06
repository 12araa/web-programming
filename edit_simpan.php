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

//  ambil data dari URL dengan GET
 $nim = $_GET['nim'];
 $nama = $_GET['nama'];
 $telepon = $_GET['telepon'];
 $jurusan = $_GET['jurusan'];
 $alamat = $_GET['alamat'];

//  query update tabel
$sql = "UPDATE tbl_mahasiswa SET nama='$nama', telepon='$telepon', jurusan='$jurusan', alamat='$alamat' 
        WHERE nim='$nim'";
// menjalankan query
if(mysqli_query($conn,$sql)){
    echo "Update data berhasil";
    header("Location: tampil_data.php");

}else{
    echo "Gagal update data";
}

?>
