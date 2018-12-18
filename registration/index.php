<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
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

    //
    <?php
  //      if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    //        $id = $_POST["recipe_id"];
            
    //        $sql = "INSERT INTO favorites ${}"
      //  }
    //?>






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
    <!-- end of navbar -->
    <!-- start of jumbotron -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 jumbotron">
                <div class="text">
                    <h1>Welcome</h1>
                    <p> InTheKitchen lets the user search for new recipes and search for resturants nearby</p>
                    <p>Developed by Team Pear</p>
                    <a href="#" class="btn btn-lg btn-success">Youtube</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-container">
        <div class="row my row">
            <div class="col-md-12 col-sm-12 Search">

                <!--  <div class="input-group mb-3 Search-Box">
                    <input  id="foodie" type="text" class="form-control" placeholder="what food are you craving?" aria-label="search box" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                        
                  -->
                <div class="input-group col-mb-6 Search-Box">
                    <form class="form form-inline md-form me-auto mb-4">
                        <label></label>
                        <input class="post-id-input form-control mr-sm-2" type="text" placeholder="what are you feeling?" aria-label="Search" aria-label="Search">
                        <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit" name="button" "btn btn-outline-secondary">Search</button>
                    </form>
                    <div class="input-group-append">


                    </div>
                </div>


                <div class="output"></div>

                <!-- Handlebars template  -->
                <script id="recipes-template" type="text/x-handlebars-template">
                    <ul class="recipe-list">
                        {{#each recipes}}
                            <li class="recipe">
                            <h2><u>{{this.title}}</u></h2>
                            <img   src="{{this.image_url}}" id="food" />
                            <h3><u>Publisher:</u>{{this.publisher}}</h3>
                            <h3><u>Description:</u> <a href="{{source_url}}">{{this.source_url}}</a></h3>
                            
                          
                            <form action="favfunction.php" method="GET">
                               <input name="title" hidden value="{{this.title}}"/>
                               <input name="image_url" hidden value="{{this.image_url}}"/>
                               <input name="publisher" hidden value="{{this.publisher}}"/>
                               <input name="source_url" hidden value="{{this.source_url}}"/>
                               
                                <button type="submit" class="btn btn-primary">Favourite</button>
                            </form>
                            
                            
                            </li>
                            
                        {{/each}}
                  </ul>
                </script>






            </div>
        </div>

    </div>

    <div class="footer fixed-bottom">

        <div class="container">
            <footer>&copy; TeamPear<br /></footer>

        </div>


    </div>






    <!--
                              Axios is a librays for sending ajax requests.
                              link to documentaion: https://github.com/axios/axios
                             -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js" charset="utf-8"></script>
    <!--
                              Handlebars is a client side template engine.
                              link to documentaion:https://handlebarsjs.com/
                             -->
    <script src="handlebars-379172e.js" charset="utf-8"></script>
    <script src="SearchAPI.js" charset="utf-8"></script>


</body>

</html>
