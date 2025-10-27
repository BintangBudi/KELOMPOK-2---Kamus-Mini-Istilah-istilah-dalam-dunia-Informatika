<?php

require_once "functions/koneksi.php";

if (!function_exists("tambah")) {
    function tambah($data): int {
        global $koneksi;

        // cek duplikat sebelum insert
        $checkQuery = $koneksi->prepare("SELECT id FROM table_istilah WHERE istilah = ?");
        $checkQuery->bind_param("s", $data['istilah']);
        $checkQuery->execute();

        if ($checkQuery->get_result()->num_rows > 0) {
            $checkQuery->close();
            return 2; // GAGAL (Duplikat)
        }

        $checkQuery->close();

        // Jika tidak duplikat, lanjutkan insert
        $insertQuery = $koneksi->prepare("INSERT INTO table_istilah (istilah, definisi, created_at, updated_at) VALUES (?, ?, NOW(), NOW())");
        $insertQuery->bind_param("ss", $data['istilah'], $data['definisi']);
        $insertQuery->execute();

        $affectedRows = $koneksi->affected_rows;

        // 1 = SUKSES, 0 = GAGAL
        return $affectedRows > 0 ? 1 : 0;
    }
}