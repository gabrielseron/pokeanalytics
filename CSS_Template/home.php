<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Poké Pro Strat</title>
  <meta name="description" content="Description de ma page pour les moteurs de recherche">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="./styles/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css" />
  <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
</head>
<body class="container">
  <div id="nav">
  <nav>
    <ul class="menu open">
      <li class="logo_nav"><img src="./images/logo.png" class="logo_nav my-button" alt=""></li>
      <li class="searchInput">
        <form autocomplete="off" action="../index.php">
          <div class="autocomplete">
            <input id="myInput" type="text" name="pokemon" placeholder="Search" required>
            <div class="tails"></div>
            <div class="tail1"></div>
            <div class="tail2"></div>
            <div class="tail3"></div>
          </div>
          <button type="submit"><span>Valider</span></button>
        </form>
        <div class="search"><div>
      </li>
    </ul>
  </nav>
  </div>
    <div id="footer">
    <footer class="footer" >
      <img src="./images/logo.png" class="footer_logo" alt="">
      <span class="footer_contact">
        <a href="http://localhost/pokeanalytics/CSS_Template/home.php#About">About</a>
      </span>
    </footer>
    </div>
  <div id="fullPage">
    <div class="container home, section">

    </div>
    <div class="container top, section">

    </div>
    <div class="container about, section">
      <div class="composant">
        <div class="textContainer">
          <p class="text">About</p>
        </div>
        <div class="textContainer">
          <p class="text">About</p>
        </div>
      </div>
    </div>
  </div>
  <script src="./scripts/home.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js"></script>"

  <script>
    new fullpage('#fullPage', {
      autoScrolling: true,
      navigation: true,
      navigationTooltips: ["Home", "Top 10", "About"],
      showActiveTooltip: true
    })
  </script>

</body>
</html
