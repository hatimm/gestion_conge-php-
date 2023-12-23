<?php
    
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
      <div class="position-relative">
          <a href="crud1.php" class="text-light"><button class="btn btn-primary my-5">Ajouter</button></a>
          <form action="recherche.php" method="post" class="">
                <input type="text" name="search" placeholder="rechercher ici">
                <button class="btn btn-primary">recherche</button>
          </form>
      </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Télephone</th>
      <th scope="col">Departemant</th>
      <th scope="col">Opération</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $conn = mysqli_connect('localhost','root','','gestion_congé');
        $sql="select * from employe";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $nom=$row['nom'];
                $prenom=$row['prenom'];
                $email=$row['email'];
                $numtel=$row['numtel'];
                $departement=$row['departement'];
                echo '
                <tr>
                <th scope="row">'.$nom.'</th>
                <td>'.$prenom.'</td>
                <td>'.$email.'</td>
                <td>'.$numtel.'</td>
                <td>'.$departement.'</td>
                <td>
                <a href="modifier.php?modifempl='.$nom.'"><button class="btn btn-primary">Modifier</button></a>
                <a href="supprimer.php?suppempl='.$nom.'" ><button class="btn btn-danger">Supprimer</button></a>
                </td>
                </tr>';
            }

        }
      ?> 
      
  </tbody>
  </table>
  </div>
</body>
</html>