
<?php
require_once ("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_brg'];
    $nama_barang = $_POST['nama_brg'];
    $kategori = $_POST['kategori'];
    $merk = $_POST['merk'];
    $jumlah = $_POST['jumlah'];

    $query = "UPDATE barang SET kode_brg='$kode_brg', nama_brg='$nama_brg', kategori='$kategori', merk='$merk', jumlah=$jumlah WHERE id=$id";

    if ($koneksi->query($query) === TRUE) {
        header ("location:barang.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "Permintaan tidak valid.";
}

$conn->close();
?>
