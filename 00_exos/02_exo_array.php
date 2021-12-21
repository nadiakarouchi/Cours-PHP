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

  <title>CoursPHP - Exo 02 Array</title>
  <!-- mes styles -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <header class="container-fluid">
    <h1 class="display-4">CoursPHP - Exo 02 Array</h1>
  </header>
  <!-- fin container-fluid  -->

  <div class="container bg-light">
    <section class="row border border-success">
      <div class="col-sm-12">
        <?php

        // Méthode 1 Déclaration d'un tableau, d'un array 
        $tableau1 = array('Gabin', 'Arletty', 'Fernandel', 'Dalio', 'Pauline Carton');

        echo $tableau1; // erreur de type "array to string conversion" car on ne peut pas afficher directement un tableau

        echo "<pre>"; // <pre> permet de formater le texte (saut de ligne typo à chasse fixe)
        print_r($tableau1); // print_r affiche le contenu d'un array avec les indices 
        echo "</pre>";
        echo "<pre>";
        var_dump($tableau1); // var_dump affiche le contenu d'un array avec les types des valeurs
        echo "</pre>";

        // Méthode 2 
        $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];
        echo "<pre>";
        var_dump($tableau2); // var_dump affiche le contenu d'un array avec les types des valeurs
        echo "</pre>";

        jeprint_r($tableau2);
        debug($tableau2);
        // pour afficher une valeur du tableau on écrit son indice entre crochets
        echo $tableau2[0] . "<br>";

        debug($tableau2[2]);
        $tableau2[] = "Suisse"; // les crochets vides signifient que l'on ajoute une valeur à la fin du tableau
        // $tableau2[0] = "Suisse"; // si on met un indice entre les crochets on va remplacer la valeur, le tableau aura tj la même longueur
        debug($tableau2);

        // 1 tableau associatif
        // $couleurs = array( 'b' => 'bleu', 'bl' => 'blanc', 'r' => 'rouge', );
        // dans un tableau associatif nous pouvons choisir le nom des indices 
        $couleurs = array(
          'b' => 'bleu',
          'bl' => 'blanc',
          'r' => 'rouge',
        );

        debug($couleurs);
        // un echo d'une des valeurs de notre tableau associatif
        echo '<p>La première couleur du tableau associatif est le ' . $couleurs['b'] . '</p>';
        echo "<p>La première couleur du tableau associatif est le $couleurs[b]</p>"; // si l'écho est entre guillemets doubles il n'est pus util de noter l'indice associatif (ici b) entre simple quote >>>> INDISPENSABLE avec des requêtes SQL

        echo "<p> le nombre de valeurs dans le tableau est de : avec count() "  . count($couleurs) . "</p>";
        echo "<p> le nombre de valeurs dans le tableau est de :  avec sizeof() "  . sizeof($couleurs) . " </p>";

        // on va faire une boucle pour afficher les valeurs d'un tableau
        // foreach >>> "pour chaque" >>> le moyen le plus simple et automatique de parcourir un tableau

        echo "<ul>";
        foreach ($tableau1 as $acteurs) {
          echo "<li> $acteurs </li>";
        }
        echo "</ul>";

        // une nouvelle foreach avec le tableau2 
        // à chaque tour de boucle la variable $pays prend les valeurs du tableau ; le mot clef "as" est obligatoire
        echo "<ol>";
        foreach ($tableau2 as $pays) {
          echo "<li> $pays </li>";
        }
        echo "</ol>";

        $tableau1[] = "Raimu"; // rajout d'une valeur au tableau


        echo "<ol>";
        foreach ($tableau1 as $indice => $acteurs) {
          echo "<li>Indice : $indice correspond à $acteurs </li>"; // quand il y a 2 variables après "as" celle de gauche parcourt les indices et celle de droite parcourt les valeurs 
          // echo '<li>Indice : ' .$indice. ' correspond à ' .$acteurs. ' </li>';
        }
        echo "</ol>";

        echo "<ol>";
        foreach ($couleurs as $indice => $teinte) {
          echo "<li>Indice : $indice correspond à $teinte </li>";
        }
        echo "</ol>";

        // 1 Déclarez un tableau associatif "$contacts" aavec les indices "prenom", "nom", "email" et "tel" et vous y mettez les valeurs correspondantes à un seul contact (le votre)
        // 2 Puis avec une boucle foreach vous affichez le valeurs dans une ul
        // 3 Puis dans une autre boucle vous affichez les valeurs dans des p sauf le prénom qui doit être dans un h3 (aide >>> if else)

        $contacts = array(
          'prenom' => 'Victor',
          'nom' => 'Hugo',
          'email' => 'victor.hugo@france.fr ',
          'tel' => '06 63 74 11 35',
        );

        debug($contacts);

        echo "<ul>";
        foreach ($contacts as $personne) {
          echo "<li> $personne </li>";
        }
        echo "</ul>";

        foreach ($contacts as $indice => $personne) {
          // echo "<p>$indice : $infos </p>";
          if ($indice == 'nom') {
            echo "<h3>$personne</h3>";
          } else {
            echo "<p>$personne </p>";
          }
        }
        echo "<hr>";
        // tableaux multidimensionnels un tableau avec des "sous-tableaux"

        $tableau_multi = array(
          0 => array(
            'prenom' => 'Jean',
            'nom' => 'Dujardin',
            'email' => 'j.dujardin@gmail.com ',
            'tel' => '06 23 56 98 78',
          ),
          1 => array(
            'prenom' => 'Marion',
            'nom' => 'Cotillard',
            'email' => 'm.cotillard@gmail.com ',
            'tel' => '06 25 56 89 74',
          ),
          2 => array(
            'prenom' => 'John',
            'nom' => 'Wayne',
            'email' => 's.fasli@gmail.com ',
          ),
          3 => array(
            'prenom' => 'Gary',
            'nom' => 'Grant',
            'email' => 'n.karouchi@gmail.com ',
          ),
        );

        debug($tableau_multi); //fonction pour afficher tout le tableau
        debug($tableau_multi[2]); //infos sur l'indice 2 du tableau

        debug($tableau_multi[1]['prenom']); //sur l'indice 1 la valeur du nom  dans le sous-tableau

        echo "<hr>";
        //pour parcourir le tableau multidimensionnel on peut faire une boucle for car ses indices sont numériques

        for ($i = 0; $i < count($tableau_multi); $i++) { // tant que $i est inférieur au nombre des éléments dans le tableau, que lon compte avec count() on entre dans la boucle.
          echo "<p class=\"alert alert-success\">" . $tableau_multi[$i]['prenom'] . '</p>'; //$i va successivement afficher les informations des indices nommés
          // debug($tableau_multi[$i]);
          // echo "<p>$tableau_multi[$i]['prenom']</p>";
        }
        echo "<hr>";
        //pour parcourir avec une boucle foreach

        // foreach ($tableau_multi as $indice => $prenom) {
        // debug($prenom);
        // echo '<strong>' .$tableau_multi[$indice]['prenom']. '</strong> -<br>';//$i}
        foreach ($tableau_multi as $indice => $prenom) {

          echo '<strong class="alert alert-warning p-3 ">' . $tableau_multi[$indice]['prenom'] . '</strong>';
        }
        echo "<br>";
        echo "<br>";
        echo "<hr>";

        foreach ($tableau_multi as $indice => $acteurs) {

          echo '<strong class="alert-info">' . $acteurs['prenom'] . ' ' . $acteurs['nom'] . '<br>*' . $acteurs['email'] . '<br></strong>';
        }

        //EXO
        // 1- faire un tableau $tailles avec des tailles de vêtement de l'extra small, small, medium, large,  extra large et les aficher dans une boucle
        $tailles = array('extra small', 'small', 'medium', 'large', 'extra large');
        debug($tailles);

        echo '<ul>';
        // foreach($tailles as $infos){
        //   echo '<li class="alert alert-success">' .$infos. '</li>';
        foreach ($tailles as $indice => $size) {
          echo '<li class="alert alert-success">' . $indice . " pour " . $size . '</li>';
        }
        echo '</ul>';
        echo "<hr>";


         // 2 -tableau associati

        $tailles2 = [
          'xs' => 'extra small',
          's' => 'small',
          'm' => 'medium',
          'l' => 'large',
          'xl' => 'extra large',
      ];

  

      echo "<hr><pre class=\"bg-warning\">1\  BOUCHE FOREACH LES TAILLES TABLEAU2 </pre>";
      echo "<ul>";
        foreach ($tailles2 as $indice2 => $size2) {
            echo "<li>
             $indice2 pour $size2
              </li>";
        }
        echo "</ul>";
// 3 -formulaire select
        
        echo "<label for=\"size2\" class=\" bg-warning border\"> Tailles</label><select class=\"form-control w-25 \">>";

        foreach ($tailles2 as $indice2 => $size2) {
            echo "<option value =\"$indice2\"\>$size2</option>";
        } 
        echo "</select>";

        // 4 - listes animaux

        $chat = [
          'mimi' => 'minucha',
          'suna' => 'suna tul',
          'macki' => 'macki su',
          'lara' => 'lara lulu',
          'xara' => 'xara bella',
      ];

  

      echo "<hr><pre class=\"bg-warning\">1\  BOUCHE FOREACH chat</pre>";
      echo "<ul>";
        foreach ($chat as $indice3 => $nom) {
            echo "<li>
             $indice3 pour $nom
              </li>";
        }
        echo "</ul>";
// 3 -formulaire select
        
        echo "<label for=\"nom\" class=\" bg-warning border\"> chats</label><select class=\"form-control w-25 \">>";

        foreach ($chat as $indice3 => $nom) {
            echo "<option value =\"$indice3\"\>$nom</option>";
        } 
        echo "</select>";




        ?>
     

        <br> <br> <br> <br> <br> <br>
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