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
        $jour=$_POST['jour'];
        $sortie=$_POST['sortie'];
        $rentrer=$_POST['rentrer'];
        $cause=$_POST['cause'];
        $sql="INSERT INTO permission (nom,prenom,email,tel,departement,jour,heure_sortie,heure_rentrer,cause) values ('$nom','$prenom','$email','$telephone','$departement','$jour','$sortie','$rentrer','$cause')";
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
  <title>Permission</title>
</head>
<body>
      <div class="container">
      <?php if($flag) { ?>
        <div class="alert alert-success">    
            <strong>succée</strong>,Demande de permission est envoyé
        </div>
        <?php } ?>
        <form class="form-group" method="post" action="permission.php">
          <h2 style="text-align:center;font-weight:bold;font-size:45px">Demande d'une permission</h2>
              <div class="row jumbotron">
                  <div class="col-md-5">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom">
                  </div>
                  <div class="col-md-4">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="col-md-6">
                    <input type="hidden" class="form-control">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label for="">N°tel</label>
                    <input type="text" class="form-control" name="telephone">
                  </div>
                  <div class="col-md-2 mt-4">
                    <label for="">Departement</label>
                    <input type="text" class="form-control" name="departement">
                  </div>
                  <div class="col-md-6 mt-4">
                    <input type="hidden" class="form-control">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label for="">Jour</label>
                    <input type="date" class="form-control" name="jour">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label for="">Heure de sortie</label>
                    <input type="time" class="form-control" name="sortie">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label for="">Heure de rentrer</label>
                    <input type="time" class="form-control" name="rentrer">
                  </div>
                  <label for="" class="mt-4" style="margin-right:20px;">Cause</label>
                  <div class="col-md-6 mt-4">
                    <textarea name="cause" id="" cols="50" rows="10" placeholder="cause"></textarea>
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