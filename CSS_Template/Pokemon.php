<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Poké Pro Strat</title>
  <meta name="description" content="Description de ma page pour les moteurs de recherche">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="./styles/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css" />
</head>
<body class="container">
  <div id="nav">
  <nav>
    <ul class="menu open">
      <li class="logo_nav"><img src="images/logo.png" class="logo_nav my-button" alt=""></li>
      <li class="search"><a href="gallerie.html">Search</a></li>
    </ul>
  </nav>
  </div>
    <div id="footer">
    <footer class="footer" >
      <hr>
      <img src="images/logo_rempli.svg" class="footer_logo" alt="">
      <div class="footer_brand">Pokémon Pro Stats</div>
      <span class="footer_contact">
        <a href="mailto:contac@safetybear.co">Contact Us</a>
      </span>
    </footer>
    </div>
  <div id="fullPage">
    <div class="container lou, section">
      <img src="images/lou1.jpg" alt="">
      <img src="images/lou2.jpg" alt="">
    </div>
    <div class="container yacine, section">
      <img src="images/yacine2.jpg" alt="">
      <img src="images/yacine1.png" alt="">
    </div>
    <div class="container affiches, section">
      <img src="images/affiche1.png" alt="">
      <img src="images/affiche2.png" alt="">
    </div>
  </div>
  <script src="scripts/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js"></script>"

  <script>
    new fullpage('#fullPage', {
      autoScrolling: true,
      navigation: true,
      navigationTooltips: ["Test", "Test2", "Test3"],
      showActiveTooltip: true
    })
  </script>

</body>
</html
