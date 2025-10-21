<?php
$koneksi = new mysqli("localhost", "root", "", "db_kamus");

// Create
if (!function_exists("tambah")) {
    function tambah($data):bool
    {
        global $koneksi;

        $istilah = htmlspecialchars($data["istilah"]);
        $definisi = htmlspecialchars($data["definisi"]);

        $query = $koneksi->prepare("INSERT INTO table_istilah (istilah, definisi, created_at, updated_at) VALUES (?, ?, NOW(), NOW())");
        $query->bind_param("ss", $istilah, $definisi);
        $query->execute();

        return $koneksi->affected_rows > 0;
    }
}

// Read
if(!function_exists("semuaIstilah")){
    function semuaIstilah():array {
        global $koneksi;

        return $koneksi->query("SELECT * FROM table_istilah")->fetch_all(MYSQLI_ASSOC);
    }
}

// Update
if(!function_exists("ubah")) {
    function ubah($data):bool {
        global $koneksi;

        $istilah = htmlspecialchars($data["istilah"]);
        $definisi = htmlspecialchars($data["definisi"]);

        $query = $koneksi->prepare("UPDATE table_istilah SET istilah = ?, definisi = ?, updated_at = NOW() WHERE id = ?");
        $query->bind_param("ssi", $istilah, $definisi, $data["id"]);
        $query->execute();

        return $koneksi->affected_rows > 0;
    }
}

// Delete
if(!function_exists("hapus")){
    function hapus($istilah):bool {
        global $koneksi;

        $query = $koneksi->prepare("DELETE FROM table_istilah WHERE istilah = ?");
        $query->bind_param("s", $istilah);
        $query->execute();

        return $koneksi->affected_rows > 0;
    }
}

// Cari
if (!function_exists("cari")) {
    function cari($keyword):array {
        global $koneksi;

        $keyword = "%$keyword%";
        $query = $koneksi->prepare("SELECT * FROM table_istilah WHERE istilah LIKE ? OR definisi LIKE ?");
        $query->bind_param("ss", $keyword, $keyword);
        $query->execute();

        return $query->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}