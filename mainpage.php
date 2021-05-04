<html>
    <head>
    <meta charset="UTF-8">

    <!-- 2. include meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Bootstrap is designed to be responsive to mobile.
    Mobile-first styles are part of the core framework.

    width=device-width sets the width of the page to follow the screen-width
    initial-scale=1 sets the initial zoom level when the page is first loaded
    -->

    <meta name="author" content="your name">
    <meta name="description" content="include some description about your page">

    <title>Stock App</title>

    <!-- 3. link bootstrap -->
    <!-- if you choose to use CDN for CSS bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!--
    Use a link tag to link an external resource.
    A rel (relationship) specifies relationship between the current document and the linked resource.
    -->

    <!-- if you choose to download bootstrap and host it locally -->
    <!-- <link rel="stylesheet" href="path-to-your-file/bootstrap.min.css" /> -->

    <!-- include your CSS -->
    <link rel="stylesheet" href="styles/style.css">

    <!-- including fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">

  </head>

  <body>

    <?php 
        session_start();
    ?>
    <?php
        var_dump($_SESSION);
        if(isset($_SESSION['user'])) {
    ?>
        <p>Welcome <?php echo $_SESSION['user'];?>!</p>
    <?php
        }
        /*
        else {
            header('Location: login.php');
        }*/
    ?>

  
    <!-- CDN for JS bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!-- for local -->
    <!-- <script src="jquery.min.js"></script> -->
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->


    <!--  uncomment the following code when customizing your page -->
    <script>
    // document ready event is fired when DOM has been loaded
    $(document).ready(function() {
       // do DOM manipulation, set header's height
       $('.header').height($(window).height()/2.5);
     })
    </script>

    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">STOCKS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Global News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="javascript:event.target.port=4200" href="localhost">Tips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="preferences.php">Preferences</a>
            </li>
            <li class="nav-item">
                <input class="nav-search" type="text" placeholder="Search Stocks">
            </li>
        </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1>Dow Jones Industrial Average</h1>
                <div class="stock chart">
                    <img id="dow" class="stock-img" width="700" src="images/dow jones.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="article">
                    <h2>Article One</h2>
                    <p>Here is a short summary of the article.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="article">
                    <h2>Article Two</h2>
                    <p>Here is a short summary of the article.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="article">
                    <h2>Article Three</h2>
                    <p>Here is a short summary of the article.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="article">
                    <h2>Article Four</h2>
                    <p>Here is a short summary of the article.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
    var dow = document.getElementById('dow');
    dow.addEventListener('click', function() {
      window.open("./dow.html");
    })
    </script>
  </body>
</html>
