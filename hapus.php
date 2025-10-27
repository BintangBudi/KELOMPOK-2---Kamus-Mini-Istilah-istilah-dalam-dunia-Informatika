<?php
require_once "functions/hapus.php";

header('Content-Type: application/json');

if (isset($_POST["id"])) {
    $result = hapus($_POST["id"]);
    $response = [];

    if ($result) {
        $response['status'] = 'success';
        $response['message'] = 'Istilah berhasil dihapus!';
    } else {
        $response["status"] = 'error';
        $response['message'] = 'Gagal menghapus istilah. Terjadi kesalahan database.';
    }
} else {
     $response['status'] = 'error';
     $response['message'] = 'ID tidak ditemukan.';
}

echo json_encode($response);
