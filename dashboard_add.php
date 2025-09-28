<?php
include 'sys_koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $duration = $_POST['duration'];
    $age = $_POST['age'];
    $produser = $_POST['produser'];
    $sutradara = $_POST['sutradara'];
    $penulis = $_POST['penulis'];
    $produksi = $_POST['produksi'];
    $aktor = $_POST['aktor'];
    $sinopsis = $_POST['sinopsis'];

    // Upload poster
    $poster = '';
    if (isset($_FILES['poster']) && $_FILES['poster']['error'] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $poster = $target_dir . basename($_FILES["poster"]["name"]);
        move_uploaded_file($_FILES["poster"]["tmp_name"], $poster);
    }

    // Prepared statement
    $stmt = $koneksi->prepare("INSERT INTO film 
        (title, genre, duration, age, produser, sutradara, penulis, produksi, aktor, sinopsis, poster) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param(
            "sssssssssss",
            $title,
            $genre,
            $duration,
            $age,
            $produser,
            $sutradara,
            $penulis,
            $produksi,
            $aktor,
            $sinopsis,
            $poster
        );

        if ($stmt->execute()) {
            echo "<script>alert('Film berhasil ditambahkan'); window.location='dashboard_list.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Film</title>
    <link rel="stylesheet" href="css/style8.css">
</head>

<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="dashboard_add.php">Add Film</a>
        <a href="dashboard_list.php">List Film</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <div class="main-content">
        <h2>Add Film</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title" required><br>
            <input type="text" name="genre" placeholder="Genre" required><br>
            <input type="text" name="duration" placeholder="Duration (ex: 155 menit)" required><br>
            <input type="number" name="age" placeholder="Age Rating" required><br>
            <input type="text" name="produser" placeholder="Produser" required><br>
            <input type="text" name="sutradara" placeholder="Sutradara" required><br>
            <input type="text" name="penulis" placeholder="Penulis" required><br>
            <input type="text" name="produksi" placeholder="Produksi" required><br>
            <input type="text" name="aktor" placeholder="Aktor" required><br>
            <textarea name="sinopsis" placeholder="Sinopsis" required></textarea><br>
            <input type="file" name="poster" accept="image/*" required><br>
            <button type="submit">Save</button>
        </form>
    </div>
</body>

</html>
