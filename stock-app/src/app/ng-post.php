<?php
    header('Access-Control-Allow-Origin: http://localhost:4200');
    // header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');

    require('connectdb.php');
    require('ticker_db.php');
    require('account_db.php');

    session_start();
    var_dump($_SESSION);
    var_dump($_COOKIE);
    
    echo 'hello there';

?>