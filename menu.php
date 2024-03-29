<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="./images/logo.png" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./nieuws.php">Nieuws</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./kalender.php">Kalender</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Teams
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./teams/alfaromeo.php">Alfa Romeo</a></li>
            <li><a class="dropdown-item" href="./teams/alphatauri.php">Alpha Tauri</a></li>
            <li><a class="dropdown-item" href="./teams/alpine.php">Alpine</a></li>
            <li><a class="dropdown-item" href="./teams/astonmartin.php">Aston Martin</a></li>
            <li><a class="dropdown-item" href="./teams/ferrari.php">Ferrari</a></li>
            <li><a class="dropdown-item" href="./teams/haas.php">Haas</a></li>
            <li><a class="dropdown-item" href="./teams/mclaren.php">Mc Laren</a></li>
            <li><a class="dropdown-item" href="./teams/mercedes.php">Mercedes</a></li>
            <li><a class="dropdown-item" href="./teams/redbull.php">Red Bull</a></li>
            <li><a class="dropdown-item" href="./teams/williams.php">Williams</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            if(isset($_COOKIE["DE3UsernameCookie"])) {
              echo "<li><a class='dropdown-item' href='./logout.php'>log uit</a></li>";
            } else {
              echo "<li><a class='dropdown-item' href='./register.php'>meld aan</a></li>\n";
              echo "<li><a class='dropdown-item' href='./login.php'>Log in</a></li>\n";
            }
            ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
