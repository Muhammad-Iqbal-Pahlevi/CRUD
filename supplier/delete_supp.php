<?php

require "../Barang/koneksi.php";

$id = $_GET["id"];

if (hapusData($id, "supplier") > 0) {
    echo "<script>window.location.href = '../Barang/index.php';</script>";
} else {
    echo "<script>alert('Gagal');</script>";
}
