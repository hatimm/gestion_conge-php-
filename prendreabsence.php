<?php
    session_start();
    include 'connection.php';
    $flag=0;
    if(isset($_POST['submit']))
    {
        foreach($_POST['statut'] as $id=>$statut)
        {
            $nom_empl = $_POST['nom_empl'][$id];
            $prenom_empl = $_POST['prenom_empl'][$id];
            $departement_empl = $_POST['departement_empl'][$id];
            $date=date("Y-m-d H:i:s");
            $sql="insert into record_absence(nom,prenom,departement,statut,date)values('$nom_empl','$prenom_empl','$departement_empl','$statut','$date')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $flag=1;
            }
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
            Liste d'absence d'aujourd'hui
        </div>
        </h2>
    </div>
    <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>
                <a href="absence.php" class="btn btn-success">Ajouter</a>
                <a href="affichertousabsence.php" class="btn btn-info pull-right">Afficher tous</a>
            </h2>
            <?php if($flag) { ?>
            <div class="alert alert-success">
                Record d'absence ajouter!
            </div>
            <?php } ?>
            <h3>
            <div class="well text-center">
                Date d'aujord'hui:
                <?php echo date("Y-m-d"); ?>
            </div>
            </h3>
            <div class="panel panel-body">
                <form action="prendreabsence.php" method="post">
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th><th>Nom</th><th>Prénom</th><th>Departement</th><th>Statut</th>
                        </tr>
                        <?php 
                        $id=0;
                        $counter=0;
                        if($_SESSION['departement']=='informatique')
                        {
                            $sql="select * from employe where departement='informatique'";
                        }
                        else if($_SESSION['departement']=='commerce')
                        {
                            $sql="select * from employe where departement='commerce'";
                        }
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result))
                        {
                            $id++;
                        ?>
                        <tr>
                            <td><?php echo $id?></td>
                            <td><?php echo $row['nom'];?>
                            <input type="hidden" value="<?php echo $row['nom'];?>" name="nom_empl[]">
                            </td>
                            <td><?php echo $row['prenom'];?>
                            <input type="hidden" value="<?php echo $row['prenom'];?>" name="prenom_empl[]">
                            </td>
                            <td><?php echo $row['departement'];?>
                            <input type="hidden" value="<?php echo $row['departement'];?>" name="departement_empl[]">
                            </td>
                            <td>
                                <input type="radio" name="statut[<?php echo $counter; ?>]" value="Présent(e)" >Présent(e)
                                <input type="radio" name="statut[<?php echo $counter; ?>]" value="Absent(e)" >Absent(e)
                            </td>
                        </tr>
                        <?php $counter++; } ?>
                    </table>
                    <input type="submit" name="submit" value="sauvegarder" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    </div>
  
  
  
  
  
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
  </body>
</html>