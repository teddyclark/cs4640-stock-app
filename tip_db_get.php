<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');

    $username = 'root';//'root';
    $password = '';//'cs4640';
    $host = 'localhost';//'34.86.26.34';
    $dbname = 'stock_app_db';

    $dsn = "mysql:host=$host;dbname=$dbname";
    $db = "";

    /** connect to the database **/
    try
    {
        $db = new PDO($dsn, $username, $password);
        echo "<p>You are connected to the database</p>";
    }

    catch (PDOException $e)     // handle a PDO exception (errors thrown by the PDO library)
    {
        $error_message = $e->getMessage();
        echo "<p>An error occurred while connecting to the database: $error_message </p>";
    }
    catch (Exception $e)       // handle any type of exception
    {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }

    $getdata = $_GET['str'];
    $request = json_decode($getdata);

    $data = [];
    foreach($request as $k => $v) {
        $temp = "$k => $v";
        $data[0]['get_'.$k] = $v;
    }

    global $db;

    $type = $data[0]['get_type'];
    $desc = $data[0]['get_desc'];

    $query = "SELECT * FROM tips";

    $statement = $db->prepare($query);

    $statement->execute();
    $statement->closeCursor();

?>