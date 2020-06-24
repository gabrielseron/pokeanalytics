<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Poké Pro Strat</title>
  <meta name="description" content="Description de ma page pour les moteurs de recherche">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
  <link rel="stylesheet" href="./styles/main.css">
</head>
<body class="container">
  <div class="topfix">
    <div class="rightCubenav">
        <img src="./images/togekiss2.png" alt="togekiss">
    </div>
    <div class="rightCubenavOne"></div>
    <div class="rightCubenavTwo"></div>
    <div class="rightCubenavThree"></div>
    <div class="rightCubenavFour"></div>
    <div class="rightCubenavFive"></div>
    <div class="rightCubenavSix"></div>
    <div class="rightCubenavSeven"></div>
    </div>
</div>
<div id="fullPage">
  <div class="container lou, section">
    <div id="nav">
      <nav>
        <div class="cubenav"></div>
        <div class="cubenavOne"></div>
        <div class="cubenavTwo">
          <img src="./images/togekiss1.png" alt="togekiss">
        </div>
        <div class="cubenavThree"></div>
        <div class="cubenavFour"></div>
        <div class="cubenavFive"></div>
        <div class="cubenavSix"></div>
        <div class="cubenavSeven"></div>
        <div class="titlemove">
          <ul class="menutitle titleuber">
            <li class="titlevalue"><h2>Togekiss</h2></li>
            <li class="titlevalue"><h2>UBER</h2></li>
          </ul>
          <ul class="type">
            <li class="valuetiny"><p>Fairy</p></li>
            <li class="valuetiny tinyone"><p>Flying</p></li>
            <li class="valuetiny"><p>N°1</p></li>
            <li class="valuetiny"><p>41.22%</p></li>
          </ul>
        </div>
        <div class="move">
          <div class="ribbonone">
            <ul class="menu open translatone">
              <li class="ribbon"><img src="images/Ribbon3.png" class="ribbon" alt=""></li>
              <li class="value"><p>90%</p></li>
            </ul>
          </div>
          <div class="ribbontwo">
            <ul class="menu open translatsec">
              <li class="ribbon"><img src="images/Ribbon2.png" class="ribbon" alt=""></li>
              <li class="value"><p>40%</p></li>
            </ul>
          </div>
          <div class="ribbonthree">
            <ul class="menu open">
              <li class="ribbon"><img src="images/Ribbon1.png" class="ribbon" alt=""></li>
              <li class="value"><p>10%</p></li>
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <div class="baseStats">
          <div class="baseStatsTitle">
            <h2>Base stats</h2>
            <div class="cubeStat1"></div>
            <div class="cubeStat2"></div>
            <div class="cubeStat3"></div>
          </div>
          <canvas class="statsChart"></canvas>
        </div>
        <div class="movesChoices">
          <div class="movesTitle">
            <h2>Moves</h2>
            <div class="cubeMove1"></div>
            <div class="cubeMove2"></div>
            <div class="cubeMove3"></div>
          </div>
          <canvas class="movesChart"></canvas>
        </div>
      </main>
    </div>
  </div>
  <div class="container yacine, section">
    <div class="botnav">  
      <div class="cubebotnav"></div>
      <div class="cubebotnavOne"></div>
      <div class="cubebotnavTwo">
        <img src="./images/togekiss1.png" alt="togekiss">
      </div>
      <div class="cubebotnavThree"></div>
      <div class="cubebotnavFive"></div>
      <div class="cubebotnavSix"></div>
      <div class="cubebotnavSeven"></div>
    </div>
  </div>
  <div class="container affiches, section">
  
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="./scripts/graph.js"></script>

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
