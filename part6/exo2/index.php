<?php
// $_GET est une super globale php qui contiendra tout les parametres url sous forme de tableau du nom: $_GET
var_dump($_GET); //je fais un var_dump pour afficher la valeur du tableau.

//"isset(variable)" est une fonction permetant de savoir si la variable existe il retournera true ou false
var_dump(isset($_GET["lastname"])); //je fais un var_dump pour afficher le résultat de (isset($_GET["lastname"])) car je recheche si lastname existe dans le tableau $_GET



// application sur l'exercice

$lastname = "";
$firstname = "";

// je fais une condition pour savoir si la variable lastname existe dans $_GET, si oui je fais un echo.
if (isset($_GET["lastname"]) && isset($_GET["firstname"])) {
    $lastname = $_GET["lastname"];
    $firstname = $_GET["firstname"];
}
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Part6exo2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
    <a type="button" href="index.php?lastname=Tutor&firstname=Janine&fruit=Banane" class="btn btn-primary mt-5">Envoie des parametres</a>
    <a type="button" href="index.php" class="btn btn-danger mt-5 ">Retour index</a>
    </div>
    <div class="container text-center bg-light m-2">
        <p><?= $lastname ?></p>
        <p><?= $firstname ?></p>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>