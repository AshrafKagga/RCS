<?php
session_start();
include "config.php";
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "select * from user where email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: ../dashboard.php");
        }else{
            echo "<script> alert('Wrong Password Entered');document.location='../index.php';</script>";
        }
    }else{
        echo "<script>alert('Account not found'); document.location='index.php'</script>";
    }

}
?>