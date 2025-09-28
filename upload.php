<?php
include 'koneksi.php';  // koneksi database

$title     = $_POST['title'];
$genre     = $_POST['genre'];
$duration  = $_POST['duration'];
$age       = $_POST['age'];
$produser  = $_POST['produser'];
$sutradara = $_POST['sutradara'];
$penulis   = $_POST['penulis'];
$produksi  = $_POST['produksi'];
$aktor     = $_POST['aktor'];
$sinopsis  = $_POST['sinopsis'];

// folder penyimpanan poster
// folder penyimpanan
$target_dir = __DIR__ . "/uploads/";  
$target_file = $target_dir . basename($_FILES["poster"]["name"]);

if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
    // simpan path relatif (biar gampang dipanggil di view.php)
    $poster = "uploads/" . basename($_FILES["poster"]["name"]);
} else {
    $poster = null;
    echo "❌ Gagal upload file!";
}


$sql = "INSERT INTO film 
        (title, genre, duration, age, produser, sutradara, penulis, produksi, aktor, sinopsis, poster)
        VALUES 
        ('$title', '$genre', '$duration', '$age', '$produser', '$sutradara', '$penulis', '$produksi', '$aktor', '$sinopsis', '$poster')";

if ($koneksi->query($sql) === TRUE) {
    echo "✅ Film berhasil ditambahkan!";
    echo "<br><a href='view.php'>Lihat Data Film</a>";
} else {
    echo "❌ Error: " . $koneksi->error;
}

$koneksi->close();
?>
