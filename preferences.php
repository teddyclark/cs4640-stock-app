<?php
    session_start();
    var_dump($_SESSION);
    require('connectdb.php');
    require('ticker_db.php');
    require('account_db.php');

    //var_dump($_COOKIE);
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $ticker = $_POST['ticker'];

        if(isset($_POST['submit'])){
          if(isset($_POST['add'])) {
            addTicker($ticker);
            header("Refresh:0");
          }
          else {
            removeTicker($ticker);
            header("Refresh:0");
          }
        }
    }
?>

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

    <title>Preferences | Stock App</title>

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
      getTickers($_SESSION['email']);
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
                <a class="nav-link" href="mainpage.php">Global News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="javascript:event.target.port=4200" href="localhost">Tips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="preferences.php">Preferences</a>
            </li>
            <li class="nav-item">
                <input class="nav-search" type="text" placeholder="Search Stocks">
                <button type="submit" onclick="addStock()">Submit</button>
            </li>
        </ul>
        </div>
    </nav>

    <div class="container">
        <div class="column" id="form">
            <h2>Stock Search</h2>
            <div class="form-row">
                <div class="col">
                    <form action="preferences.php" method="post">
                        Ticker: <input type="text" name="ticker" /> <br/>
                        <input type="checkbox" id="ch1" name="add" value="1">
                        <label for="ch1"> Check here to add to list, leave unchecked to remove from list</label><br>
                        <input name="submit" type="submit" value="Submit" class="btn btn-secondary" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1>My Profile</h1>
                <ul class="my-stocks">
                    <li>Name: <?php echo get_name($_SESSION['email']) ?></li>
                    <li>Email: <?php echo $_SESSION['email'] ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>My Stocks</h1>
        <?php
        $cookie = json_decode($_COOKIE[get_userId($_SESSION['email'])]);
        foreach($cookie as $key=>$value) {            
            foreach($value as $name=>$ticker) {
                if($name == "ticker") {
                    echo $ticker . "<br/>";
                }
            }
        }
        ?>;
    </div>
    
    <script>
    //arrow function
    let check = val => /^[a-zA-Z]+$/.test(val);

    //anonymous function
    var t = function (val) {return listData.indexOf(val)};

    function addStock() {
      var val = document.getElementsByClassName('nav-search')[0].value.toUpperCase();
      if (listData.includes(val)) {
        alert('You are already tracking this stock');
      }
      else if (check) {
        listData.push(val);
        let listItem = document.createElement('li');
        listItem.id = val + 'li';
        listItem.innerHTML = val + ' &nbsp &nbsp';

        listItemButton = document.createElement('button');
        listItemButton.id = val + 'btn';
        listItemButton.className = 'btn btn-danger';
        listItemButton.innerHTML = 'Remove';

        listItemButton.addEventListener('click', function() {
          listData.splice(t(val), 1);
          listItem.remove(document.getElementById(this.id.replace('btn', '')));
        });

        listItem.appendChild(listItemButton);
        document.getElementsByClassName('my-stocks')[1].appendChild(listItem);
      }
      else {
        alert('Please submit a valid stock ticker symbol.');
      }
    }

    function makeList() {
      let listContainer = document.createElement('div'),
      listRow = document.createElement('div'),
      listCol = document.createElement('div'),
      listElement = document.createElement('ul');

      //stockHead = document.createElement('h1');
      //stockHead.innerHTML = 'My Stocks';

      stockDesc = document.createElement('p');
      stockDesc.innerHTML = 'To add a stock, search for the ticker in the top right and hit submit!'

      listContainer.className = 'container';
      listRow.className = 'row';
      listCol.className = 'col';
      listElement.className = 'my-stocks';

      document.getElementsByTagName('body')[0].appendChild(listContainer);
      listContainer.appendChild(listRow);
      listRow.appendChild(listCol);
      listCol.appendChild(stockHead);
      listCol.appendChild(stockDesc);
      listCol.appendChild(listElement);
  }

  makeList();
  </script>
  </body>
</html>
