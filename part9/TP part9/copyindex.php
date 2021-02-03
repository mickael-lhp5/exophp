<!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.  
En fonction des choix, afficher un calendrier comme celui-ci : 

http://icalendrier.fr/media/imprimer/2017/mensuel/calendrier-2017-mensuel-bigthumb.png -->
<?php
$monthsArray = [
    1 => 'Janvier',
    2 => 'Fevrier',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Aout',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
];


$daysOfWeek = [
    'lundi',
    'mardi',
    'mercredi',
    'jeudi',
    'vendredi',
    'samedi',
    'dimanche'
];

//année de départ du calendrier
$startIntYears = 1998;
//année de fin du calendrier
$endIntYears = 2500;

// il faut recuperer la date du jour
// il faut determiner le 1er jour du mois ex: le 1er jour du mois tombe un vendredi
$firstDayOfMonth = strftime("%u", strtotime("01/01/2021")); //attention annotation anglaise (mois jour année)

//trouver le moyen d'injecter les mois et les années à la place du 02 et du 2021 ci dessus (année et mois)
//nombre de jour dans le mois
if (isset($_GET['showCalendar'])) {
   
    $getMonth = $_GET['selectMonth'];
    $getYear = $_GET['selectYear'];
    // il faut calculer le nombre de jour dans le mois
    $nbrDaysinaMonth = cal_days_in_month(CAL_GREGORIAN, $getMonth, $getYear);
    $firstDayOfMonth = strftime("%u", strtotime($getMonth . "/01/" . $getYear));
} else {

    $nbrDaysinaMonth = cal_days_in_month(CAL_GREGORIAN, date('m'),date('Y'));
    $firstDayOfMonth = strftime("%u", time());
}

// il faut calculer le nombre de case du calendrier ex: pour janvier 2021 il y aura 42 cases

?>


<!doctype html>
<html lang="fr">

<head>
    <title>TP Calendrier</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary mb-3 justify-content-center ml-5 mr-5 mt-3">
        <a href="index.php" class="navbar-brand">Mon calendrier</a>
    </nav>

    <div class="container justify-content-center">
        <div class="formulaire">
            <form action="index.php" method="GET">
                <select class="form-control mb-3" name="selectMonth">
                    <option selected>Choisissez votre mois</option>

                    <?php foreach ($monthsArray as $key => $value) { ?>
                        <option value="<?= $key ?>"><?= $value ?></option>
                    <?php } ?>
                </select>

                <select class="form-control mb-3" name="selectYear">
                    <option selected>choisissez votre année</option>
                    <?php for ($startIntYears; $startIntYears <= $endIntYears; $startIntYears++) { ?>

                        <option><?= $startIntYears ?></option>
                    <?php } ?>

                </select>
                <button type="submit" class="btn btn-warning justify-content-center mb-3" name="showCalendar">afficher le calendrier</button>
            </form>

            <table class="table table-hover table-dark mt-5">
                <thead>
                    <tr>
                        <?php foreach ($daysOfWeek as $value) {?>

                            <th><?= $value ?></th>

                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dDay = 1;

                    for ($i = 1; $i <= 42; $i++) {
                        if ($i % 7 == 1) {
                    ?> <tr>
                            <?php
                        }

                        if ($i >= $firstDayOfMonth && $dDay <= $nbrDaysinaMonth) { ?>
                                <td class="recupJs"><?= $dDay++ ?></td>
                            <?php
                        } else {
                            ?>
                                <td class=""></td>
                            <?php }
                        if ($i % 7 == 0) {

                            ?>
                            </tr>
                    <?php

                        }
                    } ?>

                </tbody>
            </table>
        </div>

    </div>


    <!-Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="script.js"></script>

    </body>

</html>