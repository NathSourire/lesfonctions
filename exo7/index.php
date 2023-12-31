<?php
$age = 17.5;
$gender = 'homme';
function exo7($age, $gender)
{
    $message= '';
    if ($age < 0 || $age > 100) {
        $message .= 'Entrez un age valide';
    } elseif ($age >= 18) {
        $message .= ' Vous êtes majeur ';
    } else {
        $message .= ' Vous êtes mineur '; # code...
    }
    if ($gender == 'homme') {
        $message .= ' Vous êtes un homme ';
    } else {
        $message .= ' Vous êtes une femme ';
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
    <title>PHP exo 7</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 7</h1>
            <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :<br>
                Homme<br>
                Femme<br>
                La fonction doit renvoyer en fonction des paramètres :<br>
                Vous êtes un homme et vous êtes majeur<br>
                Vous êtes un homme et vous êtes mineur<br>
                Vous êtes une femme et vous êtes majeure<br>
                Vous êtes une femme et vous êtes mineure<br>
                Gérer tous les cas.</p>
        </div>
    </header>
    <main class="container- fluid">
        <div class="row">
            <div class="results ">
                <?php
                echo exo7($age, $gender);
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