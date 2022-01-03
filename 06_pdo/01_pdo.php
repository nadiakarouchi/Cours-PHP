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

    <title>cours PHP - chapitre 06 - 01 PDO</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header class="container-fluid" style="background-color: lightcyan;">
        <h1 class="text-center alert alert-danger disolay-4">Cours PHP - chapitre 06 - 01 PDO</h1>
        <p class="lead text-center">connexion à la BDD</p>

    </header>
    <!-- fin container-fluid  -->

    <div class="container bg-light">
        <section class="row ">
            <div class="col-md-6 border">
                <h2 class="alert-success">1- se connecter à la BDD</h2>
                <?php
                //    //connexion à la BDD
                //    //passage en variables des informations de connexion
                //    $host = 'localhost'; //le chemin vers le serveur de données, l'hôte, ici un chemin local 'localhost'
                //    $database = 'entreprise'; //le nom de la BDD
                //    $user = 'root';
                //    $psw = '';
                //    $psw = 'root';


                //connexion à la BDD
                //nom de la variable de connexion à la BDD ENT = entreprise;
                //cette variable nous sert partout ou l'on doit se servir de cette connexion

                $pdoENT = new PDO(
                    // 1 //
                    'mysql:host=localhost;dbname=entreprise',
                    // en 1er lieu le nom du driver 'mysql' (on pourrait commr driver IBM, oracle etc.), nom de serveur (host), nom de la BDD (dbname)

                    // 2 //

                    'root', //le pseudo ou l'utilisateur de la BDD

                    // 3 //

                    '', //le mot de passe en local sur pc il est vide avec XAMPP


                    //'root',//cette ligne commentée donne la mdp pour MAC avec MAMP

                    // 4 //

                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //pour afficher les erreurs SQL dans la navigateur
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //pour définir le charset des échanges avec la BDD 
                    )
                );
                //$pdoENT est un 'objet' qui représente la connexion à la BDD
                // debug($pdoENT);

                // // 5 // //ici nous aurons la liste des méthodes présentes dans l'objet $pdoENT

                // debug(get_class_methods($pdoENT));
                ?>
            </div>
            <!-- fin col  -->
            <div class="col-md-6 border">
                <h2>2 - faire des requêtes avec <code>exec()</code></h2>
                <?php 
               // on va insérer un nouvel employé dans BDD entreprise
               // INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUE ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000')

               $requete = $pdoENT->exec( " INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUE ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000') ");
                ?>
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