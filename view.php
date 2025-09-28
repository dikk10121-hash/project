<?php
include 'sys_koneksi.php';
$result = $koneksi->query("SELECT * FROM film");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview</title>
    <link rel="stylesheet" href="css/style6.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="logo">🎬</h2>
        <ul>
            <li><a href="dashboard.php" class="active">Dashboard</a></li>
            <li><a href="add_film.php">Add Film</a></li>
            <li><a href="list_film.php">List Film</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <h1>Dashboard Overview</h1>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="dashboard-container">
                <!-- Left: Basic Information -->
                <div class="basic-info">
                    <h2>Basic Information</h2>
                    <div class="info-scroll">
                        <p><b>Movie title:</b> <?= $row['title']; ?></p>
                        <p><b>Genre:</b> <?= $row['genre']; ?></p>
                        <p><b>Duration:</b> <?= $row['duration']; ?></p>
                        <p><b>Age Rating:</b> <?= $row['age']; ?>+</p>
                        <p><b>Producer:</b> <?= $row['produser']; ?></p>
                        <p><b>Film director:</b> <?= $row['sutradara']; ?></p>
                        <p><b>Screenwriter:</b> <?= $row['penulis']; ?></p>
                        <p><b>Production:</b> <?= $row['produksi']; ?></p>
                        <p><b>Actor:</b> <?= $row['aktor']; ?></p>
                        <p><b>Synopsis:</b> <?= $row['sinopsis']; ?></p>
                    </div>
                </div>

                <!-- Right: Poster -->
                <div class="poster-section">
                    <?php if (!empty($row['poster'])) { ?>
                        <img src="<?= $row['poster']; ?>" alt="Poster">
                    <?php } else { ?>
                        <div class="poster-placeholder">No Poster</div>
                    <?php } ?>
                    <button class="btn orange">Change Image</button>
                    <div class="action-buttons">
                        <button class="btn orange">Confirm</button>
                        <button class="btn red">Cancel</button>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>