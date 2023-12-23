<?php
  include 'connection.php';
  $flag=0;
  if(!$conn)
    {
        die(mysqli_erro($conn));
    }
  if(isset($_POST['submit']))
    {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $telephone=$_POST['telephone'];
        $departement=$_POST['departement'];
        $debut=$_POST['debut'];
        $fin=$_POST['fin'];
        $sql="INSERT INTO conge (nom,prenom,email,tel,departement,ddebut,dfin) values ('$nom','$prenom','$email','$telephone','$departement','$debut','$fin')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            $flag=1;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Congé</title>
</head>
<body>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="nav-link active" aria-current="page" href="userhome.php">Home</a>
                        <a class="nav-link active" aria-current="page" href="userconge.php">Liste des conges</a>
            </div>
      <div class="container">
      <?php if($flag) { ?>
        <div class="alert alert-success">    
            <strong>succée</strong>,Demande de congé est envoyé
        </div>
        <?php } ?>
        <form class="form-group" method="post" action="conge.php">
          <h2 style="text-align:center;font-weight:bold;font-size:45px">Demande de congé</h2>
              <div class="row jumbotron">
                  <div class="col-md-5">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom">
                  </div>
                  <div class="col-md-4">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
                  </div>
                  <div class="col-md-4">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="col-md-6">
                    <input type="hidden" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <label for="">N°tel</label>
                    <input type="text" class="form-control" name="telephone">
                  </div>
                  <div class="col-md-2">
                    <label for="">Departement</label>
                    <input type="text" class="form-control" name="departement">
                  </div>
                  <div class="col-md-6">
                    <input type="hidden" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <label for="">Date debut</label>
                    <input type="date" class="form-control" name="debut">
                  </div>
                  <div class="col-md-4">
                    <label for="">Date fin</label>
                    <input type="date" class="form-control" name="fin">
                  </div>
                  <div class="col-md-12" style="text-align:center;margin-top:20px;">
                    <input type="submit" class="btn btn-primary" placeholder="Envoyer" name="submit">
                  </div>
              </div>
        </form>
      </div>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>