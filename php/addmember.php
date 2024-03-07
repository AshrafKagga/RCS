<?php
    session_start();
    include "config.php";
    // prepare an sql statement
    if (isset($_POST['add'])){
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $position = $_POST['position'];
        $pofilepic = $_POST['profilepic'];
        $gender = $_POST['gender'];
        $DOB = $_POST['DOB'];
        $job = $_POST['job'];
        $club = $_POST['club'];
        $duplicate = mysqli_query($conn, "SELECT *FROM members where email like '$email' or contact like '$contact'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script>alert('email or contact already taken');</script>";
            echo "<script type'text/javascript'> document.location = '../dashboard.php';</script>";
        }else{
        //    $sql = "INSERT INTO members (`name`, `contact`, `email`, `age`, `profilepic`, `DOB`, `position`, `job`, `gender`, `club_name`) VALUES ('$name','$contact','$email','$pofilepic','$DOB','$position','$job','$club')";
            $sql = "INSERT INTO members (name, contact, email, age, position, gender, DOB, job, club_name) value('$name','$contact','$email','$age', '$position', '$gender', '$DOB', '$job', '$club')";
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('Member added successful');</script>";
                echo "<script type'text/javascript'> document.location = '../dashboard.php';</script>";

            }else{
                echo "<script> alter('An error occured try again later!');</script>";
            }
        }
    }
    // mysqli_close($conn);
?>