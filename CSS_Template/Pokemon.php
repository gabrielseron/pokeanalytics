<?php

    include '../config.php';
    $pokemon = $_GET["pokemon"];
    $generation = 7;
    $tier = 'ou';
    
    
    $pokeapi = 'https://pokeapi.co/api/v2/pokemon/'.$pokemon.'';
    $pokeapiData = @file_get_contents($pokeapi);
    $pokeapiData = json_decode($pokeapiData);

    $smogonApi = 'https://smogon-usage-stats.herokuapp.com/gen'. $generation . $tier . '/' . $pokemon;
    $smogonData = @file_get_contents($smogonApi);
    $smogonData = json_decode($smogonData);

    $pokeId = $pokeapiData->id;
    if (strlen($pokeId) == 1)
    {
        $pokeId = "00".$pokeId;
    }elseif (strlen($pokeId) == 2)
    {
        $pokeId = "0".$pokeId;
    }

    $pokeIco = 'https://www.pkparaiso.com/imagenes/shuffle/sprites/'.$pokeId.'.png';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo '[' . ucFirst($tier) . ' ' . 'Gen ' . $generation .'] ' . ucfirst($pokemon) ;?></title>
  <link rel="icon" href="<?php echo $pokeIco ;?>" type="image/favicon">
  <meta name="description" content="Description de ma page pour les moteurs de recherche">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css">
  <link rel="stylesheet" href="./styles/main.css">
  <link rel="icon" href="<?php echo $pokeIco ;?>" type="image/favicon">
</head>
<body class="container">
  <div id="nav">
  </div>
  <nav>
      <div class="topFix">
        <div class="rightCubenav">
        <img src="<?php echo $pokeIco;?>" alt="">
        </div>
        <div class="rightCubenavOne"></div>
        <div class="rightCubenavThree"></div>
        <div class="rightCubenavTwo"></div>
        <div class="rightCubenavFour"></div>
        <div class="rightCubenavFive"></div>
        <div class="rightCubenavSix"></div>
        <div class="rightCubenavSeven"></div>
      </div>
   </nav>
        <div id="footer">
          <div class="botnav">
            <div class="cubebotnav"></div>
            <div class="cubebotnavOne"></div>
            <img src="./images/logo.png" alt="logo">
            <div class="cubebotnavTwo"></div>
            <div class="cubebotnavThree"></div>
            <div class="cubebotnavFive"></div>
            <div class="cubebotnavSix"></div>
            <div class="cubebotnavSeven"></div>
          </div>
        </div>

  <div id="fullPage">
    <div class="container pokeNav, section">
      <div id="topnav">
        <nav>
          <div class="cubenav">"</div>
          <div class="cubenavOne"></div>
          <div class="cubenavTwo">
            <img src="<?php echo $pokeapiData->sprites->front_default ;?>" alt="pokeIcon" class="sprite">
          </div>
          <div class="cubenavThree"></div>
          <div class="cubenavFour"></div>
          <div class="cubenavFive"></div>
          <div class="cubenavSix"></div>
          <div class="cubenavSeven"></div>
          <div class="titlemove">
            <ul class="menutitle titleuber">
              <div class="infos"><span class="infosTooltip"><h3>Name</h3></span>
              <li class="titlevalue"><h2><?php echo ucfirst($pokemon) ;?></h2></li>
              </div>
              <div class="infos"><span class="infosTooltip"><h3>Tier</h3></span>
              <li class="titlevalue"><h2>UBER</h2></li>
              </div>
            </ul>
            <ul class="type">
              <?php foreach($pokeapiData->types as $_type): ?>
              <li class="valuetiny"><p><?php echo ucfirst($_type->type->name) ;?></p></li>
              <?php endforeach ;?>
              <li class="valuetiny"><p>N°<?php echo $smogonData->rank ;?></p></li>
              <li class="valuetiny"><p><?php echo $smogonData->usage ;?></p></li>
            </ul>
          </div>
          <div class="talents">
            <div class="ribbonone">
              <ul class="menu open translatone infos">
                <li class="ribbon"><img src="images/Ribbon3.png" class="ribbon" alt=""></li>
                <div class="infos"><span class="infosTooltip"><h3>Most used talent</h3></span>
                <li class="value"><p class="abone">none</p></li>
              </ul>
            </div>
            <div class="ribbontwo">
              <ul class="menu open translatsec">
                <li class="ribbon"><img src="images/Ribbon2.png" class="ribbon" alt=""></li>
                <div class="infos"><span class="infosTooltip"><h3>Second most used talent</h3></span>
                <li class="value"><p class="abtwo">none</p></li>
               </div>
              </ul> 
            </div>
            <div class="ribbonthree">
              <ul class="menu open">
                <li class="ribbon"><img src="images/Ribbon1.png" class="ribbon" alt=""></li>
                <div class="infos"><span class="infosTooltip"><h3>Third most used talent</h3></span>
                <li class="value"><p class="abthree">none</p></li>
                </div>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="composant">
        <div class="textContainer">
        <div class="windowTails"></div>
        <div class="windowTailStart"></div>
        <h2 class="welcome">Base Stats</h2>
        <div class="windowTail1"></div>
        <div class="windowTail2"></div>
        <div class="windowTail3"></div>
        <canvas class="statsChart"></canvas>
      </div>
      <div class="textContainer2">
        <div class="window2Tails"></div>
        <div class="window2TailStart"></div>
        <h2 class="randomPokemon">Moves</h2>
        <div class="window2Tail1"></div>
        <div class="window2Tail2"></div>
        <div class="window2Tail3"></div>
          <canvas class="movesChart"></canvas>
          </div>
        </div>
      </div>
    <div class="container items, section">
    <div class="composant">
        <div class="text2Container">
          <div class="windowTails"></div>
          <div class="windowTailStart"></div>
          <h2 class="welcome">Most held items</h2>
          <div class="windowTail1"></div>
          <div class="windowTail2"></div>
          <div class="windowTail3"></div>
          <canvas class="itemsChart"></canvas>
        </div>
        <div class="text2Container2">
          <div class="window2Tails"></div>
          <div class="window2TailStart"></div>
          <h2 class="randomPokemon">EV Spread</h2>
          <div class="window2Tail1"></div>
          <div class="window2Tail2"></div>
          <div class="window2Tail3"></div>
          <div class="evSpread">
            <div class="evSpread1">Timid 0/0/252/4/252</div>
            <div class="evSpread2">Timid 0/0/252/4/252</div>
            <div class="evSpread3">Timid 0/0/252/4/252</div>
          </div>
      </div>
    </div>
    <footer class="footer" >
      <div class="footerCenter">
        <a href="home.php"><img src="./images/logo.png" class="footer_logo" alt=""></a>
        <span class="footer_contact">
          <a href="#sectionAbout">About</a>
        </span>
      </div>
    </footer>
    <div class="container more, section">

  </div>
  <div class="hidden">
        <div class="navbar">
            <img src="<?php echo $pokeapiData->sprites->front_default ;?>" alt="pokeIcon" class="sprite">
            <h3 class="name">Name : <?php echo ucfirst($pokemon) ;?></h3>
            <h4 class="id">Id : <?php echo $pokeId ;?></h4>

            <?php $typeCount = 0 ;?>
            <?php foreach($pokeapiData->types as $_type): ?>
                <?php $typeCount++ ;?>
                <h4 class="type<?php echo $typeCount ;?>">Type: <?php echo ucfirst($_type->type->name) ;?></h4>

                <br>

            <?php endforeach ;?>

            <h4 class="tier">Tier : <?php echo ucFirst($tier) . ' ' . 'Gen ' . $generation ;?></h4>
            <h4 class="rank">Rank : <?php echo $smogonData->rank ;?></h4>
            <h4 class="percentageOfUse">Percentage of use : <?php echo $smogonData->usage ;?></h4>

            <br>
                <?php $abilityCount = 0 ;?>
            <?php foreach($smogonData->abilities as $key => $_ability): ?>
                <?php $abilityCount++ ;?>
                <h4 class="ability<?php echo $abilityCount ;?>"><?php echo $key . $ability ;?></h4>

            <?php endforeach ;?>
            <br>
        </div>

        <div class="part1">

            <?php foreach($pokeapiData->stats as $_stat): ?>

                <h4 class="<?php echo $_stat->stat->name?>"><?php echo $_stat->base_stat ;?></h4>

            <?php endforeach ;?>

            <img src="<?php echo $pokeIco ;?>" alt="">

            <?php $moveCount = 0 ;?>
            <?php foreach($smogonData->moves as $key => $_move): ?>
                <?php $moveCount++ ;?>
                <h4 class="move<?php echo $moveCount ;?>"><?php echo $key;?></h4>
                <h4 class="move<?php echo $moveCount ;?>Use"><?php echo $_move ;?></h4>

            <?php endforeach ;?>
        </div>

        <div class="part2">

            <?php $itemCount = 0 ;?>
            <?php foreach($smogonData->items as $key => $_item): ?>
                <?php $itemCount++ ;?>
                <h4 class="item<?php echo $itemCount ;?>"><?php echo $key ;?></h4>
                <h4 class="item<?php echo $itemCount ;?>Use"><?php echo $_item ;?></h4>


                <?php
                    $key = preg_replace('~[^\pL\d]+~u', '-', $key);
                    $key = strtolower($key);

                    switch ($key)
                    {
                        case 'buginium-z':
                            $key = $key . '--bag';
                            break;
                        case 'darkinium-z':
                            $key = $key . '--bag';
                            break;
                        case 'dragonium-z':
                            $key = $key . '--bag';
                            break;
                        case 'electrium-z':
                            $key = $key . '--bag';
                            break;
                        case 'fairium-z':
                            $key = $key . '--bag';
                            break;
                        case 'fightinium-z':
                            $key = $key . '--bag';
                            break;
                        case 'firium-z':
                            $key = $key . '--bag';
                            break;
                        case 'flyinium-z':
                            $key = $key . '--bag';
                            break;
                        case 'ghostium-z':
                            $key = $key . '--bag';
                            break;
                        case 'grassium-z':
                            $key = $key . '--bag';
                            break;
                        case 'groundium-z':
                            $key = $key . '--bag';
                            break;
                        case 'icium-z':
                            $key = $key . '--bag';
                            break;
                        case 'normalium-z':
                            $key = $key . '--bag';
                            break;
                        case 'poisonium-z':
                            $key = $key . '--bag';
                            break;
                        case 'psychium-z':
                            $key = $key . '--bag';
                            break;
                        case 'rockium-z':
                            $key = $key . '--bag';
                            break;
                        case 'steelium-z':
                            $key = $key . '--bag';
                            break;
                        case 'waterium-z':
                            $key = $key . '--bag';
                            break;

                        case 'aloraichium-z':
                            $key = $key . '--bag';
                            break;

                        case 'decidium-z':
                            $key = $key . '--bag';
                            break;

                        case 'eevium-z':
                            $key = $key . '--bag';
                            break;

                        case 'incinium-z':
                            $key = $key . '--bag';
                            break;

                        case 'kommonium-z':
                            $key = $key . '--bag';
                            break;

                        case 'lunalium-z':
                            $key = $key . '--bag';
                            break;

                        case 'lycanium-z':
                            $key = $key . '--bag';
                            break;

                        case 'marshadium-z':
                            $key = $key . '--bag';
                            break;

                        case 'mewnium-z':
                            $key = $key . '--bag';
                            break;

                        case 'mimikium-z':
                            $key = $key . '--bag';
                            break;

                        case 'pikanium-z':
                            $key = $key . '--bag';
                            break;

                        case 'pikashunium-z':
                            $key = $key . '--bag';
                            break;

                        case 'primarium-z':
                            $key = $key . '--bag';
                            break;

                        case 'snorlium-z':
                            $key = $key . '--bag';
                            break;

                        case 'solganium-z':
                            $key = $key . '--bag';
                            break;

                        case 'tapunium-z':
                            $key = $key . '--bag';
                            break;

                        case 'ultranecrozium-z':
                            $key = $key . '--bag';
                            break;
                    }
                    $pokeapiObject = 'https://pokeapi.co/api/v2/item/'.$key.'';
                    $pokeapiDataObject = @file_get_contents($pokeapiObject);
                    $pokeapiDataObject = json_decode($pokeapiDataObject);
                    $imgUrl = $pokeapiDataObject->sprites->default;
                ?>

                <?php if ($imgUrl): ?>

                    <img src="<?php echo $imgUrl ;?>" alt="item image" class="item<?php echo $itemCount ;?>Img">

                <?php endif ;?>

            <?php endforeach ;?>

            <?php $spreadCount = 0 ;?>
            <?php foreach($smogonData->spreads as $_nature => $_spreads): ?>

                <?php $array = json_decode(json_encode($_spreads),true); ;?>

                <?php if ($_nature!="Other"): ?>
                    <?php foreach($array as $_spread => $_percent): ?>
                        <?php $spreadCount++ ;?>
                        <h3 class="spread<?php echo $spreadCount;?>Name"><?php echo $_nature ;?></h3>
                        <h3 class="spread<?php echo $spreadCount;?>"><?php echo $_spread ;?></h3>
                        <h3 class="spread<?php echo $spreadCount;?>Percent"><?php echo $_percent ;?></h3>
                    <?php endforeach ;?>
                <?php endif ;?>

            <?php endforeach ;?>

        </div>
    </div>
  <script src="./scripts/pokemon.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="./scripts/graph.js"></script>


  <script>
    new fullpage('#fullPage', {
      autoScrolling: true,
      navigation: true,
      navigationTooltips: ["Stats & Moves", "items & EV", "More"],
      showActiveTooltip: false
    })
  </script>

</body>
</html
