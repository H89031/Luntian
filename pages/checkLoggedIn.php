<?php
    include("connection.php");
    session_start();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
       header("Location: loginPage.php");
       exit();
    }

    if($_SESSION['ID']==NULL || $_SESSION['ID']!= $id){
        Print '<script>alert("Access Denied!")</script>';
        header("Location: loginPage.php");
        exit();
    }
?>