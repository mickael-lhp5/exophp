<?php

if (isset($_POST["userName"]) && isset($_POST["password"])) {

    $userName = $_POST["userName"];
    $password = $_POST["password"];

    setcookie('userName', $userName, time() + 365 * 24 * 3600, null, null, false, true); // On écrit un cookie 
    setcookie('password', $password, time() + 365 * 24 * 3600, null, null, false, true); // On écrit un autre cookie...

}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>part8exo3etexo4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center bg-light m-2">
            <form name="inscription" method="post" action="index.php">

                <label for="userName"> Entrez votre nom d'utilsateur : </label>
                <input type="text" name="userName" id="userName" />
                <label for="password">Entrez votre mot de passe :</label>
                <input type="password" name="password" id="password">
                <button type="submit" class="btn btn-warning">modifier/enregistrer</button>
            </form>
            <a href="user.php" class="btn btn-info">voir mes infos</a>

        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>