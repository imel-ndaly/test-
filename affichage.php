
<?php
require("connexion.php");

$request = $conn->prepare("SELECT * FROM webmaniadb");
$request->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>affichage</title>
</head>
<body>
<a class="btn btn-primary" href="inscription.html" style="margin: 50px;">Ajouter</a>
<table class="table" style="margin: 30px 200px 0px 200px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">ville</th>
      <th scope="col">Formation</th>
    </tr>
  </thead>
  <tbody>
   <?php while($data = $request->fetch()){ ?> 
  <tr>
      <td><?php echo $data['nom'] ?></td>
      <td><?php echo $data['prenom'] ?></td>
      <td><?php echo $data['age'] ?></td>
      <td><?php echo $data['ville'] ?></td>
      <td><?php echo $data['formation'] ?></td>
      <td>
          <a style="margin-left:50px;" href="Delete.php?im=<?php echo $data['webmaniadb'] ?>">Supprimer</a>
          <a style="margin-left:50px;" href="">Modifier</a>
      </td>
  </tr>
   <?php } ?>
  </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>