<?php
// Partie 8 exercice 4 PHP 
if (isset($_COOKIE['user'])) {
    $user = $_COOKIE['user'];
}

if (isset($_COOKIE['mdp'])) {
    $password = $_COOKIE['mdp'];
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Exo4</title>
</head>

<body class="h-screen flex items-center justify-center bg-gray-900 max-w-screen-md mx-auto">
    <div class="mx-5">
        <div class="flex justify-center text-white pb-2">
            <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
        </div>

        <h1 class="text-4xl text-gray-200">Session login (vive les cookies) !</h1>

        <!--  -->
        <p class="py-5 text-gray-200 text-lg">
            Bienvenue <span class="underline"><?php echo $user ?></span>, votre mot de passe super secret est <span class="underline"><?php echo $password ?></span> !
        </p>

        <div class="flex">
            <a href="index.php" class="text-lg text-red-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                </svg>
            </a>
           
            <a href="reset.php" class="text-lg text-pink-400 underline ml-3">Réinitialiser</a>
        </div>
    </div>

</body>

</html>