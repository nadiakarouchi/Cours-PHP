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

                <ul>
                    <li>Il s'agit d'une superglobale et comme toutes les superglobales, c'est un tableau.</li>
                    <li>Superglobale signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions.</li>
                    <li>Les informations transitent selon un syntaxe précise dans l'URL ex : <br> <code class="alert-warning fs-4">mapage.php?indice1=valeur1&indiceN=valeurN</code></li>
                    <li>Et enfin, quand on récupère les données, $_GET[] se remplit selon le schéma suivant : <br><code class="alert-warning fs-4">$_GET = array ( <br>
                            'indice1' => 'valeur1', <br>
                            'indiceN' => 'valeurN'<br>
                            ); <br>
                        </code></li>
                    <li>pour voir le tableau on fera d'abbord un var-dump($_GET)</li>
                </ul>
            </div><!-- fin col -->
            <div class="col-md-6 col-sm-12 border border-danger">
                <h2>exemples</h2>
                <p> <a href="02_method_get.php?article=jean&coleur=bleu&prix=50" class="alert-danger p-2">un jean bleu</a></p>
                <p> <a href="02_method_get.php?article=robe&coleur=rose&prix=112" class="alert-danger p-2">Une robe rose</a></p>
                <p> <a href="02_method_get.php?article=pull&coleur=noir&prix=66" class="alert-danger p-2">Un pull noir</a></p>
                <p> <a href="02_method_get.php?article=monteaux&coleur=beige&prix=250" class="alert-danger p-2">un monteaux beige</a></p>

                <!-- avec des card  -->
                <!-- <div class="card" style="width: 18rem;">
                    <img src="../img/nadia.png" class="card-img-top" alt="img nadia">
                    <div class="card-body">
                        <h5 class="card-title">pull noir</h5>
                        <p class="card-text">pull noir avec tous les tailles.</p>
                        <a href="02_method_get.php?article=pull&coleur=noir&prix=66" class="btn btn-primary">pull</a>
                    </div>
                </div> -->

            </div>
            <!-- fin col  -->

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