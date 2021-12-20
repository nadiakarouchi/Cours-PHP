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
            <h1 class="display-4">Cours PHP - Chapitre 02 - Variables</h1>
            <p class="lead">Les variables en PHP</p>
            <?php echo "validez votre HTML CSS sur le site <a href=\" " . validator . " \" target=\"_blank\">Validator</a>" ?>
            <?php echo "<p class=\"alert alert-warning\">Exemple de PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
        </div>
    </header>

    <div class="container bg-white">

        <div class="row">
            <div class="col-md-6 border">
                <h2 class="alert alert-danger">Les variables</h2>
                <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($) suivi de la variable. <br>
                    Les règles de créa tion des noms de la variable sont les suivantes :</p>

                <ul>
                    <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le tiret du bas </li>

                    <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>

                    <li>La longueur du nom n’est pas limitée, mais il convient d’être raisonnable sous peine de confusion dans la saisie du code. <br>
                        Il est conseillé de créer des noms de variable le plus « parlant » possible. En relisant le code contenant la variable $nomclient,
                        par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit $x ou $y.</li>
                </ul>
            </div>


            <div class="col-sm-12 col-md-6 border">
                <h3 class="alert alert-danger">Déclaration des variables</h3>
                <ul>
                    <li>La décalration des variables n'est pas obligatoire en debut de script, c'est une différence avec JS ou C. On peut créer des variables n'importe où mais avant de les utiliser. Toutefois utiliser une variable non crée ne provoquera pas d'erreur.</li>

                    <li>Il n'est pas nécessaire d'initialiser une variable et une variable n'aura pas de type.</li>

                    <li>Les noms des variales sont sensibles à la casse (maj et min) ; $mavar est différent de $maVar.</li>
                </ul>
            </div>
            <!-- fin col -->
        </div>
        <!-- fi row   -->

        <div class="container">
            <h3 class="alert alert-success text-center">Noms de variables</h3>
            <div class="row">
                <div class="col-md-6 border">
                    <h5 class="alert alert-primary">Noms de variables autorisés</h5>
                    <ul>
                        <li>$mavar</li>
                        <li>$_mavar</li>
                        <li>SM1</li>
                        <li>$_12345</li>
                    </ul>
                </div>
                <!-- fi col  -->
                <div class="col-md-6 border">
                    <h5 class="alert alert-primary">Noms de variables interdits</h5>
                    <ul>
                        <li>$*mavar</li>
                        <li>$5mavar</li>
                        <li>SM1</li>
                        <li>$mavar2+</li>
                    </ul>
                </div>
                <!-- fin col  -->
                <div class="col-sm-12 border">
                    <h3 class="alert alert-success text-center">Affecter des variables par valeur et par référence</h3>
                    <p>Affecter c'est donner une valeur à une variable. A sa création, vous ne donnez pas son type à une variable, c'es la valeur que vous lui affectez qui détermine ce type.</p>
                    <h5 class="alert alert-primary">Exemples :</h5>
                    <ul>
                        <li><code>$mavar = 75;</code></li>

                        <li><code>$mavar = "Paris"; </code> ou <code>$mavar = 'Paris'; </code></li>

                        <li><code>$mavar=7*3+2/5-91%7;</code> : PHP évalue l'expression puis affecte le résultat </li>

                        <li><code>$mavar=mysql_connect($a,$b,$c);</code> : la fonction retourne une ressource </li>

                        <li><code>$mavar=isset($var&&($var==9)); </code> : la fonction retourne une valeur booléenne, TRUE ou FALSE</li>
                    </ul>
                </div>
            </div>
            <!-- fin row  -->
            <!-- fin col -->
            <section class="row">
                <div class="col-sm-12 border">
                    <h2 class="alert alert-success">Les variables prédéfinies</h2>
                    <p>PHP dispose d’un grand nombre de variables prédéfinies, qui contiennent des informations à la fois sur le serveur et sur toutes les données qui peuvent transiter entre le poste client et le serveur, comme les valeurs saisies dans un formulaire, les cookies ou les sessions.</p>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="row">Variable</th>
                                <th scope="row">Utilisation</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"><code>$GLOBALS</code></th>
                                <td>Contient le nom et la valeur de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau. <code>$GLOBALS["mavar"]</code> récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions, par exemple).</td>
                            </tr>

                            <tr>
                                <th scope="row"><code>$_COOKIE</code></th>
                                <td>Contient le nom et la valeur des cookies enregistrés sur le poste client dans un tableau (array). Les noms des cookies sont les clés de ce tableau.</td>
                            </tr>

                            <tr>
                                <th scope="row"><code>$_ENV</code></th>
                                <td>Contient le nom et la valeur des variables d’environnement qui sont changeantes selon les serveurs.</td>
                            </tr>

                            <tr>
                                <th scope="row"><code>$_FILES</code></th>
                                <td>Contient le nom des fichiers téléchargés à partir du poste client.</td>
                            </tr>
                            <tr>
                                <th scope="row"><code>$_GET</code></th>
                                <td>Contient le nom et la valeur des données issues d’un formulaire envoyé par la méthode GET. Les noms "mame", des champs du formulaire sont les clés de cet array.</td>
                            </tr>

                            <tr>
                                <th scope="row"><code>$_POST</code></th>
                                <td>Contient le nom et la valeur des données issues d’un formulaire envoyé par la méthode POST. Les noms des champs du formulaire sont les clés de cet array.</td>
                            </tr>

                            <tr>
                                <th scope="row"><code>$_REQUEST</code></th>
                                <td>Contient l'ensemble des variables superglobales $_GET, $_POST, $_COOKIE et $_FILES
                                    <br>Une variable superglobale signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions !
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"><code>$_SERVER</code></th>
                                <td>Contient les informations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du script en cours d’exécution. Retenons les variables suivantes :
                                    <ul>
                                        <li><code>$_SERVER["HTTP_ACCEPT_LANGUAGE"]</code> : contient le code de la langue du navigateur client ex. <?php echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; ?></li>
                                        <li><code>$_SERVER["HTTP_COOKIE"]</code> : contient le nom et la valeur des cookies ex. <?php echo $_SERVER["HTTP_COOKIE"]; ?></li>
                                        <li><code>$_SERVER["HTTP_HOST"]</code> : donne le nom de domaine ex. <?php echo $_SERVER["HTTP_HOST"]; ?></li>
                                        <li><code>$_SERVER["SERVER_ADDR"]</code> : donne l'adresse IP du serveur ex. <?php echo $_SERVER["SERVER_ADDR"]; ?></li>
                                        <li><code>$_SERVER["PHP_SELF"]</code> : contient le nom du script en cours, nous l'utiliserons dans les formulaires</li>
                                        <li><code>$_SERVER["QUERY_STRING"]</code> : contient la chaîne de la requête utilisée pour accéder au script</li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- reprise cours  -->
                            <tr>
                                <th scope="row"><code>$_SESSION</code></th>
                                <td>Contient l'ensemble des noms des variables de session et leurs valeurs</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- fin tableau -->
                </div>
                <!-- fin div col -->
            </section>
            <!-- fin row  -->
            <section class="row">
                <div class="col-md-8">
                    <h2>Les opérateurs d'affectation combinés</h2>
                    <p>En plus de l'opérateur classique d'affectation = il en existe plusieurs</p>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="row">Opérateur</th>
                                <th scope="row">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">+=</th>
                                <td>
                                    Addition puis affectation :<br>
                                    $x += $y équivaut à $x = $x + $y<br>
                                    $y peut être une expression complexe dont la valeur est un nombre.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">-=</th>
                                <td>Soustraction puis affectation :<br>
                                    $x -= $y équivaut à $x = $x - $y<br>
                                    $y peut être une expression complexe dont la valeur est un nombre.</td>
                            </tr>
                            <tr>
                                <th scope="row">*=</th>
                                <td>Multiplication puis affectation :<br>
                                    $x *= $y équivaut à $x = $x * $y<br>
                                    $y peut être une expression complexe dont la valeur est un nombre.</td>
                            </tr>

                            <tr>
                                <th scope="row">**=</th>
                                <td>Puissance puis affectation<br>
                                    $x**=2 équivaut à $x=($x)²</td>
                            </tr>

                            <tr>
                                <th scope="row">/=</th>
                                <td>Division puis affectation :<br>
                                    $x /= $y équivaut à $x = $x / $y<br>
                                    $y peut être une expression complexe dont la valeur est un nombre différent de 0.</td>
                            </tr>

                            <tr>
                                <th scope="row">%=</th>
                                <td>Modulo puis affectation :<br>
                                    $x %= $y équivaut à $x = $x % $y $y<br>
                                    $y peut être une expression complexe dont la valeur est un nombre.</td>
                            </tr>

                            <tr>
                                <th scope="row">.=</th>
                                <td>Concaténation puis affectation :<br>
                                    $x .= $y équivaut à $x = $x . $y<br>
                                    $y peut être une expression littérale dont la valeur est une chaîne de caractères.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- fin col -->
            </section>
            <!-- fin row -->
            <section class="row">
                <div class="col-md-12">
                    <h2>Les constantes</h2>
                    <p>Vous serez parfois amené à utiliser de manière répétitive des informations devant rester constantes dans toutes les pages d’un même site. Il peut s’agir de texte ou de nombres qui reviennent souvent. Pour ne pas risquer l’écrasement accidentel de ces valeurs, qui pourrait se produire si elles étaient contenues dans des variables, vous avez tout intérêt à les enregistrer sous forme de constantes personnalisées.</p>
                    <p>On peut définir ses constantes soi-même : pour définir des constantes personalisées, utilisez la fonction <code>define()</code> dont la syntaxe est la suivante <code></code> cf. la page suivante <a href="../00_
                pages/03_page.php">page avec des constantes</a></p>
                    <h3>Les constantes prédéfinies</h3>
                    <p>Il existe dans PHP un grand nombre de constantes prédéfinies, que vous pouvez notamment utiliser dans les fonctions comme paramètres permettant de définir des options. Nous ne pouvons les citer toutes tant elles sont nombreuses, mais nous les définirons au fur et à mesure de nos besoins. Voir la page <a href="../00_pages/04_page.php">04_page.php</a></p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Constantes</th>
                                <th scope="col">Résultat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">PHP_VERSION</th>
                                <td>version de PHP sur ce serveur n°:
                                    <?php echo "<p class=\"alert-danger p-2\">".PHP_VERSION."</p>";?>;
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">PHP_OS</th>
                                <td>le système d'exploitation du serveur(operating system):
                                    <?php echo  "<p class=\"alert-danger p-2\">".PHP_OS."</p>";?>
                                </td>
                            </tr>
                            <tr>
                            <th scope="row">DEFAULT_INCLUDE_PATH</th>
                                    <td>Chemin d'accès aux fichiers par défaut:
                                    <?php echo "<p class=\"alert-danger p-2\">".DEFAULT_INCLUDE_PATH."</p>";?>    
                                    </td>
                            </tr>
                            <tr>
                                    <th scope="row">__FILE__</th>
                                    <td>Nom du fichier en cours d'exécution:
                                    <?php echo "<p class=\"alert-danger p-2\">".__FILE__."</p>";?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">__LINE__</th>
                                    <td>Numéro de la ligne de fichier:
                                    <?php echo "<p class=\"alert-danger p-2\">".__LINE__."</p>";?>
                                    </td>   
                                </tr>
                        </tbody>
                    </table>

            </section>

        </div>
        <!-- fin div container -->

        <!-- on appel la date de footer  -->
        <?php require '../inc/footer.inc.php'; ?>

        <!-- Optional JavaScript -->
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>