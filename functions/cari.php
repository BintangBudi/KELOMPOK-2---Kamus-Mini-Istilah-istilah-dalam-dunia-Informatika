<?php

require_once "functions/koneksi.php";

if (!function_exists("cari")) {
    function cari($keyword): array {
        global $koneksi;

        $keyword = "%$keyword%";

        $query = $koneksi->prepare("SELECT * FROM table_istilah WHERE istilah LIKE ? ORDER BY updated_at DESC");
        $query->bind_param("s", $keyword);

        $query->execute();

        return $query->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}