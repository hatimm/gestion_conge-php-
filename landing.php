<?php
    session_start();
    /*if (isset($_GET['username']) && isset($_SESSION['password']) )
    {*/
   if($_SESSION['role'] == 'responsable' && $_SESSION['departement'] == 'informatique')
            {
                header("location:reshome.php");
            }
    else if($_SESSION['role'] == 'responsable' && $_SESSION['departement'] == 'commerce')
            {
                header("location:reshome.php");
            }
    else if($_SESSION['role'] == 'user')
            {
                header("location:userhome.php");
            }
        else{
            header("location:login.php");
        }


?>