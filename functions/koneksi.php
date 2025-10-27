<?php
$koneksi = new mysqli("127.0.0.1", "erika", "kawaii", "kp");

if ($koneksi->connect_error) {
    die("Koneksi gagal: $koneksi->connect_error");
}