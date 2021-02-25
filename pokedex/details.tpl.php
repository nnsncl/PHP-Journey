<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details pokemon</title>
</head>
<body>
    <?php echo $data->nom; ?>
    <img src='<?php echo $data->image ?>' />
    <p>
        Informations:<br>
        nom : <?php echo $data->nom ?><br>
        taille : <?php echo $data->taille ?><br>
        poids : <?php echo $data->poids ?><br>
        catégorie : <?php echo $data->catégorie ?><br>
        pv : <?php echo $data->pv ?><br>
        attaque : <?php echo $data->attaque ?><br>
        defense : <?php echo $data->defense ?><br>
        attaque_spe : <?php echo $data->attaque_spe ?><br>
        defense_spe : <?php echo $data->defense_spe ?><br>
        vitesse : <?php echo $data->vitesse ?>
    </p>
    <?php echo isset($evolution) ? $evolution : null ?>
    <a href="./pokemon.php" >Retour à la liste</a>
</body>
</html>