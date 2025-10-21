<?php
require_once "functions.php";

$i = 1;

if(isset($_GET["keyword"])) {
    $items = cari($_GET["keyword"]);
} else {
    $items = semuaIstilah();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamus Informatika</title>
  </head>
  <body>
      <h1>Kamus Mini Informatika</h1>
    <div>
      <div>
        <div>
          <a href="tambah.php">Tambah Istilah Baru</a>
        </div>
        <div>
          <form action="" method="get">
            <label for="search" style="display: none;">Cari Istilah</label>
            <input type="text" id="search" name="keyword" placeholder="cari istilah..."/>
            <button type="submit">Cari</button>
          </form>
        </div>
      </div>
      <table border="1" cellpadding="10" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Istilah</th>
            <th>Definisi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($items as $item): ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $item["istilah"] ?></td>
              <td><?= $item["definisi"] ?></td>
              <td>
                <a href="edit.php?id=<?= $item['istilah'] ?>">Edit</a>
                <a onclick="return confirm('yakin mau hapus?')" href="hapus.php?istilah=<?= $item['istilah'] ?>">Hapus</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>