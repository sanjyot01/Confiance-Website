<?php 
if(!isset($_SESSION)){ 
  session_start(); 
}
include_once('../dbConnection.php');

// setting header type to json, We'll be outputting a Json data
header('Content-type: application/json');

// Checking Email already Registered
if(isset($_POST['stuemail']) && isset($_POST['checkemail'])){
  $stuemail = $_POST['stuemail'];
  $sql = "SELECT stu_email FROM student WHERE stu_email='".$stuemail."'";
  $result = $conn->query($sql);
  $row = $result->num_rows;
  echo json_encode($row);
  }
 
  // Inserting or Adding New Student
  if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stuphone']) && isset($_POST['stupass'])){
    $stuname = mysqli_real_escape_string($conn, $_POST['stuname']);
    $stuemail = mysqli_real_escape_string($conn,$_POST['stuemail']);
    $stuphone = mysqli_real_escape_string($conn,$_POST['stuphone']);
    $stupass = mysqli_real_escape_string($conn,$_POST['stupass']);
    $mash = password_hash($stupass, PASSWORD_ARGON2ID);
    $sql = "INSERT INTO student ( stu_name, stu_email, stu_phone, stu_pass, date) VALUES ('$stuname', '$stuemail', '$stuphone', '$mash', current_timestamp())";
    if($conn->query($sql) == TRUE){
      echo json_encode("OK");
    } else {
      echo json_encode("Failed");
    }
  }

  // Student Login Verification
  if(!isset($_SESSION['is_login'])){
    if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])){
      $stuLogEmail = mysqli_real_escape_string($conn, $_POST['stuLogEmail']);
      $stuLogPass = mysqli_real_escape_string($conn,$_POST['stuLogPass']);
      //$sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email='".$stuLogEmail."' AND stu_pass='".$stuLogPass."'";
      $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email='".$stuLogEmail."'";
      $result = $conn->query($sql);
      $row = $result->num_rows;
      
      if($row === 1)
      {
          while($num= mysqli_fetch_assoc($result))
          {
          if(password_verify ($stuLogPass, $num['stu_pass']))
           {      
             $_SESSION['is_login'] = true;
             $_SESSION['stuLogEmail'] = $stuLogEmail;
             echo json_encode("OK");
           }
           else
                {
                  echo json_encode("Failed");
                }
          } 
      } 
      else
      {
        echo json_encode("Failed");
      }
    }
  }

?>