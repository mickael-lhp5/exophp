<?php

$civilite = "";
$lastname = "";
$firstname = "";


if (isset($_GET["civilite"]) && isset($_GET["lastname"]) && isset($_GET["firstname"])) {
    $civilite = $_GET["civilite"];
    $lastname = $_GET["lastname"];
    $firstname = $_GET["firstname"];
} else {

    $civilite = "Quel est ta civilité ?";
    $lastname = "Quel est ton nom de famille";
    $firstname = "quel est ton prénom";
}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>part7exo5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center bg-light m-2">
            <form name="inscription" method="get" action="index.php">
                <select name="civilite">
                    <option value="null" disabled selected>Veuillez choisir votre civilité</option>
                    <option value="madame">Madame</option>
                    <option value="monsieur">Monsieur</option>
                </select>
                <label for="firstname"> Entrez votre nom : </label>
                <input type="text" name="firstname" id="firstname" />
                <label for="lastname">Entrez votre prénom :</label>
                <input type="text" name="lastname" id="lastname" >
                <button type="submit">envoyer</button>
            </form>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>