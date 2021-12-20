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

    <title>Cours PHP - exo02 array</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid p-4 alert alert-primary">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - exo 02 array</h1>
            <?php echo "validez votre HTML CSS sur le site <a href=\" " . validator . " \" target=\"_blank\">Validator</a>" ?>
            <?php echo "<p class=\"alert alert-warning\">Exemple de PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
     
            </div>
        </div>
    </header>
    <!-- =================================== -->
    <!-- conteneur principal -->
    <!-- =================================== -->
    <div class="container bg-white">
        <section class="row">
            <div class="col-md-12 border">
            $tableau1 = array('Dalio', 'Gabin', 'Arletty', 'Fernandel', 'Pauline Carton');
            </div>
          
               
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