<?php
    
    if (isset($_GET['deco'])) {
        session_destroy();
        header("Location: Login.php");
    
    }
    $conn = mysqli_connect('localhost','root','','gestion_congé');
    if(!$conn)
    {
        die(mysqli_erro($conn));
    }
?>