<?php
session_start();
include "config.php";
$id = $_SESSION['id'];
// if(isset($_POST['img'])){
//     $file_name = $_FILES['profilepic']['name'];
//     $file_size = $_FILES['profilepic']['size'];
//     $file_tmp = $_FILES['profilepic']['tmp_name'];


//     // Move uploaded file to desired location
//     $target_dir = "assets/img/profilepics/";
//     $target_file = $target_dir . basename($file_name);
//     move_uploaded_file($file_tmp, $target_file);

//     // Update user's profile picture in database
//     $sql = "UPDATE tb_user SET profilepic='$target_file' WHERE id='$id'";
//     if (mysqli_query($conn, $sql)) {
//     unlink($row['profilepic']);
//         echo "<script>alert('Profile picture uploaded successfully';)</script>";
//     } else {
//         echo "Error updating profile picture: " . mysqli_error($conn);
//     }
// }
      ?>
      <?php
        if(isset($_POST['update'])){
            $name = $_POST['name'];
            $about = $_POST['about'];
            $company = $_POST['company'];
            $position = $_POST['position'];
            $country = $_POST['country'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $twitter = $_POST['twitter'];
            $facebook = $_POST['facebook'];
            $intagram = $_POST['intagram'];
            $linkedin = $_POST['linkedin'];
        
        
            // Update user's profile picture in database
            $sql = "UPDATE user SET name='$name', about='$about', company='$company', position='$position',country='$country',address='$address',
            contact='$contact', email='$email', twitter='$twitter',facebook='$facebook', intagram='$intagram', linkedin='$linkedin' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
            //   unlink($row['profilepic']);
                echo "<script>alert('Profile get successfully';)</script>";
            } else {
                echo "Error updating: " . mysqli_error($conn);
            }
          }
            ?>