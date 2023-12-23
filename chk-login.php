<?php
    session_start();
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['role'] = $_POST['role'];

        $conn = mysqli_connect('localhost','root','','gestion_congé');
        $req = "select * from users where username = '$username' and password = '$password'";
        $result = mysqli_query($conn,$req);
        $count = mysqli_num_rows($result);
        if($count>0)
        {
            $data=mysqli_fetch_array($result);
            $_SESSION['username']=$data['username'];
            $_SESSION['password']=$data['password'];
            $_SESSION['role']=$data['role'];
            $_SESSION['departement']=$data['departement'];
            header("Location: landing.php");
        }
        else
        {
        header("Location: login.php?error=Username ou password incorrect");
        }
    }
    else
    {
        header("location:login.php");
    }
?>
