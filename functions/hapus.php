<?php

require_once "functions/koneksi.php";

if(!function_exists("hapus")){
    function hapus($id): bool {
        global $koneksi;

        $query = $koneksi->prepare("DELETE FROM table_istilah WHERE id = ?");
        $query->bind_param("i", $id);
        $query->execute();

        return $koneksi->affected_rows > 0;
    }
}