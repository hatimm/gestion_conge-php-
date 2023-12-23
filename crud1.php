<?php
    session_start();
    include 'connection.php';
    if(isset($_POST['submit']))
    {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $numtel=$_POST['numtel'];
        $departement=$_POST['departemant'];
        

        $sql="INSERT INTO employe (nom,prenom,email,numtel,departement) values ('$nom','$prenom','$email','$numtel','$departement')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            /*echo "les informations sont inserer";*/
            header('location:reshome.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>
      <div class="container my-5">
      
      <form method="post">
            <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom" autocomplete="off">
            </div>
            <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" placeholder="Entrer votre prénom" autocomplete="off">
            </div>
            <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Entrer votre email" autocomplete="off">
            </div>
            <div class="mb-3">
            <label class="form-label">Num Tel</label>
            <input type="text" class="form-control" name="numtel" placeholder="Entrer votre Numéro de telephone" autocomplete="off">
            </div>
            <select class="form-select mt-4" name="departemant">
                <option value="Informatique" selected>Informatique</option>
                <option value="Commerce" >Commerce</option>
            </select>
            <button type="submit" class="btn btn-primary mt-5" name="submit">Submit</button>
      </form>
      </div>
  </body>
</html>