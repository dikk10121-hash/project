<!DOCTYPE html>
<html>
<head>
  <title>Tambah Film</title>
</head>
<body>
  <h2>Form Tambah Film</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Judul:</label><br>
    <input type="text" name="title"><br><br>

    <label>Genre:</label><br>
    <input type="text" name="genre"><br><br>

    <label>Durasi (misal: 155 menit):</label><br>
    <input type="text" name="duration"><br><br>

    <label>Batas Usia:</label><br>
    <input type="number" name="age"><br><br>

    <label>Produser:</label><br>
    <input type="text" name="produser"><br><br>

    <label>Sutradara:</label><br>
    <input type="text" name="sutradara"><br><br>

    <label>Penulis:</label><br>
    <input type="text" name="penulis"><br><br>

    <label>Produksi:</label><br>
    <input type="text" name="produksi"><br><br>

    <label>Aktor:</label><br>
    <input type="text" name="aktor"><br><br>

    <label>Sinopsis:</label><br>
    <textarea name="sinopsis" rows="5" cols="40"></textarea><br><br>

    <label>Poster Film:</label><br>
    <input type="file" name="poster" accept="image/*"><br><br>

    <input type="submit" value="Simpan Film">
  </form>
</body>
</html>
