<?php
$numb1 = rand(0,5);
$numb2 = rand(0,5);
function exo4($numb1, $numb2){
    $message = '';
    if ($numb1 > $numb2){
        $message = $numb1. ' est plus grand que ' .$numb2;
    }   
    elseif ($numb1 < $numb2){
        $message =  $numb1. ' est plus petit que ' .$numb2;  # code...
    }
    else {
        $message =  $numb1. ' est égale ' .$numb2;
    }
    return $message;
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
    <title>PHP exo 4</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 4</h1>
            <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br>
                Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième <br>
                Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième <br>
                Les deux nombres sont identiques si les deux nombres sont égaux</p>
        </div>
    </header>
    <main class="container- fluid">
    <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
                <p>
                    <?php
                    echo exo4($numb1,$numb2) ;
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