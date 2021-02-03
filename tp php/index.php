<?php
$target_dir = "assets/img/";
$uploadOk = 1;
$infoFile = "";
$infoSize = "";
$infoType = "";
$infoUpload ="";


if (isset($_POST["submit"])) {
    var_dump(basename($_FILES["fileToUpload"]["name"]));

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
    <title>tpphp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/uploadPreview.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center bg-light m-2 ">

            <form class="col-12" method="post" action="index.php" enctype="multipart/form-data">
            <h2 >Veuillez choisir une image</h2>
                <label for="fileUpload"></label>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <button type="submit" name="submit" class="btn btn-secondary mt-3"><i class="fa fa-download"></i> upload</button>
            </form>
          
            <p><?php echo $infoFile?></p>
            <p><?php echo $infoSize?></p>
            <p><?php echo $infoType?></p>
            <p><?php echo $infoUpload?></p>

<!-- quand l'utilisateur a envoyé une image le $_FILES "fileToUpLoad" existe, donc on change la source de l'image  pour afficher celle que l'utilisateur vient d'envoyer via source..$imageName qui contient toutes les infos de l'image -->

            <img id="imgPreview" <?= isset($_FILES["fileToUpload"]) ?  "src=\"" . $imageName . "\"" : ""?>>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/uploadPreview.js"></script>
</body>

</html>