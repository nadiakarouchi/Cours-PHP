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

<body class='bg-light'>
    <header class="container-fluid" style="background-color: lightcyan;">
        <h1 class="display-4 alert alert-danger text-center">CoursPHP - 03 condition</h1>
        <p class="lead ">Les instructions conditionnelles ou les conditions : Indispensables à la gestion du déroulement d'un algorithme quelconque, ces instructions sont présentes dans tous les langages. Cela sera familier pour ceux qui ont déjà une connaissance en Javascript.
        </p>
    </header>
    <!-- fin container-fluid  -->

    <div class="container bg-light">
        <section class="row ">
            <div class="col-sm-12 col-md-6 border border-success">
                <h2 class="alert alert-primary">if</h2>
                <hr>
                <p>L'instruction <code>if</code> est la plus simple et la plus utilisée des instructions conditionnelles. Présente dans tous les langages de programmation, elle est essentielle en ce qu'elle permet d'orienter l'exécution du script en fonction de la valeur booléenne d'une expression.</p>
                <code class="alert-success border border-danger">
                    <br>
                    $a = 100; <br>
                    $b = 55; <br>
                    $c = 25; <br>
                    if ($a > $b && $b > $c) { <br>
                    echo "&lt;p class=\"alert alert-danger text-center \">les deux conditions sont vraies&lt;/p>";
                    }
                </code>


                <!-- passage php  if-->

                <?php
                $a = 100;
                $b = 55;
                $c = 25;
                if ($a > $b && $b > $c) {
                    echo "<p  class=\"alert alert-danger text-center \">les deux conditions sont vraies</p>";
                }

                ?>

            </div>
            <!-- fin col  -->
            <div class="col-sm-12 col-md-6 border border-success">
                <h2 class="alert alert-primary">if....else</h2>
                <hr>
                <p>L'instruction <code>if...else</code> permet de traiter le cas où l'expression conditionnelle est vraie/ TRUE et en même temps d'écrire un traitement de rechange quans elle est fausse / FALSE, <br>
                    <code>
                        $e = 10; <br>
                        $f = 5; <br>
                        $g = 2; <br>

                        echo "&lt;p class=\"alert-warning alert\">"; <br>

                        // OR ou ||

                        if ($e == 9 || $f > $g) { <br>

                        echo "Au moins une des 2conditions est remplie ou vraie&lt;/p>"; <br>
                        } else {

                        echo "Les 2 conditions sont fausses&lt;/p>"; <br>
                        }
                    </code>
                </p>
                <!-- passage php if ... else  -->

                <?php
                echo "<p class=\"alert alert-success\">";
                if ($a > $b) {
                    echo "$a est supérieur à $b</p>";
                } else {
                    echo "$a est inférieur à $b</p>";
                }
                // echo "</p>";

                echo "<p class=\"bg-light\">Autre exemple :</p> <hr>";
                $e = 10;
                $f = 5;
                $g = 2;

                echo "<p class=\"alert-warning alert\">";

                //  OR ou ||

                if ($e == 9 || $f > $g) {

                    echo "Au moins une des 2conditions est remplie ou vraie</p><hr>";
                } else {

                    echo "Les 2 conditions sont fausses</p><hr>";
                }


                ?>
                <!-- ternaires -->
            </div>
            <!-- fin col  -->
            <div class="col-sm-12 col-md-6 border border-success">
                <h4 class="alert alert-primary">if...else en ternaire</h4>
                <p>Il existe une autre manière d'écrire un if...else ; la condition ternaire</p>
                <p>Dans la ternaire, le ? remplace le if et le : remplace le else</p>

                <!-- passage php en ternaire  -->
                <?php
                $h = 10;
                echo "<p class=\"alert-info alert\">";
                if ($h == 10) {
                    echo "$h est égal à 10</p>";
                } else {
                    echo "$h est différent de 10</p>";
                }
                echo "<p class=\"bg-light\"> >>>>la même condition en ternaire ? = if  < :  > = else avec deux points>>>>></p> <hr>";

                echo ($h == 10) ? "<p class=\"text-success alert-danger alert\">\$h est égal à 10</p>" : "<p class=\"text-success\">\$h est différent de 10</p>";
                // on vérifier une condition et Si $h est égal à 10 est vrai on affiche la 1er expression sinon la seconde

                ?>
            </div>
            <!-- fin col  -->
            <div class="col-sm-12 col-md-6 border border-success">
                <h2 class="alert alert-primary "> if...else if...else</h2>
                <p>une syntaxe plus complexe :</p>
                <code>
                    $d = 10; <br>

                    echo "&lt;p class=\"text-success alert alert-warning\">"; <br>

                    if ($d == 8) { <br>

                    echo " \$d qui contien $d est égal à 8&lt;/p>"; <br>
                    } else if ($d != 10) {

                    echo " \$d qui contien $d est différent de 10&lt;/p>"; <br>
                    } else {

                    echo "pour \$d qui contien $d // Les deux conditions sont fausses&lt;/p>"; <br>
                    }
                </code>
                <?php
                $d = 10;

                echo "<p class=\"text-success alert alert-warning\">";

                if ($d == 8) {

                    echo " \$d qui contien $d est égal à 8</p>";
                } else if ($d != 10) {

                    echo " \$d qui contien $d est différent de 10</p>";
                } else {

                    echo "pour \$d qui contien $d  // Les deux conditions sont fausses</p>";
                }

                ?>
            </div>
            <!-- fin col  -->
            <div class="col-sm-12 col-md-12 border border-success">
                <h2 class="alert alert-primary text-center">Switch...case</h2>
                <p>Switch permet de comparer à une multitude de valeur comme l'instruction if...else if...else</p>
                <code>
                $dept = 20; <br>
                if ($dept == 75) echo "paris";<br>
                if ($dept == 92) echo "haut-de-seine";<br>
                if ($dept == 78) echo "yvelines";<br>
                if ($dept == 93) echo "seine saint-denis";<br>

                echo "&lt;hr>"; <br>

                echo "&lt;p class=\"alert alert-danger\">";<br>

                switch ($dept) {<br>
                    case 75:
                        echo "Paris&lt;/p>";<br>
                        break;<br>
                    case 78:<br>
                        echo "yvelines&lt;/p>";<br>
                        break;<br>
                    case 92:<br>
                        echo "Hauts-de-Seine&lt;/p>";<br>
                        break;<br>
                    case 93:<br>
                        echo "seine saint-denis&lt;/p>";<br>
                        break;<br>

                    default:<br>
                        echo "Département inconnu en île de france !&lt;/p>";<br>
                        break;<br>
                </code>
                <hr>
                <?php

                $dept = 92;
                if ($dept == 75) echo "paris";
                if ($dept == 92) echo "haut-de-seine";
                if ($dept == 78) echo "yvelines";
                if ($dept == 93) echo "seine saint-denis";

                echo "<hr>";

                echo "<p class=\"alert alert-danger\">";

                switch ($dept) {
                    case 75:
                        echo "Paris</p>";
                        break;
                    case 78:
                        echo "yvelines</p>";
                        break;
                    case 92:
                        echo "Hauts-de-Seine</p>";
                        break;
                    case 93:
                        echo "seine saint-denis</p>";
                        break;

                    default:
                        echo "Département inconnu en île de france !</p>";
                        break;
                }

                ?>
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