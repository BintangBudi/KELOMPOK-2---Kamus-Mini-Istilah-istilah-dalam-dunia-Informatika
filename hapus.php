<?php
require_once "functions.php";

if (isset($_GET["istilah"])) {
    $result = hapus($_GET["istilah"]);

    if ($result) {
        echo "<script>
                alert('Istilah berhasil dihapus!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Istilah gagal dihapus!');
                document.location.href = 'index.php';
              </script>";
    }
}
