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
  //   query untuk menampilkan data
  $sql = "SELECT * FROM tbl_mahasiswa WHERE nim='$nim'";
  //   menjalankan query
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)== 1){ //cek data
    $row = mysqli_fetch_assoc($result); //mengambil data disimpan di array $result
    $nim = $row['nim'];
    $nama = $row['nama'];
    $telepon = $row['telepon'];
    $jurusan = $row['jurusan'];
    $alamat = $row['alamat'];
  }else{
    echo "Data tidak ada di tabel";
  }
?>

<h2>Edit Data Mahasiswa</h2>
<form action="edit_simpan.php" method="get">
      <label for="">nim</label>
      <input type="text" name="nim" value="<?php echo $nim ?>" /> <br />
      <label for="">nama</label>
      <input type="text" name="nama" value="<?php echo $nama ?>" /> <br />
      <label for="">telepon</label>
      <input type="text" name="telepon" value="<?php echo $telepon ?>" /> <br />
      <label for="">jurusan</label>
      <input type="text" name="jurusan" value="<?php echo $jurusan ?>" /> <br />
      <label for="">alamat</label>
      <input type="text" name="alamat" value="<?php echo $alamat ?>" /> <br />
      <input type="submit" value="Update" />
</form>
