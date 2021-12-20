<?php
define("validator", "https://validator.w3.org/");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Cours PHP - 02/Variables - les tableaux</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid p-4 alert alert-primary">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - les tableaux</h1>
            <?php echo "validez votre HTML CSS sur le site <a href=\" " . validator . " \" target=\"_blank\">Validator</a>" ?>
            <?php echo "<p class=\"alert alert-warning\">Exemple de PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
            <p class="lead text-center mt-4">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes d'un des types de base que vous venez de voir. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1). D'où l'expression de" tableau indicé ".</p>
            </div>
        </div>
    </header>
    <!-- =================================== -->
    <!-- conteneur principal -->
    <!-- =================================== -->
    <div class="container bg-white">
        <section class="row">
            <div class="col-md-12 border">
                <h2 class="alert alert-danger">1- Les tableaux</h2>
                <p>Un tableau appelé array en anglais est une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type. Elles possèdent un indice dont la numérotation commence à 0.</p>
               
            </secion>
            <!-- fin row  -->

    </div>
    <!-- fin div container -->

    <!-- on appel la date de footer  -->
    <?php require '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>