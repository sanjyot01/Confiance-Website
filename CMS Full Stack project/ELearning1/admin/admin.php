<?php 
include('../dbConnection.php');
if(!isset($_SESSION)){ 
  session_start(); 
}
// setting header type to json, We'll be outputting a Json data
header('Content-type: application/json');

 // Admin Login Verification
 if(!isset($_SESSION['is_admin_login'])){
   if(isset($_POST['checkLogemail']) && isset($_POST['adminLogEmail']) && isset($_POST['adminLogPass'])){
     $adminLogEmail = mysqli_real_escape_string($conn, $_POST['adminLogEmail']);
     $adminLogPass = mysqli_real_escape_string($conn, $_POST['adminLogPass']);
     $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email='".$adminLogEmail."'";
     $result = $conn->query($sql);
     $row = $result->num_rows;
     
     if($row === 1)
     {
     
          while($num= mysqli_fetch_assoc($result))
          {
           if(password_verify ($adminLogPass, $num['admin_pass']))
           {
              $_SESSION['is_admin_login'] = true;
              $_SESSION['adminLogEmail'] = $adminLogEmail;
              echo json_encode($row);
           }
            else {
                    echo json_encode(0);
                 }
          }
     }    
         else if($row === 0) 
         {
             echo json_encode($row);
         }   
   } 
 }

?>