<?php

    include './config.php';

    $pokemon = 'pikachu';
    $generation = 7;
    $tier = 'ubers';
    
    
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

        <?php endforeach ;?>

        <h4>Tier : <?php echo ucFirst($tier) . ' ' . 'Gen ' . $generation ;?></h4>
        <h4>Rank : <?php echo $smogonData->rank ;?></h4>
        <h4>Percentage of use : <?php echo $smogonData->usage ;?></h4>

        <?php foreach($smogonData->abilities as $key => $_ability): ?>

            <h4>Ability : <?php echo $_ability ;?></h4>
            <h4>Use : <?php echo $key ;?></h4>

        <?php endforeach ;?>

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
            ?>
            <?php
                $pokeapiObject = 'https://pokeapi.co/api/v2/item/'.$key.'';
                $pokeapiDataObject = @file_get_contents($pokeapiObject);
                $pokeapiDataObject = json_decode($pokeapiDataObject);
                $imgUrl = $pokeapiDataObject->sprites->default;
            ?>

            <?php if ($imgUrl): ?>

                <img src="<?php echo $imgUrl ;?>" alt="item image">

            <?php endif ;?>

        <?php endforeach ;?>
    
    </div>

</body>
</html>