<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>STOCKS | Login</title>

        <link rel='stylesheet' href="styles/style.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <style>
        body {
            background-color: #EDF5E1;
        }

        .navbar-brand {
            font-size: 34px;
        }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#">STOCKS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <!--<li class="nav-item">
                        <a class="nav-link" href="index.html">Global News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="personal.html">My Stocks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="preferences.html">Preferences</a>
                    </li>-->
                    <li class='nav-item'>
                            <a class='nav-link' href='signup.php'>Sign Up</a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <input class="nav-search" type="text" placeholder="Search Stocks">
                    </li>-->
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="column" id="form">
                <h2>Login</h2>
                <div class="form-row">
                    <div class="col">
                        <form action="login.php" method="post">
                            Email Address: <input type="text" name="email" required /> <br/>
                            Password: <input type="password" name="pwd" required /> <br/>
                            <input type="submit" value="Submit" class="btn btn-secondary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
            require('connectdb.php');
            require('account_db.php');

            function authenticate() {
                global $mainpage;

                $hash = NULL;
                $email = NULL;

                if(isset($_POST['email'])) {
                    $email = $_POST['email'];
                }

                $hash = get_password($email);

                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $pwd = trim($_POST['pwd']);
                    $hash = htmlspecialchars($pwd);
                    $hash = crypt($hash, "cs4640");

                    $db_pwd = get_password($email);
                    $db_pwd = substr(htmlspecialchars($db_pwd), 0, -11);


                    if($hash == $db_pwd) {
                        $_SESSION['email'] = $email;
                        $_SESSION['user'] = get_userId($email);
                        header("Location: ".$mainpage);
                    }
                    else {
                        echo "<span class='msg'>Password: ".$hash.". Actual: ".$db_pwd."</span><br/>";
                        echo "<span class='msg'>Username and password do not match</span><br/>";
                    }
                }
            }
            /*
            function reject($entry) {
                echo 'Attempt Failed. Please <a href="login.php">Log in</a>';
                exit();
            }

            if($_SERVER['REQUEST_METHOD'] == "POST" && strlen($_POST['email']) > 0) {
                echo $_POST['email'];
                $email = trim($_POST['email']);

                // check if email is valid
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    reject('Email');
                }

                if(isset($_POST['pwd'])) {
                    $pwd = trim($_POST['pwd']);

                    $_SESSION['user'] = $user;

                    $hash = htmlspecialchars($password);
                    $hash = crypt($hash, "cs4640");

                    $_SESSION['pwd'] = $hash;
                    header('Location: mainpage.php');
                }
            }*/

            $mainpage = "mainpage.php";
            authenticate();
        ?>
    </body>
</html>
