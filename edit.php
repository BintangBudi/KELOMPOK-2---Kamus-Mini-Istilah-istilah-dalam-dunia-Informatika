<?php
require_once "functions/getIstilahById.php";
require_once "functions/ubah.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $data = getIstilahById($_GET["id"]);
        
        if ($data) {
            echo json_encode(['status' => 'success', 'data' => $data]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Data tidak ditemukan.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'ID tidak disediakan.']);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = [];

    if (!empty($_POST) && isset($_POST['id'])) {
        $result = ubah($_POST);
        
        if ($result === 1) {
            // sukses
            $response['status'] = 'success';
            $response['message'] = 'Istilah berhasil diubah!';
        } else if ($result === 2) {
            // nothing happen ??
            $response['status'] = 'success'; 
            $response['message'] = 'Tidak ada perubahan data.';
        } else {
            // error db
            $response['status'] = 'error';
            $response['message'] = 'Gagal mengubah istilah. Terjadi kesalahan database.';
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Data tidak lengkap.';
    }
    echo json_encode($response);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Metode request tidak valid.']);
}
