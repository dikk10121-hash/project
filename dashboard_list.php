<?php
include 'sys_koneksi.php';
$result = $koneksi->query("SELECT id, title, poster FROM film");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>List Film</title>
  <link rel="stylesheet" href="css/style7.css">
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="logo">
      <img src="assets/logo.png" alt="Logo">
    </div>
    <a href="dashboard_list.php" class="active">List Film</a>
    <a href="dashboard_add.php">Add Film</a>
    <a href="dashboard_account.php">List Account</a>
    <a href="logout.php" class="logout">Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h2>List Film</h2>

    <table class="film-table">
      <thead>
        <tr>
          <th>Cover</th>
          <th>Title</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
          <tr>
            <td>
              <a href="dashboard_detail.php?id=<?php echo $row['id']; ?>">
                <img src="<?php echo $row['poster']; ?>" class="cover-img">
              </a>
            </td>
            <td>
              <a href="dashboard_detail.php?id=<?php echo $row['id']; ?>" class="title-link">
                <?php echo $row['title']; ?>
              </a>
            </td>
            <td>
              <a href="dashboard_edit.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
              <a href="dashboard_delete.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Yakin hapus film ini?')">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>