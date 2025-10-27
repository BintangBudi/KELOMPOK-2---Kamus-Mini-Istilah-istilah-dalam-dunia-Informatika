<?php

require_once "functions/koneksi.php";

if(!function_exists("getIstilahById")){
    function getIstilahById($id): ?array {
        global $koneksi;

        $query = $koneksi->prepare("SELECT * FROM table_istilah WHERE id = ?");
        $query->bind_param("i", $id);
        $query->execute();

        $result = $query->get_result();
        $query->close();

        return $result->num_rows > 0 ? $result->fetch_assoc() : null;
    }
}