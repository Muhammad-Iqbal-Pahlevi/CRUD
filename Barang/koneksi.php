<?php

$server = "localhost";
$username = "root";
$pass =  "";
$database = "invetaris";

$koneksi = mysqli_connect($server, $username, $pass, $database);

if (!$koneksi) {
    echo "gagal terhubung ke data base :" . mysqli_connect_error();
};

// create data

function getData($table)
{
    global $koneksi;
    $table = mysqli_query($koneksi, "SELECT * FROM $table");
    $rows = [];
    while ($row = mysqli_fetch_assoc($table)) {
        $rows[] = $row;
    }
    return $rows;
};

// read data 

function tampilData($id, $table)
{
    global $koneksi;
    $query = "SELECT * FROM $table WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Tambah data 

function tambahData($data, $table)
{
    if ($table == "barang") {
        global $koneksi;
        $barang = htmlspecialchars($data["barang"]);
        $jumlah = htmlspecialchars($data["jumlah"]);
        $lokasi = htmlspecialchars($data["lokasi"]);
        $tambah = "INSERT INTO barang VALUE ( null, '$barang', '$jumlah', '$lokasi')";
        mysqli_query($koneksi, $tambah);
        if (mysqli_affected_rows($koneksi) > 0) {
            echo "<script>window.location.href = 'index.php'</script>";
        }
    } elseif ($table == "category") {
        global $koneksi;
        $kategori = $data["kategori"];
        $deskripsi = $data["deskripsi"];
        $query = "INSERT INTO category VALUE (null, '$kategori', '$deskripsi')";
        mysqli_query($koneksi, $query);
        if (mysqli_affected_rows($koneksi) > 0) {
            echo "<script>window.location.href = '../index.php'</script>";
        } else {
            echo "<script>alert('Gagal')</script>";
        };
    } elseif ($table == "supplier") {
        global $koneksi;
        $image = $data["image"];
        $supplier = $data["supplier"];
        $kontak = $data["kontak"];
        $barang = $data["barang"];
        $query = "INSERT INTO supplier VALUE (null, '$image', '$supplier', '$kontak', '$barang')";
        mysqli_query($koneksi, $query);
        if (mysqli_affected_rows($koneksi)) {
            echo "<script>window.location.href = '../barang/index.php'</script>;";
        } else {
            echo "<script>alert('Gagal')</script>;";
        }
    }
}




// edit data 

function updateData($data, $id, $table)
{
    if ($table == "barang") {
        global $koneksi;
        $barang = $data["barang"];
        $jumlah = $data["jumlah"];
        $lokasi = $data["lokasi"];
        $update = "UPDATE barang SET
                nama_barang = '$barang',
                jumlah = '$jumlah',
                lokasi_penyimpanan = '$lokasi'
                WHERE id = $id";
        mysqli_query($koneksi, $update);
        return mysqli_affected_rows($koneksi);
    } elseif ($table == "category") {
        global $koneksi;
        $kategori = $data["kategori"];
        $deskripsi = $data["deskripsi"];
        $query = "UPDATE category SET
                kategory = '$kategori',
                deskripsi = '$deskripsi'
                WHERE id = $id";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    } elseif ($table == "supplier") {
        global $koneksi;
        $image = $data["image"];
        $nama = $data["supplier"];
        $kontak = $data["kontak"];
        $barang = $data["barang"];
        $query = "UPDATE supplier SET
                image = '$image',
                nama = '$nama',
                kontak = '$kontak',
                barang = '$barang'
                WHERE id = $id";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
}


// delete data 

function hapusData($id, $table)
{
    global $koneksi;
    $query = "DELETE FROM $table WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
