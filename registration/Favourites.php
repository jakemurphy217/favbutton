<?php
session_start();
include_once "./database.php";
//header('location:Login.php');
$con = mysqli_connect('localhost','root','','registration');
if(!$con){
  die("db error");
}

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM favorites WHERE user_id = '$user_id'";
//$result = mysqli_query($con, $query);
$result = $db->query($query)->fetchAll();

////var_dump($result);
//foreach($result as $fav){
//    $recepie_id = $fav["recipe_id"];
    
//}
//    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Favourites</title>
  <meta charset="utf-8">
  
  
  
  <!-- so bootstrap can recongise between a mobile and destop device -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- linking the bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <!-- JQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <!-- Latest JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
   <!-- my CSS -->
  <link rel="stylesheet" href="style.css.css" type="text/css">
</head>
<body>
   
   
    
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: aquamarine">
        
       <a class="navbar-brand" href="index.php" style="max-width: 30%;">
            <img src="logo.png" class="img-fluid">InTheKitchen
       </a>
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"> </span>
        </button>
        
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            
             <li class="nav-item">
                <a href="Favourites.php" class="nav-link">Favourites</a>
            </li>
            
             <li class="nav-item">
                <a href="zomato.php" class="nav-link">Restaurants</a>
            </li>
            
             <li class="nav-item">
                <a href="Account.php" class="nav-link">About</a>
            </li>
            
            <li class="nav-item">
                    <a href="login.php" class="nav-link">logout</a>
                </li>
        </ul>
    </div>
    
    </nav>
    
    
    
    
    

<div class="container-fluid">
 
 
 
<?php 
    
foreach($result as $fav){
    $title  = $fav["title"];
    echo $title;
    
}    
    
    
?>
 
 
 <div class="output"></div>

                <!-- Handlebars template  -->
                <script id="recipes-template" type="text/x-handlebars-template">
                    <ul class="recipe-list">
                        {{#each recipes}}
                            <li class="recipe">
                            
                            
                            <h2><u>{{this.}}</u></h2>
                            <img   src="{{this.image_url}}" id="food" />
                            <h3><u>Publisher:</u>{{this.publisher}}</h3>
                            <h3><u>Description:</u> <a href="{{source_url}}">{{this.source_url}}</a></h3>
                             
                            </li>
                            
                        {{/each}}
                  </ul>
                </script>
 
 
 
 
 
 
 
</div>

<div class="footer fixed-bottom">
       
           <div class="container">
                   <footer>&copy; TeamPear<br/></footer>
               
           </div>
        
        
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js" charset="utf-8"></script>
<!--
                              Handlebars is a client side template engine.
                              link to documentaion:https://handlebarsjs.com/
                             -->
<script src="handlebars-379172e.js" charset="utf-8"></script>
<script src="SearchAPI.js" charset="utf-8"></script>


</body>
</html>