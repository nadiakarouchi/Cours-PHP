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
            <p class="lead">Les types de variables en PHP</p>
            <?php echo "validez votre HTML CSS sur le site <a href=\" " . validator . " \" target=\"_blank\">Validator</a>" ?>
            <?php echo "<p class=\"alert alert-warning\">Exemple de PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
        </div>
    </header>
    <!-- =================================== -->
    <!-- conteneur principal -->
    <!-- =================================== -->
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-6">
                <h2 class="alert alert-success border">Les types de données</h2>
                <ul>
                    <li>Les types de base :</li>
                    <ul>
                        <li>Entiers, avec le type integer, qui permet de représenter les nombres entiers dans les bases 10, 8 et 16.</li>
                        <li>Flottants, avec le type double ou float, au choix, qui représentent les nombres réels, ou plutôt décimaux au sens mathématique. </li>
                        <li>Chaînes de caractères, avec le type string.</li>
                        <li>Booléens, avec le type boolean, qui contient les valeurs de vérité TRUE ou FALSE (soit les valeurs 1 ou 0 si on veut les afficher).</li>
                    </ul>
                    <li>Les types composés :</li>
                    <ul>
                        <li>Tableaux, avec le type array, qui peut contenir plusieurs valeurs.</li>
                        <li>Objets, avec le type object.</li>
                    </ul>
                    <li>Les types spéciaux</li>
                    <ul>
                        <li>Objets, avec le type object.</li>
                        <li>Type null.</li>
                    </ul>
                </ul>
            </div>
            <!-- fin col  -->
            <div class="col-md-6">
                <h2 class="alert alert-success border"> Les opérateurs numériques</h2>
                <p>PHP offre un large éventail d'opérateurs utilisables avec des nombres. Les variables ou les nombres sur lesquels agissent ces opérateurs sont appelés les opérandes.</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Opérateur</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">+</th>
                            <td>Addition</td>
                        </tr>
                        <tr>
                            <th scope="row">-</th>
                            <td>Soustraction</td>
                        </tr>
                        <tr>
                            <th scope="row">*</th>
                            <td>Multiplication</td>
                        </tr>
                        <tr>
                            <th scope="row">**</th>
                            <td>Puissance (associatif à droite)<br>
                                $a=3;<br>
                                echo $a**2; //Affiche 9<br>
                                echo $a**2**4; //Affiche 43046721 soit 3**(2**4) ou 316</td>
                        </tr>
                        <tr>
                            <th scope="row">/</th>
                            <td>Division</td>
                        </tr>
                        <tr>
                            <th scope="row">%</th>
                            <td>Modulo : reste de la division euclidienne.(du premier opérande par le deuxième.) <br>
                                <!-- $var = 159;<br>
                            echo $var%7; //affiche 5 car 159=22x7 + 5.<br>
                            $var = 10.5;<br>
                            echo $var%3.5; //affiche 1et non pas 0.<br> -->

                                <?php
                                $var = 159;
                                echo "<pre>" . gettype($var) . "</pre>";

                                echo "<div class=\"text-danger alert-warning p-2 border\"> 
                                la variable \$var est= 159.<br>";

                                //pour afficher le $ il faut l'échapper
                                echo "le contenu de \$var est : <br> \$var contient $var<br>";

                                //pour faire une opération avec une variable
                                echo "Le  modulo de $var par/ 7 ou  <code> \$var%7 est égal à " . $var % 7;
                                echo "</div>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">--</th>
                            <td>Décrémentation : soustrait une unité à la variable. Il existe deux possibilités, la prédécrémentation, qui soustrait avant d’utiliser la variable, et la postdécrémentation, qui soustrait après avoir utilisé la variable.<br>
                                <code>
                                    $var=56;<br>
                                    echo $var--; //affiche 56 puis décrémente $var.<br>
                                    echo $var; //affiche 55.<br>
                                    echo --$var; //décrémente $var puis affiche 54.
                                </code>
                                <?php 
                                $var = 56;
                                $var--;
                                echo "<p class=\"text-success\">La variable \$var est égale à $var</p>";
                                echo "<p class=\"text-success\">";
                                echo --$var;
                                echo "</p>";
                            ?>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">++</th>
                            <td>Incrémentation : ajoute une unité à la variable. Il existe deux possibilités, la préincrémentation, qui ajoute 1 avant d’utiliser la variable, et la postincrémentation, qui ajoute 1 après avoir utilisé la variable.
                                <code>$var=56;<br>
                                    echo $var++; //affiche 56 puis incrémente $var : postincrémenté<br>
                                    echo $var; //affiche 57.<br>
                                    echo ++$var; //incrémente $var puis affiche 58 : préincrémenté
                                </code>
                            </td>
                            <?php
                                
                                $var = 56;   
                                                       
                                echo "<div class=\"text-success pt-4\">";
                                echo "exemple : " .++$var. "\$var devient apres incrementation ++\$var " ;
                                echo "</div>"; 
                            ?>
                        </tr>
                    </tbody>
                </table>
                </div>
            <!-- fin rangée -->

            <secion class="row">
                  <div class="col-md-12">
                        <h3 class="alert alert-success">Le type "Boolean" ou boléen</h3>
                        <p>Le type booléen ne peut contenir que deux valeurs différentes TRUE ou FALSE, 1 ou 0</p>
                        <?php 
                            $a = 1000;
                            $b =($a<150);
                             // dans le cas où c'est FALSE, il affichera une chaîne vide
                             echo $b;
                             
                            echo "<div class=\"alert-primary border p-2\">si je ne vois pasle contenu de \$b= >>>> $b <<<< c'est que c'est faux , si je le vois c'est que c'est vrai</div>";
                        ?>
                        </div>
                      <!-- fin col  -->
                      <div class="col-md-12">
                        <h3 class="alert alert-success">Les opérateurs booléens</h3>
                        <p>Quand ils sont associés, les opérateurs booléens servent à écrire des expressions simples ou complexes, qui sont évaluées par une valeur booléenne TRUE ou FALSE. Ils seront utilisés dans les instructions conditionnelles (dans des IF entre autres).</p>
                        <table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Opérateur</th>
							<th scope="col">Description</th>
						</tr>
					</thead>

					<tbody>
					<tr>
						<th scope="row">==</th>
						<td>
						Teste l’égalité de deux valeurs. L’expression $a == $b vaut TRUE si la valeur de $a est égale à celle de $b et
						FALSE dans le cas contraire :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a==$b);<br>
						$c est un booléen qui vaut TRUE car dans un contexte de comparaison numérique, la chaîne "345" est évaluée comme le nombre 345. Si $b="345
						éléphants" nous obtenons le même résultat.
						</td>
					</tr>
					<tr>
						<th scope="row">!= ou <></th>
						<td>
						Teste l’inégalité de deux valeurs.<br>
						L’expression $a != $b vaut TRUE si la valeur de $a est différente de celle de $b et FALSE dans le cas contraire.
						</td>
					</tr>
					<tr>
						<th scope="row">===</th>
						<td>
						Teste l’identité des valeurs et des types de deux expressions.<br>
						L’expression $a === $b vaut TRUE si la valeur de $a est égale à celle de $b et que $a et $b sont du même type. Elle vaut FALSE dans le cas contraire :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a===$b);<br>
						$c est un booléen qui vaut FALSE car si les valeurs sont égales, les types sont différents (integer et string).
						</td>
					</tr>
					<tr>
						<th scope="row">!==</th>
						<td>
						Teste la non-identité de deux expressions.<br>
						L’expression $a !== $b vaut TRUE si la valeur de $a est différente de celle de $b ou si $a et $b sont d’un type différent. Dans le cas contraire, elle vaut FALSE :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a!==$b);<br>
						$c est un booléen qui vaut TRUE car si les valeurs sont égales, les types sont différents (integer et string).
						</td>
					</tr>
					<tr>
						<th scope="row"><</th>
						<td>
						Teste si le premier opérande est strictement inférieur au second.
						</td>
					</tr>
					<tr>
						<th scope="row"><=</th>
						<td>
						Teste si le premier opérande est inférieur ou égal au second.
						</td>
					</tr>
					<tr>
						<th scope="row">></th>
						<td>
						Teste si le premier opérande est strictement supérieur au second.
						</td>
					</tr>
					<tr>
						<th scope="row">>=</th>
						<td>
						Teste si le premier opérande est supérieur ou égal au second.
						</td>
					</tr>
					<tr>
						<th scope="row"><=></th>
						<td>
						Avec $a<=>$b, retourne -1, 0 ou 1 respectivement si $a<$b, $a=$b ou $a>$b ($a et $b peuvent être des chaînes).
						</td>
					</tr>
					</tbody>
					</table>
                    </div>
                      <!-- fin col  -->
                      <div class="col-md-12">
                      <h3 class="alert alert-danger">Les opérateurs logiques</h3>

<table class="table table-striped">
<thead>
    <tr>
    <th scope="col">Opérateurs</th>
    <th scope="col">Description</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row">OR</th>
        <td>Teste si l’un au moins des opérandes a la valeur TRUE :<br>
            $a = true;<br>
            $b = false;<br>
            $c = false;<br>
            $d = ($a OR $b);//$d vaut TRUE.<br>
            $e = ($b OR $c); //$e vaut FALSE.</td>
    </tr>
    <tr>
        <th scope="row">||</th>
        <td>Équivaut à l’opérateur OR mais n’a pas la même priorité.</td>
    </tr>
    <tr>
        <th scope="row">XOR</th>
        <td>Teste si un et un seul des opérandes a la valeur TRUE :<br>
        $a = true;<br>
        $b = true;<br>
        $c = false;<br>
        $d = ($a XOR $b); //$d vaut FALSE.<br>
        $e = ($b XOR $c); //$e vaut TRUE.</td>
    </tr>
    <tr>
    <th scope="row">AND</th>
        <td>Teste si les deux opérandes valent TRUE en même temps :<br>
        $a = true;<br>
        $b = true;<br>
        $c = false;<br>
        $d = ($a AND $b); //$d vaut TRUE.<br>
        $e = ($b AND $c); //$e vaut FALSE.</td>
    </tr>
    <tr>
        <th scope="row">&&</th>
        <td>Équivaut à l’opérateur AND mais n’a pas la même priorité.</td>
    </tr>
    <tr>
        <th scope="row">!</th>
        <td>Opérateur unaire de négation, qui inverse la valeur de l’opérande :
        $a = TRUE;<br>
        $b = FALSE;<br>
        $d = !$a; //$d vaut FALSE.<br>
        $e = !$b; //$e vaut TRUE.</td>
    </tr>
</tbody>
</table>
<p class="alert alert-warning border">Attention !! Une erreur classique dans l’écriture des expressions conditionnelles consiste à confondre l’opérateur de comparaison == avec l’opérateur d'affectation =. L’usage des parenthèses dans la rédaction des expressions booléennes est souvent indispensable et toujours recommandé pour éviter les problèmes liés à l’ordre d’évaluation des opérateurs.</p>

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