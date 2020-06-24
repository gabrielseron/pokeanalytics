<?php

    include './config.php';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo '[' . ucFirst($tier) . ' ' . 'Gen ' . $generation .'] ' . ucfirst($pokemon) ;?></title>
    <link rel="icon" href="<?php echo $pokeIco ;?>" type="image/favicon">
    <link rel="stylesheet" href="./CSS_Template/styles/home.css">
</head>
<body>
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
                <h4 class="abilityUse<?php echo $abilityCount ;?>">Use : <?php echo $_ability ;?></h4>
                <h4 class="ability<?php echo $abilityCount ;?>">Ability : <?php echo $key ;?></h4>

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
</body>
</html>