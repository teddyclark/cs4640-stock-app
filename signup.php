<!--- 
Signup Page 
-->

<?php
    require('connectdb.php');
    require('account_db.php');

    $pwd = '';
    $fname = '';
    $lname = '';
    $email = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        
        $hash = htmlspecialchars($pwd); 
        $hash = crypt($hash, "web4640");

        if(isset($_POST['submit'])){
            addAccount($fname, $lname, $email, $hash);
        }
    }



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Dela Rosa, Novkovic">
<meta name="description" content="Landing page for our recipe db">      
<title>Stock App</title>

<!--Link to our stylesheet we created-->
<link rel='stylesheet' href="styles/style.css">

<!-- We used bootstrap for the navigation bar at
   https://getbootstrap.com/docs/4.0/components/navbar/ -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
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
                <a class="nav-link" href="personal.html">My Stocks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="preferences.html">Preferences</a>
            </li>
            <li class='nav-item'>
                    <a class='nav-link' href='login.html'>Login</a>
            </li>
            <li class="nav-item">
                <input class="nav-search" type="text" placeholder="Search Stocks">
            </li>
        </ul>
        </div>
    </nav>

    <div class='container'>    
        <div class='column' id='form'>
        <h2>Create Account</h2>
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" method='post'>
            <div class="form-row">
                <div class="col">
                    First Name: 
                    <input type="text" name="fname" class='form-control' placeholder="first name..." required>
                </div>
                <div class="col">
                    Last Name: 
                    <input type="text" name="lname" class='form-control' placeholder="last name..." required>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    Email: 
                    <input type="email" name="email" class='form-control' placeholder="email address" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    Password:
                    <input type="password" name="password" class="form-control" placeholder="password..." required/>
                </div>
            </div>
            
            <input id='sbtn' name="submit" type="submit" value="Sign Up" class="btn btn-secondary" />
        </form>
        </div>
    </div>

    <script> 
        function validateSignUp() {
            p = password.value.length <= 0;
            f = fname.value.length <= 0;
            l = lname.value.length <= 0;
            e = email.value.length <= 0;

            // check for empty fields
            if(p || f || l || e) {
                alert ("Please fill the missing field(s).");
                return false;
            }
            // ensure user names match password
            else if(username.value != tempuser || password.value != temppwd){ 
                alert("The username or password you've entered is incorrect.");
                
            }
            // redirect to main page if successful
            else if(username.value == tempuser && password.value == temppwd){
                window.location.href = "index.html"; // this will be replaced by the appropriate page (i.e. my account or something)
                return false;
            }
        }   
        </script>
</body>