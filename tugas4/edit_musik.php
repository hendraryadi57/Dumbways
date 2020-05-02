<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_musik'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id_musik"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM musik WHERE id_musik='$id_musik'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD </title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit Musik <?php echo $data['title']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id_musik" value="<?php echo $data['id_musik']; ?>"  hidden />
        <div>
          <label>Title</label>
          <input type="text" name="title" value="<?php echo $data['title']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Durasi</label>
         <input type="text" name="durasi" value="<?php echo $data['durasi']; ?>" />
        </div>
        <div>
          <label>Id genre</label>
         <input type="text" name="id_genre" required=""value="<?php echo $data['id_genre']; ?>" />
        </div>
        <div>
          <label>Id Singer</label>
         <input type="text" name="id_singer" required="" value="<?php echo $data['id_singer']; ?>"/>
        </div>
        <div>
          <label>Gambar</label>
          <img src="gambar/<?php echo $data['photo']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="photo" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i>
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>