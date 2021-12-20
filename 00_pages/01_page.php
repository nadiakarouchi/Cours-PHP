<!DOCTYPE html>
<?php
//déclaration d'une variable en PHP
$variable1 = "cours PHP 7"
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- MES STYLES -->
    <link rel="stylesheet" href="../css/style.css">
    <?php echo "<title>Une page PHP</title>"; ?>
</head>
<body>
    <?php
    echo "<h1> Suresnes 2021 - $variable1 </h1>";
    ?>
    <hr>
    <p>utilisation de variable en PHP de passage PHP dans mon fichier HTML ; on travaille aussi avec : <br>
    <?php
    $variable2 = "MySQL";
    echo $variable2;
    echo "</p><hr>";
    //le caractère de concaténation en PHP est le "."
    echo "<p> la variable est de type : ". gettype($variable2) .".</p>";

    $variable2 = "bonjour tous le monde! <br>";
    echo "<p> $variable2 </p>";
    ?>
    <hr>
    <?= //passage PHP plus court
    "<blockquote> $variable2, $variable2 on entend le : <br> $variable2 </blockquote>"; //qui dispense d'écrire "echo"
    ?>
    <hr>
    <h2>print_r</h2>
    <h3>La liste des variables "globales" </h3>
    <p>print_r() afiche toutes les variables à notre disposition sous forme d'un tableau, un "array"</p>
    <?php print_r($GLOBALS); ?>
    <hr>
    <p>le contenu de la variable $_COOKIE</p>
    <?php print_r($_COOKIE); ?>
    <hr>
    <p>le contenu de la variable $_ENV</p>
    <?php print_r($_ENV); ?>
    <hr>
    <p>le contenu de la variable $_SERVER</p>
    <?php print_r($_SERVER); ?>
    <hr>
    <p>le contenu de la variable $_SERVER['SERVER_SOFTWARE'] , nous donne des infos sur le serveur</p>
    <?php print_r($_SERVER['SERVER_SOFTWARE']); ?>
</p>
     <!-- Optional JavaScript; choose one of the two! -->
<!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>