<?php

    include './config.php';
    include_once './array.php';
    $pokemon = 'pikachu';
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
</head>
<body>
    <div class="navbar">
    
        <img src="<?php echo $pokeapiData->sprites->front_default ;?>" alt="pokeIcon">
        <h3>Name : <?php echo ucfirst($pokemon) ;?></h3>
        <h4>Id : <?php echo $pokeId ;?></h4>

        <?php foreach($pokeapiData->types as $_type): ?>

            <h4>Type: <?php echo ucfirst($_type->type->name) ;?></h4>

            <br>

        <?php endforeach ;?>

        <h4>Tier : <?php echo ucFirst($tier) . ' ' . 'Gen ' . $generation ;?></h4>
        <h4>Rank : <?php echo $smogonData->rank ;?></h4>
        <h4>Percentage of use : <?php echo $smogonData->usage ;?></h4>

        <br>

        <?php foreach($smogonData->abilities as $key => $_ability): ?>

            <h4>Use : <?php echo $_ability ;?></h4>
            <h4>Ability : <?php echo $key ;?></h4>

        <?php endforeach ;?>
        <br>
    </div>

    <div class="part1">
    
        <?php foreach($pokeapiData->stats as $_stat): ?>

            <h4><?php echo ucfirst($_stat->stat->name) . ' ' . $_stat->base_stat ;?></h4>

        <?php endforeach ;?>
        <img src="<?php echo $pokeIco ;?>" alt="">

        <?php foreach($smogonData->moves as $key => $_move): ?>

            <h4><?php echo $key . ' : ' . $_move ;?></h4>

        <?php endforeach ;?>
    </div>

    <div class="part2">
    
        <?php foreach($smogonData->items as $key => $_item): ?>

            <h4><?php echo $key . ' : '.  $_item ;?></h4>


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

                <img src="<?php echo $imgUrl ;?>" alt="item image">

            <?php endif ;?>

        <?php endforeach ;?>


        <?php foreach($smogonData->spreads as $_nature => $_spreads): ?>

            <?php $array = json_decode(json_encode($_spreads),true); ;?>

            <?php if ($_nature!="Other"): ?>
                <?php foreach($array as $_spread => $_percent): ?>
                    <h3><?php echo $_nature ;?></h3>
                    <h3><?php echo $_spread ;?></h3>
                    <h3><?php echo $_percent ;?></h3>
                <?php endforeach ;?>
            <?php endif ;?>

        <?php endforeach ;?>

    </div>

</body>
</html>