<?php
session_start();
include_once "./database.php";

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $username = $_POST["name"];
  $password = $_POST["password"];

    
    
  
  if(!empty($username) && !empty($password)) { 
    
    $query = "SELECT * FROM usertable WHERE name = '$username' && password = '$password'";
    $result = $db->query($query)->fetchAll();

  
    if(count($result) == 1) {
        $user = $result[0];
        
        $_SESSION["user_id"] = $user["id"];
        header('location:index.php');
    } else {
        $error = "cant login";
    }
  }
    
}
?>
<html>

<head>
    <title> login and reg </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="container">
        <div class="login-box">
            <div class="row">

                <div class="col-md-6 login-left">
                    <h2> Login here</h2>
                    <form action="login.php" method="POST">
                       <php? echo $error; ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="name" class="from-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="from-control" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary"> Login </button>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                    <h2> Register here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="name" class="from-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="from-control" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary"> Register </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    
</body>




</html>
