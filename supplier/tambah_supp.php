<?php

require "../barang/koneksi.php";

if (isset($_POST["submit"])) {
    // var_dump($_POST);
    tambahData($_POST, "supplier");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Supplier</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-300 py-10">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Tambah Supplier</h1>
        <form action="#" method="POST">

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Gender</label>
                <select name="image" id="" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="cowok.jpg">Male</option>
                    <option value="cewek.jpg">Female</option>
                </select>
            </div>


            <!-- Nama Supplier -->
            <div class="mb-4">
                <label for="supplier" class="block text-sm font-medium text-gray-700">Nama Supplier</label>
                <input type="text" id="supplier" name="supplier" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan nama supplier">
            </div>

            <!-- Kontak -->
            <div class="mb-4">
                <label for="kontak" class="block text-sm font-medium text-gray-700">Kontak</label>
                <input type="text" id="kontak" name="kontak" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan kontak supplier">
            </div>

            <!-- Barang -->
            <div class="mb-4">
                <label for="barang" class="block text-sm font-medium text-gray-700">Barang</label>
                <textarea id="barang" name="barang" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan daftar barang"></textarea>
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-center">
                <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">
                    Tambahkan Supplier
                </button>
            </div>
        </form>
    </div>
</body>

</html>