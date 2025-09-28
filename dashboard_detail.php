<?php
include 'sys_koneksi.php';

$id = $_GET['id'];
$result = $koneksi->query("SELECT * FROM film WHERE id = $id");
$film = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detail Film</title>
  <link rel="stylesheet" href="css/detail.css">
</head>
<body>
  <div class="main-content">
    <h2><?php echo $film['title']; ?></h2>

    <div class="detail-container">
      <div class="poster">
        <img src="<?php echo $film['poster']; ?>" alt="Poster" width="300">
      </div>

      <div class="info">
        <p><strong>Title:</strong> <?php echo $film['title']; ?></p>
        <p><strong>Genre:</strong> <?php echo $film['genre']; ?></p>
        <p><strong>Duration:</strong> <?php echo $film['duration']; ?></p>
        <p><strong>Age:</strong> <?php echo $film['age']; ?>+</p>
        <p><strong>Produser:</strong> <?php echo $film['produser']; ?></p>
        <p><strong>Sutradara:</strong> <?php echo $film['sutradara']; ?></p>
        <p><strong>Penulis:</strong> <?php echo $film['penulis']; ?></p>
        <p><strong>Produksi:</strong> <?php echo $film['produksi']; ?></p>
        <p><strong>Aktor:</strong> <?php echo $film['aktor']; ?></p>
        <p><strong>Sinopsis:</strong><br> <?php echo nl2br($film['sinopsis']); ?></p>
      </div>
    </div>

    <br>
    <a href="dashboard_list.php" class="btn-back">⬅ Kembali ke List</a>
  </div>
</body>
</html>
