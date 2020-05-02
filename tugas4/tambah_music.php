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
        <h1>Tambah Music</h1>
      <center>
      <form method="POST" action="proses_tambah_music.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Title</label>
          <input type="text" name="title" autofocus="" required="" />
        </div>
        <div>
          <label>Durasi</label>
         <input type="text" name="durasi" />
        </div>
        <div>
          <label>Id_genre</label>
         <input type="text" name="id_genre" required="" />
        </div>
        <div>
          <label>Id_singer</label>
         <input type="text" name="id_singer" required="" />
        </div>
        <div>
          <label>Gambar Music</label>
         <input type="file" name="gambar_music" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
         <button type="submit">Simpan Music</button>
        </div>
        </section>
      </form>
  </body>
</html>