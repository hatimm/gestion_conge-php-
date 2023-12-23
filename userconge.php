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

    <title>Congé</title>
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
                        <a class="nav-link active" aria-current="page" href="userhome.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="conge.php">Demander un congé</a></li>
                            <li><a class="dropdown-item" href="userconge.php">Liste des congés</a></li>
                        </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    <!--Fin navbar-->
    <div class="container mt-5">
        <h3 class="text-center mb-3">Liste des congés</h3>
    <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
            <thead>
                    <tr class="bg-primary text-white">
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Departement</th>
                    <th scope="col">Reponse</th>
                    </tr>
            </thead>
            <tbody>
            <?php
                        $sql="select * from record_conge";
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
            </tbody>
            </table>
    </div>
    </div>
    
  
  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>