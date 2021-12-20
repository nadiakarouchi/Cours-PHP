<?php 
// appel de ma fonction
 require_once '../inc/functions.php';
// 6 variable pour tester plus bas dans la page 
$chaine = "Longtemps je  me suis couchée dans le temps.";
$decimal = 18.74;
$entier = 1515;

$liberte = "Liberté!";
$egalite = "Egalité!";
$fraternite = "Fraternité!!!";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


      <!-- =================================== -->
  <!-- MA FAVICON  -->
  <!-- =================================== -->


  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-32x32.png">
  <link rel="manifest" href="../img/site.webmanifest">
  <link rel="mask-icon" href="../img/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
    <title>Cours PHP - 01/Variables</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
   <header class="container-fluid bg-light text-danger">
      <h1 class="display-4">Cours PHP</h1>
      <p class="lead">PHP : Php Hypertext Preprocessor</p>
   </header>


    <div class="container bg-white">
      <section class="row m-2 p-2">
<div class="col-sm-12">
    <h2>Exo 1: variable </h2>
    <?php 
    echo $chaine;
    echo gettype($chaine);

    echo "<hr>";
    print_r("<p>Afficher du contenu avec la fonction <code>print_r()</code></p>");
    print_r($chaine);

    mP();
    wDay();
    deviseFR();
    // echo $liberte,$egalite,$fraternite;
    dateComplete();

    
 

    ?>

</div>
      </section>
      <!-- fin row -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

</html>