<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style3.css">
    <title>Booyah - Login</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="nav-container">
            <div class="brand">
                <img src="image/logo.png" alt="Logo Booyah" class="brand-logo">
                <h4 class="logo">Booyah Cinema</h4>
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="index.php#2">Playing Now</a>
                <a href="index.php#3">Coming Soon</a>
            </nav>
        </div>
    </header>
    <h2>Buat Akun</h2>
    <form method="POST" action="sys_register.php">
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="username" placeholder="Masukkan username" required><br>
        <input type="password" name="password" placeholder="Masukkan password" required><br>
        <button type="submit">Register</button>
    </form>
</body>

</html>