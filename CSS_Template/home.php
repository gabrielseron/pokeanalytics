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
        <form autocomplete="off" action="./Pokemon.php">
          <div class="autocomplete">
            <input id="myInput" type="text" name="pokemon" placeholder="Search" required>
            <div class="tails"></div>
            <div class="tail1"></div>
            <div class="tail2"></div>
            <div class="tail3"></div>
          </div>
          <button class="button" type="submit"><span>Go!</span></button>
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
      <br>
        <img class="logo" src="./images/logo.png" class="footer_logo" alt="">
        <p class="homeText">The N°1 reference for Pokémon statistics.</p>
        <p class="welcomeText">To use our tools, simply search for a Pokemon then scroll
          <br> down to show more infos. If a Pokemon does not show any
          <br> infos, it means it is not used in thee UBER competitve tier.
          <br> Our website uses the Smogon API so Pokemon from the 8th geeneration will not show accurate infos as they are not yet implemented in competitions.
          <br>
        <br>
        Have fun building your team!
        </p>
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
        <h2 class="randomPokemon">Pokemon of the week</h2>
        <div class="window2Tail1"></div>
        <div class="window2Tail2"></div>
        <div class="window2Tail3"></div>
        <a href="pokemon.php?pokemon=dialga"><div class="topWeek">
        <img src="images/483.png" alt="Dialga" style="width:209px;">
        <h2 style="color:white;">Dialga</h2>
        </a>
        <div class="typeCase"><p style="transform:skew(-30deg);margin-top:2px;">Steel</p></div>
        <div class="typeCase2"><p style="transform:skew(-30deg);margin-top:2px;">Dragon</p></div>
        <h2 style="color:white;margin-top:-40px;">N°40 - UBER</h2>
        </div>
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
            <h2 class="randomPokemon">Top 3 most used Pokemons</h2>
            <div class="window2Tail1"></div>
            <div class="window2Tail2"></div>
            <div class="window2Tail3"></div>
            <div class="top1">
            <img src="./images/togekiss.png" alt="Togekiss">
            <div class="top1name"><a href="pokemon.php?pokemon=togekiss" style="color:white;"><h2>Togekiss</h2></a><h2>N°1</h2>
            <div class="percentage">41.22% Pick rate</div>
            </div>
            </div>
            <div class="top2">
            <img src="./images/tyranitar.png" alt="Tyranitar">
            <div class="top1name"><a href="pokemon.php?pokemon=tyranitar" style="color:white;"><h2>Tyranitar</h2></a><h2>N°2</h2>
            <div class="percentage">35.84% Pick rate</div>
            </div>
            </div>
            <div class="top3">
            <img src="./images/dusclops.png" alt="Dragapult">
            <div class="top1name"><a href="pokemon.php?pokemon=dusclops" style="color:white;"><h2>Dusclops</h2></a><h2>N°3</h2>
            <div class="percentage">35.57% Pick rate</div>
            </div>
            </div>
        </div>

     </div>
    </div>
    <div class="container about, section"  id="sectionAbout">
      <div class="composant">
        <div class="textContainer">
          <div class="window2Tails"></div>
          <div class="window2TailStart"></div>
          <h2 class="randomPokemon">Disclaimer</h2>
          <div class="window2Tail1"></div>
          <div class="window2Tail2"></div>
          <div class="window2Tail3"></div>
          <p class="textAbout">The Pokémons from the 8th generation have missing informations, that's because some of the APIs used are not totally up ta date yet.
            <br><br><br><br>
            This website has been done in an educational context, for the “Grand Ecole” course from the HETIC school. We didn’t ask for the permission to use the contents and data from Nintendo. Thus, this website will not be exploited in any commercial way.
            <br><br>
            POKEMON, characters, names, and related indicia are trademarks owned by Nintendo Inc. and The Pokémon Company Internationals</p>
        </div>
        <div class="textContainer2">
          <div class="window2Tails"></div>
          <div class="window2TailStart"></div>
          <h2 class="randomPokemon">About</h2>
          <div class="window2Tail1"></div>
          <div class="window2Tail2"></div>
          <div class="window2Tail3"></div>
          <p class="textAbout">This website uses the data from pokeApi.co and smogon-usage-stats.herokuapp.com.
            <br><br>
            It has been designed and developped by a team of french college students.
            <br><br><br><br>
            Contact : <br>
            <span class="tabulation"></span> back-end developer :<span class="tabulation3"></span>gabriel.seron@hetic.net<br>
            <span class="tabulation"></span> developer : <span class="tabulation4"></span>edouard.eisenfisz@hetic.net<br>
            <span class="tabulation"></span> developer : <span class="tabulation4"></span>valentin.sejourne@hetic.net<br>
            <span class="tabulation"></span> developer-designer : <span class="tabulation3"></span>henri.paulus@hetic.net<br>
            <span class="tabulation"></span> designer :<span class="tabulation2"></span>florian.rouvier@hetic.net<br>
            <span class="tabulation"></span> designer-developer : <span class="tabulation3"></span>killian.flohic@hetic.net<br>
          </p>
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
      navigationTooltips: ["Home", "Top 3", "About"],
      showActiveTooltip: false
    })
  </script>

</body>
</html
