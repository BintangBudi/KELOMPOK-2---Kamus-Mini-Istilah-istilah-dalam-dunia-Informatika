<?php

require_once "functions/koneksi.php";

if(!function_exists("semuaIstilah")){
    function semuaIstilah(): array {
        global $koneksi;

        $query = $koneksi->prepare("SELECT * FROM table_istilah ORDER BY updated_at DESC");
        $query->execute();

        $result = $query->get_result()->fetch_all(MYSQLI_ASSOC);
        $query->close();

        return $result;
    }
}