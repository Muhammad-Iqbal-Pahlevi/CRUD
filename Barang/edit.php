<?php

require 'koneksi.php';

$id = $_GET["id"];
if (isset($_POST["submit"])) {
    if (updateData($_POST, $id, "barang") > 0) {
        echo "<script>alert ('Berhasil')
        window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal');</script>";
    }
}

$barang = tampilData($id, "barang");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan Barang Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <form action="" method="post">
            <h1 class="text-2xl font-bold text-center mb-6">Masukan Barang Baru</h1>
            <div class="mb-4">
                <label for="barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                <input type="text" name="barang" id="barang" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?= $barang[0]["nama_barang"] ?>">
            </div>
            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                <input type="text" name="jumlah" id="jumlah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?= $barang[0]["jumlah"] ?>">
            </div>
            <div class="mb-6">
                <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi Penyimpanan</label>
                <input type="text" name="lokasi" id="lokasi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?= $barang[0]["lokasi_penyimpanan"] ?>">
            </div>
            <button type="submit" name="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Tambahkan</button>
        </form>
    </div>
</body>

</html>