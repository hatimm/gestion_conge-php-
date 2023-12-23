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
        $departement=$_POST['departement'];
        

        $sql="INSERT INTO absence (nom,prenom,departement) values ('$nom','$prenom','$departement')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            $flag=1;
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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Absence</title>
  </head>
  <body>
      <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="reshome.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="prendreabsence.php">Liste d'absences d'aujord'hui</a></li>
                            <li><a class="dropdown-item" href="absence.php">Ajouter des employés</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="affichertousabsence.php">Historique d'absence</a></li>
                        </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    <!--Fin navbar-->
    <div class="container">
        <h2>
        <div class="well text-center">
            Ajouter des employé a la liste d'absence
        </div>
        </h2>
    </div>
    <div class="container">
    <div class="panel panel-default">
        <?php if($flag) { ?>
        <div class="alert alert-success">    
            <strong>!succée</strong>,Data d'absence ajouter avec succée
        </div>
        <?php } ?>
        <div class="panel-heading">
            <h2>
            <a href="absence.php" class="btn btn-primary">Ajouter</a>
            <a href="prendreabsence.php" class="btn btn-info pull-right">Retour</a>
            </h2>
        </div>
        <div class="panel-body">
            <form action="absence.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="departement">Département</label>
                    <input type="text" name="departement" id="departement" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
  
  
  
  
  
  
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
  </body>
</html>