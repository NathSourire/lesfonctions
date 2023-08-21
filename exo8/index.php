<?php
$numb1 = 7;
$numb2 = 11;
$numb3 = 16;


function exo8 ($numb1,$numb2, $numb3){
    return  ($numb1 + $numb2 + $numb3);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 8</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 8</h1>
            <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
                Tous les paramètres doivent avoir une valeur par défaut.</p>
        </div>
    </header>
    <main class="container- fluid">
    <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
                <?php
                echo 'La somme est ' .exo8($numb1,$numb2, $numb3);
                ?>
                </p>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>