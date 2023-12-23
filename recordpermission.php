<?php
    include 'connection.php';
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
    <title>Permission</title>
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
                            <li><a class="dropdown-item" href="recordpermission.php">Liste des permission</a></li>
                            <li><a class="dropdown-item" href="repondrepermission.php">demande de permission</a></li>
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
            Liste des permission
        </div>
        </h2>
    </div>
    <div class="container">
    <div class="panel panel-default">
            <div class="panel panel-body">
                <form action="repondreconge.php" method="post">
                    <table class="table table-striped">
                        <tr>
                        <th>Nom</th><th>Prénom</th><th>Departement</th><th>Reponse</th>
                        </tr>
                        <?php
                        $sql="select * from record_permission";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result))
                        {
                        ?>
                        <tr>
                            <td><?php echo $row['nom'];?></td>
                            <td><?php echo $row['prenom'];?></td>
                            <td><?php echo $row['departement'];?></td>
                            <td><?php echo $row['reponse'];?></td>
                        </tr>
                        <?php }?>
                    </table>
                </form>
            </div>
    </div>
    </div>
  
  
  
  
  
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
  </body>
</html>