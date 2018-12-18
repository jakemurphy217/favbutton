<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- bootstrap css -->

 <!-- google fonts -->
 <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
 
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
  <link rel="stylesheet" href="Stylezom.css" type="text/css">
  <link rel="stylesheet" href="style.css.css" type="text/css">
  
 
 
 
 <title>Restaurants</title>
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
                <a href="Nearest.php" class="nav-link">Restaurants</a>
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

 <div class="container">
  <div class="row">
   <div class="col">
    <img src="imgage/food.jpg.jpg" class="d-block mx-auto" alt="">
    <div class="feedback alert alert-danger text-center text-capitalize">please enter city</div>
    <form id="searchForm" class="my-4">
     <!-- form group -->
     <div class="form-group my-3">
      <select class="custom-select text-capitalize" id="searchCategory">


      </select>
     </div>
     <!-- end of form group -->

     <!-- input group -->
     <div class="input-group">
      <input type="text" class="form-control text-capitalize" id="searchCity" placeholder="enter city....">
      <div class="input-group-append">
       <button id="cityBtn" type="submit" class="btn redBtn text-capitalize">search</button>
      </div>
     </div>
     <!-- input group -->


    </form>

    <img src="/imgage/loader.gif" class="loader" alt="">
   </div>
  </div>
 </div>
 <!-- restaurant section -->

 <section class="py-5">
  <div class="container">
   <div class="row" id="restaurant-list">
    <!-- item -->
   

    </div>
   </div>
 </section>
 



 <!-- jquery -->
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 <!-- bootstrap js -->

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <!-- script js -->
 <script src="zomato.js"></script>
 
 <div class="footer fixed-bottom">
       
           <div class="container">
                   <footer>&copy; TeamPear<br/></footer>
               
           </div>
        
        
    </div>
</body>

</html>