<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- MES STYLES -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Cours PHP - Introduction</title>

</head>

<body>
    <!-- ========================================= -->
    <!-- Contenu principal -->
    <!-- ========================================= -->

    <div class="container bg-white p-5">
        <div class="row bg-light">
            <div class="col-sm-12">
                <h1 class="text-center alert alert-primary">Cours PHP - Introduction</h1>
                <p class="lead text-center mt-4">PHP : Php Hypertext Preprocessor</p>
            </div>
            <div class="col-sm-12 col-md-4 border">
                <h4 class="alert alert-danger">1/ réaliser un site dénamique</h4>
                <p>Pour réaliser un sites dynamiques nous allons aborder les points suivants :</p>
                <ul>
                    <li>De connaître la syntaxe et les caractéristiques du langage PHP 7</li>
                    <li>Les notions essentielles du langage SQL permettant la création et la gestion d'une BDD et la réalisation des requêtes de base</li>
                    <li>Le fonctionnement et la réalisation de BDD MySQL et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP (ou d'objets)</li>
                </ul>
            </div>
            <!-- fin col -->
            <div class="col-sm-12 col-md-4 border">
                <h4 class="alert alert-danger">2/ Qu'est ce que PHP </h4>
                <p>PHP permet de créer des pages interactives ; Une page interactive permet à un visiteur de saisir des données personnelles qui sont ensuite transmises au serveur, où elles peuvent rester stockées dans une base de données BDD pour être diffusées vers d'autres utilisateurs. <br>
                    Un utilisateur peut, par exemple, s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultérieure. <br>
                    Il peut aussi envoyer des e-mails et des fichiers sans avoir à passer par son logiciel de messagerie. <br>
                    En associant toutes ces caractéristiques, il est possible de créer aussi bien des sites de diffusion et de collecte d'information que des sites e-commerce, de rencontres ou des blogs.</p>
            </div>
            <!-- fin col -->
            <div class="col-sm-12 col-md-4 border">
                <h4 class="alert alert-danger">3/ Rappel sur les BDD</h4>
                <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une base de données, généralement MySQL mais aussi SQLite, et sur des serveurs Apache. PHP, MySQL et Apache forment d'ailleurs le trio ultradominant sur les serveurs Internet. Quand ce trio est associé sur un serveur à Linux, on parle de système LAMP (Linux, Apache, MySQL, PHP). PHP est utilisé aujourd'hui par plus des 3/4 des sites dynamiques de la planète .</p>
                <p>pour utiliser PHP sur un PC on utilisera XAMPP mais aussi Laragon, sur Mac onprévilégiera MAMP</p>
            </div>
            <!-- fin col -->
        </div>
        <!-- fin row -->
        <section class="row m-2 p-2">
            <div class="col-md-4 p-1 border">
                <p>avec le code suivant écrit dans un fichier nommé 02_infos.php placé sur le serveur d'évalution on obtient toutes les infos sur le php exécuté dans ce serveur.</p>
                <blockquote>
                    <code class="alert-warning border">
                        &lt;?php <br>
                        phpinfo(); <br>
                        ?>
                    </code>
                </blockquote>
            </div>
            <!-- fin col -->
            <div class="col-md-4 p-1 border alert alert-success">
                <p>la fonction date () avec ses arguments qui nous donne l'heure et la date du serveur</p>
                <?php // echo date('d/m/Y - H:m:s');
                ?>
                <?php
                echo " <h5> Date du jour: " . date('d/m/Y - H:m:s') . "</h5>";
                echo "<p>Bienvenue sur le cours PHP</p>";
                echo "<p>Introduction</p>";
                ?>
            </div>
            <!-- fin col  -->
            <div class="col-md-4 p-1 border">
                <h4>Le cycle de vie d'une page PHP</h4>
                <ol>
                    <li>Envoie d'une requête HTTP (Hyper text transfer protocol) par le navigateur client vers le serveur du type
                        <br> http://www.monsite.fr/infos.php <br>
                    </li>
                    <li>Interprétation par le serveur du code PHP contenu dans la page appelée</li>
                    <li>Envoi par le serveur d'un fichier dont le contenu est purement HTML;</li>
                    <p> <a href="01page.php"></a> Ici un lien vers une autre page PHP</p>
                </ol>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row  -->
        <section class="row p-2 m-2">
            <div class="col-md-12 border">
                <h3 class="alert alert-danger text-center">inclure des fichiers externe en PHP</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fonction</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>include("../inc/init.inc.php")</code></td>
                            <td>Lors de son interpretation par le serveur, cette ligne est remplacée par tout le contenu du fichier précisé en paramètres, il faut fournir le nom et l'adresse complète; en cas d'erreur, par ex: si le fichier n'est pas trouvé , la fonction include ne genère qu'une alerte (un warning) est le script continue </td>
                        </tr>
                        <tr>
                            <td><code>require("../inc/init.inc.php")</code></td>
                            <td>A desormais un comportement identique à include(), à la différence près qu'en cas d'erreur, require() provoque une erreur "fatale" (fatal error) et met fin au script</td>
                        </tr>
                        <tr>
                            <td><code>include_once("../inc/init.inc.php")<br> require_once("../inc/init.inc.php")</code></td>
                            <td>Ces fonctions ne sont pas éxécutés plusieurs fois,même si on les trouve dans une boucle ou si elles ont été exécutées une fois dans le code qui précède.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- fin col  -->
        </section>
        <!-- fin row  -->
    </div>
    <!-- fin du container -->
    <?php require '../inc/footer.inc.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>