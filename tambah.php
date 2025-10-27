<?php

require_once "functions/tambah.php";

header('Content-Type: application/json');

if (!empty($_POST['istilah']) && !empty($_POST['definisi'])) {
    $result = tambah($_POST);
    $response = [];

    if ($result === 1) {
        // berhasil insert
        $response['status'] = 'success';
        $response['message'] = 'Istilah berhasil ditambah!';
    } else if ($result === 2) { 
        // kena duplikat
        $response['status'] = 'error'; 
        $response['message'] = 'Gagal! Istilah "' . htmlspecialchars($_POST['istilah']) . '" sudah ada di database.';
    } else { 
        // error di db
        $response['status'] = 'error';
        $response['message'] = 'Gagal menambah istilah. Terjadi kesalahan database.';
    }
} else {
    $response['message'] = 'Data tidak lengkap. Istilah dan Definisi wajib diisi.';
}

echo json_encode($response);
