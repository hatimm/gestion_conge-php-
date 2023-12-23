<?php
    include 'connection.php';
    $nom = $_GET['suppempl'];
    $sql = "delete from employe where nom='$nom'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:reshome.php');
    }else{
        die(mysqli_error($conn));
    }
?>