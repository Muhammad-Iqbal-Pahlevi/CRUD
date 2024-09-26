<?php

require "koneksi.php";

$barangs = getData("barang");
$categories = getData("category");
$suppliers = getData("supplier");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inventaris Gudang</title>
</head>

<body class="bg-gray-200">
    <div class="container bg-white mx-auto mt-10 shadow-lg rounded-md overflow-hidden ">
        <h1 class="p-6 bg-blue-500 text-white text-2xl font-bold">Data Barang</h1>
        <div class="container mx-auto p-4 flex flex-col gap-4">
            <h1 class="text-xl font-bold ">Nama Perusahan : Murni Jaya</h1>
            <button id="pindah" class="w-fit py-2 px-4 bg-blue-500 text-white text-sm font-semibold rounded-md" onclick="">Tambah Barang</button>
            <table border="2" cellpadding="10" cellspacing="0" class="w-full rounded-full">
                <tr class="border bg-black text-white rounded-sm divide-x">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Lokasi Penyimpanan</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1 ?>
                <?php foreach ($barangs as $barang) : ?>
                    <tr class="bg-gray-100 divide-x divide-gray-300 text-sm font-medium text-center">
                        <td class="px-4 py-2"><?= $no ?></td>
                        <td class="px-4 py-2"><?= $barang['nama_barang'] ?></td>
                        <td class="px-4 py-2"><?= $barang['jumlah'] ?></td>
                        <td class="px-4 py-2"><?= $barang['lokasi_penyimpanan'] ?></td>
                        <td class="px-4 py-2 flex justify-center space-x-2">
                            <a href="edit.php?id=<?= $barang["id"] ?>" class="text-blue-500 hover:text-blue-700">
                                <i class="ph ph-pencil-simple"></i>
                            </a>
                            <a href="delete.php?id=<?= $barang["id"] ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Yakin Mau Hapus?')">
                                <i class="ph ph-trash"></i>
                            </a>
                        </td>
                    </tr>

                    <?php $no++ ?>
                <?php endforeach; ?>
            </table>
        </div>

    </div>

    <!-- kategory -->

    <div class=" container bg-white mx-auto shadow-xl mt-10 mb-10 rounded-xl overflow-hidden">
        <h1 class="text-2xl font-bold text-center  bg-blue-500 py-4 text-white">Kategori Barang</h1>
        <div class="container mx-auto p-4 flex flex-col gap-4">
            <h1 class="text-xl font-bold text-blue-600">Nama Perusahan : Murni Jaya</h1>
            <a href="../Barang/kategory/tambah_kategory.php"><button class="w-fit py-2 px-4 bg-blue-500 text-white text-sm font-semibold rounded-md" onclick="">+Tambah Kategory</button></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4 ">
            <!-- Card 1 -->
            <?php foreach ($categories as $kategori) : ?>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg" src="" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-500"><?= $kategori["kategory"] ?></h5>
                        </a>
                        <p class="mb-3 font-normal text-blue-500"><?= $kategori["deskripsi"] ?></p>
                        <a href="../Barang/kategory/edit_kategori.php?id=<?= $kategori["id"] ?>" class="inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 transition-all">
                            <i class="ph ph-pencil-simple"></i>
                        </a>
                        <a href="../Barang/kategory/delete_kategori.php?id=<?= $kategori["id"] ?>" onclick="return confirm('Yakin lu')" class="inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 transition-all">
                            <i class="ph ph-trash"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- supplier -->
    <div class="container bg-white mx-auto  mt-10 mb-10 rounded-xl overflow-hidden shadow-xl">
        <h1 class="text-2xl font-bold text-center  bg-blue-500 py-4 text-white">Kategori Barang</h1>
        <div class="container mx-auto p-4 flex flex-col gap-4">
            <h1 class="text-xl font-bold text-blue-600">Nama Perusahan : Murni Jaya</h1>
            <a href="../supplier/tambah_supp.php" class="w-fit"><button class="w-fit py-2 px-4 bg-blue-500 text-white text-sm font-semibold rounded-md" onclick="">+Supplier</button></a>
            <hr>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4 ">
            <?php foreach ($suppliers as $supplier) : ?>
                <div class="w-ful max-w-sm border-gray-200 rounded-lg py-4 shadow-md ">
                    <div class="flex flex-col items-center">
                        <img class="w-24 h-24 mb-3 shadow rounded-full" src="../image/<?= $supplier["image"] ?>" />
                        <h5 class="mb-1 text-xl font-medium text-gray-700 "><?= $supplier["nama"] ?></h5>
                        <span class="text-xs mb-1 text-gray-500 "><?= $supplier["kontak"] ?></span>
                        <p class="text-sm font-semibold text-gray-700"><?= $supplier["barang"] ?></p>
                        <div class="flex mt-4 md:mt-6">
                            <a href="../supplier/edit_supp.php?id=<?= $supplier["id"] ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 ">Edit</a>
                            <a href="../supplier/delete_supp.php?id=<?= $supplier["id"] ?>" onclick="return confirm('Yakin dek')" class="py-2 px-4 ms-2 text-sm font-medium transition-all duration-500 focus:outline-none bg-gray-900 text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 ">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script>
        const pindah = document.getElementById('pindah');
        pindah.addEventListener('click', function() {
            window.location.href = 'tambah.php';
        })
        const move = document.getElementById('move');
        move.addEventListener('click', function() {
            window.location.href = '/kategory/tambah_kategory.php';
        })
    </script>
</body>

</html>