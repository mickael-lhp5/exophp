<?php
$target_dir = "assets/img/";
$uploadOk = 1;
$infoFile = "";
$infoSize = "";
$infoType = "";
$infoUpload = "";

if(count(scandir('assets/img'))>0){
    $photos = count(scandir('assets/img')) -2;
}
else{
    $photos = 0;
}

if (isset($_POST["submit"])) {
    // var_dump(basename($_FILES["fileToUpload"]["name"]));

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $imageName = $target_dir . uniqid() . "." . $imageFileType;

    if ($check !== false) {
        $infoFile = "Le fichier est une image- " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $infoFile =  "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }


    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        $infoSize =  "désolé, votre fichier est trop volumineux.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $infoType = "désolé, seulement les dossiers JPG, JPEG, PNG & GIF sont autorisés.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $infoUpload =  "désolé, votre fichier n'a pas été téléchargé.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $imageName)) {
            $infoUpload = "Le fichier " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " a été téléchargé.";
        } else {
            $infoUpload = "désolé, il y a eu une erreur dans le téléchargement de votre fichier.";
        }
    }
}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Exercice PHP TP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/uploadPreview.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center">
                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-danger font-weight-bold" aria-current="page" href="http://localhost:8888/upload_php/#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-danger font-weight-bold" href="http://localhost:8888/upload_php/gallery.php">GALLERY</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
    <div class="container">
        <div class="jumbotron bg-light mt-5 text-center">
            <h1 class="display-5">Module d'enregistrement d'images.</h1>
            <p class="lead">Mise en pratique PHP : Upload d'images.</p>
            <a class="btn btn-danger text-white" href="http://localhost:8888/upload_php/gallery.php" role="button">Gallery <?=$photos?></a>
            <hr class="my-4 bg-danger">
            <div class="container d-flex justify-content-center">
                <!-- Card -->
                <div class="card border-3" id="card">
                    <div class="card-body">
                        <h2 class="card title bg-success text-light text-center mt-3">Veuillez choisir une image</h2>
                        <!-- Card content -->
                        <div class="container d-flex justify-content-center">
                            <form method="post" action="index.php" enctype="multipart/form-data">


                                <label for="fileUpload" class="d-flex align-items-center mt-3"></label>
                                <input class="" type="file" name="fileToUpload" id="fileToUpload"><br>
                                <button type="submit" name="submit" class="btn btn-danger mt-3 text-light" id="button"><i class="fa fa-download"></i> upload</button>
                            </form>
                        </div>
                        <div class="container">

                            <p id="info"><?php echo $infoFile ?></p>
                            <p id="info"><?php echo $infoSize ?></p>
                            <p id="info"><?php echo $infoType ?></p>
                            <p id="info"><?php echo $infoUpload ?></p>

                        </div>
                        <div class="justify-content-center">
                            <img id="imgPreview" <?= isset($_FILES["fileToUpload"]) ?  "src=\"" . $imageName . "\"" : "" ?>>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>
    
    <!-- Footer -->
    <footer class="z-depth-2 font-small" id="footer">

        <!-- Copyright -->
        <div class="footer-copyright text-center text-success py-3">© La Manu PROMO DWWM5 LE HAVRE 2020 :
            <a href="" class="text-danger"> Mickaël François & Flavie Froment</a>
        </div>
        <!-- Copyright -->

    </footer>

    <!-- Optional JavaScript -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/uploadPreview.js"></script>
    <script src="assets/js/snow.js"></script>
</body>

</html>