<!-------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="image/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style2.css">
  <title>Booyah - Home</title>
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
        <a href="#2">Playing Now</a>
        <a href="#3">Coming Soon</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="cinema">
    <div class="hero-content">
      <div class="hero-text">
        <h1>Welcome to Booyah Cinema</h1>
        <p>Experience the magic of movies like never before,<br>
          with the latest blockbusters and timeless classics.</p>

        <!-- Search Form -->
        <form method="GET" action="index.php" class="search-form">
          <input type="text" name="search" placeholder="Search for movie titles...">
          <button type="submit">Search</button>
        </form>
      </div>
      <div class="hero-img">
        <img src="image/cinema.png" alt="Cinema Hall">
      </div>
    </div>
  </section>

  <!-- Now Playing -->
  <section class="now-playing">
    <h1 id="2">Now Playing</h1>
    <div class="film-list">
      <div class="film-card">
        <img src="image/image1.jpg" alt="Film 1">
        <h4>Demon Slayer : Kietsu No Yaiba Infinity Castle</h4>
        <p>Demon, Thriller</p>
        <a href="#">Trailer</a>
        <button type="button" onclick="window.location.href='deks1.php'">Watch Now</button>
      </div>

      <div class="film-card">
        <img src="image/image2.jpg" alt="Film 2">
        <h4>IT</h4>
        <p>Mystery, Drama</p>
        <a href="#">trailer</a>
        <button type="button">Watch Now</button>
      </div>

      <div class="film-card">
        <img src="image/image3.jpg" alt="Film 3">
        <h4>Inception</h4>
        <p>Science Fiction, Action</p>
        <a href="$">Trailer</a>
        <button type="button">Watch Now</button>
      </div>

      <div class="film-card">
        <img src="image/image4.jpg" alt="Film 4">
        <h4>Talk To Me</h4>
        <p>Horor</p>
        <a href="#">Trailer</a>
        <button type="button">Watch Now</button>
      </div>

      <div class="film-card">
        <img src="image/image5.jpg" alt="Film 5">
        <h4>The Conjuring</h4>
        <p>Horor</p>
        <a href="#">Trailer</a>
        <button type="button">Watch Now</button>
      </div>

      <div class="film-card">
        <img src="image/image6.jpg" alt="Film 6">
        <h4>The Nun</h4>
        <p>Horor</p>
        <a href="#">Trailer</a>
        <button type="button">Watch Now</button>
      </div>
    </div>
  </section>

  <!-- Coming Soon -->
  <section class="coming-soon">
    <h1 id="3">Coming Soon</h1>
    <div class="film-list">
      <div class="film-card">
        <img src="coming-film1.png" alt="Coming Film 1">
        <h4>October 20, 2024</h4>
        <a href="#">View Details</a>
      </div>
      <div class="film-card">
        <img src="coming-film2.png" alt="Coming Film 2">
        <h4>November 15, 2024</h4>
        <a href="#">View Details</a>
      </div>
      <div class="film-card">
        <img src="coming-film3.png" alt="Coming Film 3">
        <h4>December 1, 2024</h4>
        <a href="#">View Details</a>
      </div>
    </div>
  </section>

</body>

</html>