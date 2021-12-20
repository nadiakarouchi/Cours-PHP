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

    <title>Cours PHP - 01/Variables</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid p-4 alert alert-primary">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Variables</h1>
            <h2 class="lead">les chaines de variables en PHP</h2>
            <?php echo "validez votre HTML CSS sur le site <a href=\" " . validator . " \" target=\"_blank\">Validator</a>" ?>
            <?php echo "<p class=\"alert alert-warning\">Exemple de PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
            <p class="lead">Les chaînes de caractères sont avec les nombres les types de données les plus manipulés sur un site web. De surcroît, dans les échanges entre le client et le serveur au moyen de formulaires, toutes les données sont transmises sous forme de chaînes, d’où leur importance.</p>
        </div>
    </header>
    <!-- =================================== -->
    <!-- conteneur principal -->
    <!-- =================================== -->
    <div class="container bg-white">
        <section class="row">
            <div class="col-md-12">
                <h2 class="alert alert-danger">1- Les chaînes de caractères</h2>
                <p>Une chaîne de caractères est une suite de caractères alphanumériques contenus entre des guillemets simples (apostrophes)
                    ou doubles.</p>
                <p>Si une chaîne contient une variable, celle-ci est évaluée, et sa valeur incorporée à la chaîne uniquement si vous utilisez des guillemets et non des apostrophes <br>

                    <?php
                    $var1 = "1234";
                    echo 'le contenu de : $var1 <br>';
                    echo "le contenu de \$var1:  $var1 <p>";
                    ?>
                </p>
                <ul>
                    <li>$a = 'PHP';</li>
                    <li>$b = 'MySQL';</li>
                    <li>$c = "PHP et $b";//affiche : PHP et MySQL</li>
                    <li>$d = 'PHP et $b'; //affiche PHP et $b car $ et b sont considérés comme des caractères sans signification particulière</li>
                    <li>
                        <?php
                        $devise = " La devise de la République est \"Liberté, Egalité, Fraternité\" ";
                        echo "<p><strong>";
                        echo $devise;
                        echo "</strong></p>";
                        ?>
                    </li>
                </ul>

                <table class="table table-striped my-5">
                    <thead>
                        <tr>
                            <th scope="col">Séquence</th>
                            <th scope="col">Signification</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">\'</th>
                            <td>Affiche une apostrophe.</td>
                        </tr>
                        <tr>
                            <th scope="row">\"</th>
                            <td>Affiche des guillemets.</td>
                        </tr>
                        <tr>
                            <th scope="row">\$</th>
                            <td>Affiche le signe $.</td>
                        </tr>
                        <tr>
                            <th scope="row">\\</th>
                            <td>Affiche un antislash.</td>
                        </tr>
                        <tr>
                            <th scope="row">\n</th>
                            <td>Nouvelle ligne (code ASCII 0x0A).</td>
                        </tr>
                        <tr>
                            <th scope="row">\r</th>
                            <td>Retour chariot (code ASCII 0x0D).</td>
                        </tr>
                        <tr>
                            <th scope="row">\t</th>
                            <td>Tabulation horizontale (code ASCII 0x09).</td>
                        </tr>
                        <tr>
                            <th scope="row">\[0-7] {1,3}</th>
                            <td>Séquence de caractères désignant un nombre octal (de 1 à 3 caractères 0 à 7) et affichant le caractère correspondant :
                                echo "\115\171\123\121\114";
                                //Affiche MySQL.</td>
                        </tr>
                        <tr>
                            <th scope="row">\x[0-9 A-F a-f] {1,2}</th>
                            <td>Séquence de caractères désignant un nombre hexadécimal (de 1 à 2 caractères 0 à 9 et A à F ou a à f) et affichant le caractère correspondant :<br>
                                echo "\x4D\x79\x53\x51\x4C"; </td>
                            <!-- Affiche MySQL -->
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-dm-12">
                <h2 class="alert alert-danger">Concaténer des caractères</h2>
                <p>L'opérateur PHP de concaténation est le point (.), qui fusionne deux chaînes littérales ou contenues dans des variables en une seule chaîne.</p>
                <p>
                    <?php
                    $langage1 = "PHP";
                    $langage2 = "MySQL";
                    $phrase = "<p class=\"alert alert-warning\"><strong>a- Utilisez " . $langage1 . " et " . $langage2 . " pour construire un site dynamique</strong></p>";

                    echo "<p><strong>$phrase</strong></p>";
                    
                    echo "<p class=\"alert alert-success\"><strong>b- Utilisez $langage1 et $langage2 pour faire un site dynamique</strong></p>";

                     // Lors de l'affichage avec l'instruction echo, cette concaténation peut être simulée en séparant chaque chaîne ou variable par une virgule.
                        //$phrase = "Utilisez ",$langage1, " et ",$langage2, " pour construire un site dynamique";


                    echo "<p class=\"alert alert-success\"><strong>c- ON CONCATENE AVEC UN (.) un point c'est tout !</strong> <p>";
                    ?>
                </p>
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