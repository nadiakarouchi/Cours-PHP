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

    <title>exo 05 methode get</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header class="container-fluid" style="background-color: lightcyan;">
        <h1 class="text-center alert alert-danger">exo 05 - La méthode GET</h1>

    </header>
    <!-- fin container-fluid  -->

    <div class="container bg-light">
        <section class="row ">
            <div class="col-sm-12 bg-warning">
                <ol>
                    <li>Affichez dans cette page un titre 'mon compte : mon nom'</li>
                    <li>Ajoutez un lien 'modifier mon compte' : ce lien renvoie dans l'url à cette page</li>
                    <li>L'"action" demandée sera "modification" (indice et valeur) quand on clique sur ce lien</li>
                    <li>Si vous avez reçu cette modifiaction par l'url, affichez le texte suivant : 'Vous souhaitez modifier votre compte'</li>
                </ol>
            </div>
            <!-- fin col  -->
            <br><br><br>
            <hr>
            <div class="col-md-6 border border-danger">
                <h2 class="text-center bg-">bienvenue nadia karouchi sur votre compte Colombbus</h2>
                <a href="05_exo_get.php?action=modification" type="button" class="btn btn-primary">Modifier mon compte</a> 
                <a href="05_exo_get.php?action=suppression" type="button" class="btn btn-danger">supprimer mon compte</a> <br><br><br>

                <?php
                debug($_GET);

                // if (isset($_GET['indice1']) && $_GET['indice1'] == 'valeur demandé')


                if (isset($_GET['action']) && $_GET['action'] == 'modification') {
                    echo '<p class="bg-success text-white p-2 rounded"> vous souhaitez modifier votre compte ! </p>';
                }


                if (isset($_GET['action']) && $_GET['action'] == 'suppression') {
                    debug($_GET);
                    echo '<p class="bg-warning text-white p-2 rounded"> voulez-vous supprimer votre compte ? </p>';
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