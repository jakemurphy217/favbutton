<?php
session_start();
include_once "./database.php";
    

if(isset($_POST["submit"])){
 
  $username = $_POST["name"];
  $password = $_POST["password"];
  
  if(!empty($username) && !empty($password)){
    $username = mysqli_real_escape_string($con, $username); 
    $password = mysqli_real_escape_string($con, $password);
    
    $query = "SELECT * FROM usertable WHERE name = '$username' && password = '$password'";
    $result = $db->query($query)->fetchAll();
      var_dump($result);
  
    if(count($result) == 1) {
        $user = $result[0];
        var_dump($user);
        $_SESSION["user_id"] = 1;
    
     // header('location:index.php');
    }else{
       header('location:Login.php');
    }
  }
}else {
  echo "Something went wrong";
}
      
?>