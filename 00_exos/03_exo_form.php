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

    <title>exo 04 form action</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body class='bg-light'>
<header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center alert alert-danger">exo form action</h1>
     
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

      <section class="row">
      <form action="04_form_traitement.php" method="POST">
 
<div class="form-group col-md-8">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="votre prénom">
</div>
<!-- fin prénom -->

<div class="form-group col-md-8">
    <label for="">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="votre nom" required>
</div>

<div class="form-group col-md-8">
    <label for="">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="xxx@gmail.com" required>
</div>

<div class="form-group col-md-8">
    <label for="telephone">numéro de téléphone</label>
    <input type="text" class="form-control" id="telephone" name="telephone" size="13" maxlength="10" placeholder="numéro téléphone" required>
</div>

<div class="form-group col-md-8">
    <label for="">Adresse</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse postal" required>
</div>

<div class="form-group col-md-8">
    <label for="code_postal">Code postal</label>
    <input type="number" class="form-control" id="code_postal" name="code_postal" min="10000" max="99999" maxlength="5" placeholder="code postal" required>
</div>

<div class="form-group col-md-8">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" id="ville" name="ville" placeholder="ville" required>
</div>

<button type="submit" class="btn btn-small btn-success">Envoyer</button>

</form>
<!-- fin du formulaire -->

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