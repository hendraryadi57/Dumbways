<?php
  include('koneksi.php');
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Tugas 4</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><a href="index.php"><h1>Dumb Music Info</h1><center>
    <a href="view_genre.php">+ &nbsp; Lihat Genre</a>
    <a href="view_singer.php">+ &nbsp; Lihat Singer</a>
    <a href="tambah_genre.php">+ &nbsp; Tambah Genre</a>
    <a href="tambah_singer.php">+ &nbsp; Tambah Singer</a>
    <a href="tambah_music.php">+ &nbsp; Tambah Music</a>
    <br/>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Durasi</th>
          <th>Id Genre</th>
          <th>Id Singer</th>
          <th>Gambar</th>
          <th>Deskripsi</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM musik ORDER BY id_musik ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo substr($row['durasi'], 0, 20); ?></td>
          <td><?php echo $row['id_genre']; ?></td>
          <td><?php echo $row['id_singer']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['photo']; ?>" style="width: 120px;"></td>
          <td><?php echo $row['deskripsi']; ?></td>
          <td>
              <a href="edit_musik.php?id=<?php echo $row['id_musik']; ?>">Edit</a> |
              <a href="proses_hapus_musik.php?id=<?php echo $row['id_musik']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>