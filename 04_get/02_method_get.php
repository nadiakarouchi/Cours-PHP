<?php require_once '../inc/functions.php';  // appel du fichier de fonction 
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - 03 conditions</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header class="container-fluid" style="background-color: lightcyan;">
        <h1 class="text-center alert alert-danger">Cours PHP - La méthode GET</h1>
        <p class="lead text-center mt-4">$_GET représente les données qui transitent par l'URL.</p>
    </header>
    <!-- fin container-fluid  -->

    <div class="container bg-light">
        <section class="row ">
            <div class="col-sm-12 col-md-6 border border-danger">
                <h2 class="alert alert-success "> $_GET[]</h2>
                <!-- //pour afficher tous le tableazu avec ma variable debug -->
                <?php
                debug($_GET)

                ?>
                <!-- sinon  -->
                <!-- <?php
                        echo $_GET['article'];
                        echo $_GET['coleur'];
                        echo $_GET['prix'];

                        ?> -->
            </div>
            <!-- fin col  -->
            <div class="card col-sm-12 col-md-6" style="width: 18rem;">
                <img src="../img/nadia.png" class="card-img-top" alt="img nadia">
                <div class="card-body">
                    <h5 class="card-title"><?php
                                            echo $_GET['article'];
                                            ?></h5>
                    <p class="card-text">pull noir avec tous les tailles.</p>
                    <a href="02_method_get.php?article=pull&coleur=noir&prix=66" class="btn btn-primary">pull</a>
                </div>
            </div>
            <!-- fin col  -->
            <hr>
            <div class="col-md-12">
                <h2>if</h2>
                <!-- <?php
                debug($_GET);
                if (isset($_GET['article']) && isset($_GET['coleur']) && isset($_GET['prix'])) {
                    echo $_GET['article'];
                } else {
                    echo "<p class=\"alert alert-danger\">ce produit n'existe pas</p>";
                }
                ?> -->
                <?php 
				// debug($_GET); // à enlever en production
				// if isset : est-il établi que nous avons toutes les informations dans $_GET ? 
				if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { // si oui si c'est vrai 
					echo "<h2>Votre produit : " .$_GET['article']. "</h2>";

					echo "<div class=\"border border-primary w-50 p-4\">";
					echo "<p>Produit : " .$_GET['article']. " *** Couleur : " .$_GET['couleur']. "</p>";// on affiche les valeurs
					echo "<p class=\"bg-success\">Prix : " .$_GET['prix']. " € </p>";
					echo "</div>";
				} else {
					echo "<h2>Fiche produit</h2>";
					echo "<p class=\"alert alert-danger w-50\">Ce produit n'existe pas</p>";// sinon on affiche un message "ce produit n'existe pas"
				}
			?>
            </div>


        </section>
        <!-- fin row  -->
    </div>
    <!-- fin container  -->
    <!-- on appel la date de footer  -->
    <?php require '../inc/footer.inc.php'; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>