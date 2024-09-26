<?php

require '../koneksi.php';

$id = $_GET["id"];
if (isset($_POST["submit"])) {
  if (updateData($_POST, $id, "category") > 0) {
    echo "<script>alert ('Berhasil')
        window.location.href = '../index.php';</script>";
  } else {
    echo "<script>alert('Gagal');</script>";
  }
}

$kategori = tampilData($id, "category");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Document</title>
</head>

<body class="flex items-center justify-center h-screen">


  <form method="post" class=" w-96 mx-auto shadow-xl rounded-xl p-4 ">
    <div class="mb-5">
      <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Kategori</label>
      <input type="kategori" name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder="Electric" required value="<?= $kategori[0]["kategory"] ?>" />
    </div>
    <div class="mb-5">
      <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi</label>
      <textarea type="deskripsi" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-48" placeholder="lorem ipsum dolmet......."><?= $kategori[0]["deskripsi"] ?></textarea>
    </div>

    <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>

</body>

</html>