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

    <title>exo 04 traitement form </title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body class='bg-light'>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center">exo traitement form </h1>

    </header>
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

        <section class="row">
            <div class="col-md-8">
            <?php 
                    if(!empty($_POST)) {
                     debug($_POST);

                    echo "<p class=\"alert-success\">Prenom :" .$_POST['prenom']. "</p>";
                    echo "<p class=\"alert-success\">Nom : " .$_POST['nom']. "</p>";
                    echo "<p class=\"alert-success\">Email : " .$_POST['email']. "</p>";
                    echo "<p class=\"alert-success\">numero telephone : " .$_POST['telephone']. "</p>";
                    echo "<p class=\"alert-success\">Adresse : " .$_POST['adresse']. "</p>";
                    echo "<p class=\"alert-success\">Code postal : " .$_POST['code_postal']. "</p>";
                    echo "<p class=\"alert-success\">Ville : " .$_POST['ville']. "</p>";

                    //fabrication d'un fichier texte en l'absence de BDD
                    $file = fopen('formulaire.txt', 'a'); // fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon cela permet de l'ouvrir
                    
                    $informations = "informations recu :" .$_POST['prenom']. "- " .$_POST['nom']. "- email : " .$_POST['email']. "  -adresse : " .$_POST['adresse']. 
                    " -code postal : " .$_POST['code_postal']. "  -ville : " .$_POST['ville']. "\n"; "\n"; // \n pour faire des sauts de ligne dans le .txt
                    
                    fwrite($file, $informations);
            

                    } // fin if !empty
                ?>
            </div>
            <!-- fin col  -->

        </section>
        <!-- fin row  -->
    </div>
    <!-- fin container -->
    <!-- on appel la date de footer  -->
    <?php require '../inc/footer.inc.php'; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>