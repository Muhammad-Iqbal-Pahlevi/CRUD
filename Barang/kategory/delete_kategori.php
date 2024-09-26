<?php

require "../koneksi.php";

$id = $_GET["id"];

if (hapusData($id, "category") > 0) {
    echo "<script>
    alert('Data Di Hapus');
    document.location.href = '../index.php'
    </script>";
} else {
    echo "<script>
    alert('Data gagal Di Hapus');
    document.location.href = '../index.php'
    </script>";
}
