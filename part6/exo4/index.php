
    <!-- Voici l'URL à étudier : -->
<!-- index.php?language=PHP&server=WAMP -->
<!-- Faire une page index.php. -->
<!-- Sur cette page faire 2 boutons : -->

<!-- Le premier "bouton" doit contenir un href qui pointe vers l'URL. Il faut ensuite tester sur cette même page que tous les paramètres existent : -->
<!-- S'ils sont présents, les afficher. -->
<!-- Dans le cas contraire < -->
    
<?php
$language = "";
$server = "";



if (isset($_GET["language"]) && isset($_GET["server"])) {
    $language = $_GET["language"];
    $server = $_GET["server"];
    
}

?>


<!doctype html>
<html lang="fr">

<head>
    <title>Part6exo3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <a type="button" href="index.php?language=PHP&server=WAMP" class="btn btn-primary mt-5">envoi des paramètres</a>
    <a type="button" href="index.php" class="btn btn-danger mt-5 ">Retour index</a>

    <div class="container text-center bg-light m-2">
        <p><?= $language?></p>
        <p><?= $server?></p>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>