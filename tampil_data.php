<?php 
  // konfigurasi koneksi database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "instiki";

  // membuat koneksi
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // cek koneksi
  // if(!$conn){
  //   echo "koneksi gagal";
  // }else{
  //   echo "koneksi berhasil <br>";
  // }

  // query untuk menampilkan data dari table
  $sql = "SELECT * FROM tbl_mahasiswa";
  $result = mysqli_query($conn, $sql);


  if(mysqli_num_rows($result)>0){
      // menampilkan data dalam bentuk table
      echo "<h2>Data Mahasiswa</h2>";
      echo "<a href='form_input.html'>Input Data</a>";
      echo "<table border=1>";
          echo "<tr> 
              <th>NIM</th>
              <th>Nama</th>
              <th>Telepon</th>
              <th>Jurusan</th>
              <th>Alamat</th>
              <th>Aksi</th>
              <th>Aksi 2</th>
          </tr>";

      while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
              echo "<td>" . $row ['nim'] . "</td>";
              echo "<td>" . $row ['nama'] . "</td>";
              echo "<td>" . $row ['telepon'] . "</td>";
              echo "<td>" . $row ['jurusan'] . "</td>";
              echo "<td>" . $row ['alamat'] . "</td>";
              echo "<td>";
              echo "<a href='hapus.php?nim=" . $row["nim"] . "'>Hapus</a>";
              echo "</td>";
              echo "<td>";
              echo "<a href='edit.php?nim=" . $row["nim"] . "'>Edit</a>";
              echo "</td>";

          echo "</tr>";
      }
      echo "</table>";

  }else{
    echo "Tabel kosong";
  }


?>