<?php
    session_start();
    $search = $_POST['search'];
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!--debut de sidebar-->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                    <i class="fas fa-user-shield"></i>Application
            </div>
            <div class="list-groupe list-group-flush my-3">
                <a href="reshome.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-briefcase me-2"></i>Employe
                </a>
                <a href="affichertousabsence.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-tachometer-alt me-2"></i>Absence
                </a>
                <a href="calendrier.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-calendar-week me-2"></i>Calendrier
                </a>
                <a href="repondreconge.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-sign-out-alt me-2"></i>Congé
                </a>
                <a href="repondrepermission.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-stopwatch me-2"></i>Permission
                </a>
                <!--<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-clipboard me-2"></i>Note
                </a>-->
            </div>
        </div>
        <!--fin de sidebar-->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                        <h2 class="fs-2 m-0">Dashboard</h2>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsupportedcontent" aria-controls="navbarsupportedcontent" aria-expended="false" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsupportedcontent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user me-2"></i>Bonjour , <?= $_SESSION['username'] ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="">Profile</a></li>
                                        <li><a class="dropdown-item" href="">settings</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="connection.php?deco=1">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
            </nav>
            <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-5">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-arround align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
                                <?php
                                        if($_SESSION['departement']=='informatique')
                                        {
                                        $req="select * from employe where nom like '%".$search."%' and departement='informatique'";
                                        }
                                        else if($_SESSION['departement']=='commerce')
                                        {
                                        $req="select * from employe where nom like '%".$search."%' and departement='commerce'";
                                        }
                                        $res=mysqli_query($conn, $req);
                                        echo mysqli_num_rows($res);
                                    ?>
                                </h3>
                                <p class="fs-5">Employe</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                        </div>
                        </div>
                        <!--List des employés-->
                        <div class="container">
                            <div class="position-relative">
                                <!--<a href="crud1.php" class="text-light"><button class="btn btn-primary my-5">Ajouter</button></a>-->
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
                                    if($_SESSION['departement']=='informatique')
                                        {
                                        $sql="select * from employe where nom like '%".$search."%' and departement='informatique'";
                                        }
                                    else if($_SESSION['departement']=='commerce')
                                        {
                                            $sql="select * from employe where nom like '%".$search."%' and departement='commerce'";
                                        }
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
                    </div>
            </div>
        </div>
    </div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    var el = document.getElementById("wrapper");
    var togglebutton = document.getElementById("menu-toggle");
    togglebutton.onclick = function (){
        el.classList.toggle("toggled");
    }
</script>
</body>
</html>