<?php
require_once "functions.php";

if (isset($_POST["submit"])) {
  $result = tambah($_POST);

  if($result) {
    echo "<script>
            alert('Istilah berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Istilah gagal ditambahkan!');
            document.location.href = 'tambah.php';
          </script>";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Istilah Baru</title>
  </head>
  <body>
    <h1>Tambah Istilah Baru</h1>
      <form action="" method="post">
        <div>
          <label for="istilah">Istilah</label>
          <input id="istilah" type="text" name="istilah" required/>
        </div>
        <div>
          <label for="definisi">Definisi</label>
          <textarea id="definisi" name="definisi" required></textarea>
        </div>
        <div>
          <button type="submit" name="submit">Tambahkan</button>
        </div>
      </form>
  </body>
</html>