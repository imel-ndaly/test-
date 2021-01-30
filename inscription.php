<?php
require("connexion.php");

if(isset($_POST["submit"])){
    $request = $conn->prepare("INSERT INTO `webmania`(`ID`, `NOM`, `PRENOM`, `AGE`, `VILLE`, `FORMATION`) VALUES (null,?,?,?,?,?)");
    $request->execute(array($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['ville'],$_POST['formation']));
    header('PHPNATIVE:affichage.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>inscription</title>
</head>
<body>
<h1 style="text-align: center;">formulaire d'inscription</h1>

<form method="post" action="" style="margin: 50px 300px 0px 300px;">

  <div class="form-group">
    <label for="modele">Nom</label>
    <input type="text" class="form-control" name="nom">
  </div>

  <div class="form-group">
    <label for="modele">Prenom</label>
    <input type="text" class="form-control" name="prenom">
  </div>

  <div class="form-group">
    <label for="modele">Age</label>
    <input type="text" class="form-control" name="age">
  </div>

  <div class="form-group">
    <label for="modele">Ville</label>
    <input type="text" class="form-control" name="ville">
  </div>

  <div class="form-group">
    <label for="proprietaire">Formation</label>
    <input type="text" class="form-control" name="formation">
  </div>
  <input type="submit" class="btn btn-primary" name="submit">
</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>
