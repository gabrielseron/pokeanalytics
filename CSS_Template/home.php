<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Poké Pro Strat</title>
  <meta name="description" content="Description de ma page pour les moteurs de recherche">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="./styles/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css" />
  <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
</head>
<body class="container">
  <div id="nav">
  <nav>
    <ul class="menu">
      <li class="logo_nav"><img src="./images/logo.png" class="logo_nav my-button" alt=""></li>
      <li class="searchInput">
        <form autocomplete="off" action="./pokemon.php">
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
        <a href="#sectionAbout">About</a>
      </span>
    </footer>
    </div>
  <div id="fullPage">
    <div class="container home, section">
    <div class="composant">
      <div class="textContainer">
        <img class="logo" src="./images/logo.png" class="footer_logo" alt="">
        <p class="homeText">The N°1 reference for Pokémon statistics</p>
        <div class="windowTails"></div>
        <div class="windowTailStart"></div>
        <h2 class="welcome">Welcome</h2>
        <div class="windowTail1"></div>
        <div class="windowTail2"></div>
        <div class="windowTail3"></div>
      </div>
      <div class="textContainer2">
        <div class="window2Tails"></div>
        <div class="window2TailStart"></div>
        <h2 class="randomPokemon">Random Pokémon</h2>
        <div class="window2Tail1"></div>
        <div class="window2Tail2"></div>
        <div class="window2Tail3"></div>
        </div>
      </div>
      <svg class="arrow-circle-down bounce" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
		<path d="M1412 897q0-27-18-45l-91-91q-18-18-45-18t-45 18l-189 189v-502q0-26-19-45t-45-19h-128q-26 0-45 19t-19 45v502l-189-189q-19-19-45-19t-45 19l-91 91q-18 18-18 45t18 45l362 362 91 91q18 18 45 18t45-18l91-91 362-362q18-18 18-45zm252-1q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z" fill="#94EF18"></path></svg>
    </div>
    <div class="container top, section">
      <div class="composant">
        <div class="textContainer">
            <div class="window2Tails"></div>
            <div class="window2TailStart"></div>
            <h2 class="randomPokemon">Top 3 Pokemons most used</h2>
            <div class="window2Tail1"></div>
            <div class="window2Tail2"></div>
            <div class="window2Tail3"></div>
            <div class="top1"><img src="../header/images/togekiss1.png" alt=""><div class="top1name"><h2><a href="http://localhost/pokeanalytics/CSS_Template/pokemon.php?pokemon=togekiss" style="color:white;">Togekiss</h2><h2>N°1</h2> <div class="percentage"><h2>33.33%</h2></div> </div>  </div>
            <div class="top2"><img src="../header/images/togekiss1.png" alt=""><div class="top1name"><h2><a href="http://localhost/pokeanalytics/CSS_Template/pokemon.php?pokemon=tyranitar" style="color:white;">Tyranitar</h2><h2>N°2</h2> <div class="percentage"><h2>33.33%</h2></div> </div>  </div>
            <div class="top3"><img src="../header/images/togekiss1.png" alt=""><div class="top1name"><h2><a href="http://localhost/pokeanalytics/CSS_Template/pokemon.php?pokemon=dragapult" style="color:white;">Dragapult</h2><h2>N°3</h2> <div class="percentage"><h2>33.33%</h2></div> </div>  </div>
        </div>
        
     </div> 
    </div>
    <div class="container about, section"  id="sectionAbout">
      <div class="composant">
        <div class="textContainer">
          <img class="logo" src="./images/logo.png" class="footer_logo" alt="">
          <p class="homeText">The N°1 reference for Pokémon statistics</p>
          <div class="windowTails"></div>
          <div class="windowTailStart"></div>
          <h2 class="welcome">Disclaimer</h2>
          <div class="windowTail1"></div>
          <div class="windowTail2"></div>
          <div class="windowTail3"></div>
        </div>
        <div class="textContainer2">
          <div class="window2Tails"></div>
          <div class="window2TailStart"></div>
          <h2 class="randomPokemon">About</h2>
          <div class="window2Tail1"></div>
          <div class="window2Tail2"></div>
          <div class="window2Tail3"></div>
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
      showActiveTooltip: false
    })
  </script>

</body>
</html
