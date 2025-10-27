<?php

require_once "functions/koneksi.php";

if(!function_exists("ubah")) {
    function ubah($data): int {
        global $koneksi;

        $query = $koneksi->prepare("UPDATE table_istilah SET istilah = ?, definisi = ?, updated_at = NOW() WHERE id = ?");
        $query->bind_param("ssi", $data["istilah"], $data["definisi"], $data["id"]);

        if (!$query->execute()) {
            return 0; // GAGAL
        }

        // 1 = SUKSES (Ada yang berubah), 2 = SUKSES (Tidak ada yang berubah)
        return $koneksi->affected_rows > 0 ? 1: 2;
    }
}