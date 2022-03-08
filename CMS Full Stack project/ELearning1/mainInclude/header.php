<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap4.1.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Student Testimonial Owl Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/testyslider.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <title>Confiance</title>
  </head>
  <body>
     <!-- Start Nagigation -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
      <a href="index.php" class="navbar-brand">
          <img src="image/1.png" alt="" width="50" height="50" class="align-text-top">
          Confiance</a>
      <span class="navbar-text">Upskill Your Future</span>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
          <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
          <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
          <li class="nav-item custom-nav-item"><a href="#Feedback" class="nav-link">Feedback</a></li>
          <li class="nav-item custom-nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
             <?php 
              session_start();
              if (isset($_SESSION['is_login'])){
                echo '<li class="nav-item custom-nav-item hide"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li> <li class="nav-item custom-nav-item hide"><a href="logout.php" class="nav-link">Logout</a></li>';
              } else {
                echo '<li class="nav-item custom-nav-item hide"><a href="#login" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li> <li class="nav-item custom-nav-item hide"><a href="#signup" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>';
              }
                     ?> 
        </ul> 
      </div>
             <?php  
              if (isset($_SESSION['is_login'])){
                    $stuEmail = $_SESSION['stuLogEmail'];
                    $sql = "SELECT stu_name FROM student where stu_email='$stuEmail'";
                    $result = $conn->query($sql);
                     $row = $result->fetch_assoc();
                     $stu_name = $row["stu_name"];
                echo '<a href="logout.php" class="nav-link my-content"> Log Out</a>
                           <a class="nav-link button1 btn ml-auto my-content" href="student/studentProfile.php">
                               <i class="fas fa-user" style="margin-right:0.5em"></i>'.$stu_name.'</a>';
              } else {  
                echo '<a href="#login" class="nav-link my-content" data-toggle="modal" data-target="#stuLoginModalCenter"> Log in</a>
                           <a class="nav-link button1 btn ml-auto my-content" href="#signup" data-toggle="modal" data-target="#stuRegModalCenter">
                               <i class="fas fa-user" style="margin-right:0.5em"></i>Join for Free</a>';
              }   
              
                    ?>
      </div>
    </nav> <!-- End Navigation -->