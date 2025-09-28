<?php
include 'sys_koneksi.php';

// Ambil data film berdasarkan ID
$id = $_GET['id'];
$result = $koneksi->query("SELECT * FROM film WHERE id = $id");
$film = $result->fetch_assoc();

// Update data jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title     = $koneksi->real_escape_string($_POST['title']);
    $genre     = $koneksi->real_escape_string($_POST['genre']);
    $duration  = $koneksi->real_escape_string($_POST['duration']);
    $age       = (int)$_POST['age']; // integer, aman
    $produser  = $koneksi->real_escape_string($_POST['produser']);
    $sutradara = $koneksi->real_escape_string($_POST['sutradara']);
    $penulis   = $koneksi->real_escape_string($_POST['penulis']);
    $produksi  = $koneksi->real_escape_string($_POST['produksi']);
    $aktor     = $koneksi->real_escape_string($_POST['aktor']);
    $sinopsis  = $koneksi->real_escape_string($_POST['sinopsis']);
    $poster    = $koneksi->real_escape_string($_POST['poster']); // masih pakai URL

    $sql = "UPDATE film SET 
        title='$title',
        genre='$genre',
        duration='$duration',
        age=$age,
        produser='$produser',
        sutradara='$sutradara',
        penulis='$penulis',
        produksi='$produksi',
        aktor='$aktor',
        sinopsis='$sinopsis',
        poster='$poster'
        WHERE id=$id";

    if ($koneksi->query($sql)) {
        header("Location: dashboard_list.php");
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Film</title>
  <link rel="stylesheet" href="css/style7.css">
</head>
<body>
  <div class="main-content">
    <h2>Edit Film</h2>
    <form method="POST" class="form-edit">
      <label>Title</label>
      <input type="text" name="title" value="<?php echo $film['title']; ?>" required>

      <label>Genre</label>
      <input type="text" name="genre" value="<?php echo $film['genre']; ?>">

      <label>Duration</label>
      <input type="text" name="duration" value="<?php echo $film['duration']; ?>">

      <label>Age</label>
      <input type="number" name="age" value="<?php echo $film['age']; ?>">

      <label>Produser</label>
      <input type="text" name="produser" value="<?php echo $film['produser']; ?>">

      <label>Sutradara</label>
      <input type="text" name="sutradara" value="<?php echo $film['sutradara']; ?>">

      <label>Penulis</label>
      <input type="text" name="penulis" value="<?php echo $film['penulis']; ?>">

      <label>Produksi</label>
      <input type="text" name="produksi" value="<?php echo $film['produksi']; ?>">

      <label>Aktor</label>
      <input type="text" name="aktor" value="<?php echo $film['aktor']; ?>">

      <label>Sinopsis</label>
      <textarea name="sinopsis" rows="5"><?php echo $film['sinopsis']; ?></textarea>

      <label>Poster (URL)</label>
      <input type="text" name="poster" value="<?php echo $film['poster']; ?>">

      <button type="submit" class="btn-edit">Update</button>
      <a href="dashboard_list.php" class="btn-delete">Cancel</a>
    </form>
  </div>
</body>
</html>
