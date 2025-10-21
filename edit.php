<?php
require_once "functions.php";

if (isset($_GET["id"])) {
    $data = cari($_GET["id"]);
    if (count($data) === 0) {
        echo "<script>
                alert('Istilah tidak ditemukan!');
                document.location.href = 'index.php';
              </script>";
        exit;
    }
    $data = $data[0];

    if (isset($_POST["submit"])) {
        $_POST["id"] = $data["id"];
        $result = ubah($_POST);

        if ($result) {
            echo "<script>
                    alert('Istilah berhasil diubah!');
                    document.location.href = 'index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Istilah gagal diubah!');
                    document.location.href = 'edit.php?id={$_GET["id"]}';
                  </script>";
        }
    }
} else {
    echo "<script>
            alert('Istilah tidak ditemukan!');
            document.location.href = 'index.php';
          </script>";
    exit;
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Istilah</title>
    </head>
    <body>
        <h1>Edit Istilah <?= $data["istilah"] ?> </h1>
        <form action="" method="post">
            <div>
                <label for="istilah">Istilah</label>
                <input id="istilah" type="text" name="istilah" required value="<?= $data['istilah'] ?>"/>
            </div>
            <div>
                <label for="definisi">Definisi</label>
                <textarea id="definisi" name="definisi" required><?= $data['definisi'] ?></textarea>
            </div>
            <div>
                <button type="submit" name="submit">Simpan</button>
            </div>
        </form>
    </body>
</html>