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

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    $data = [];
    foreach($request as $k => $v) {
        $temp = "$k => $v";
        $data[0]['post_'.$k] = $v;
    }


    global $db;

    $type = $data[0]['post_type'];
    $desc = $data[0]['post_desc'];

    $query = "INSERT INTO tips VALUES(DEFAULT, :type, :desc)";

    $statement = $db->prepare($query);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':desc', $desc);

    $statement->execute();
    $statement->closeCursor();

    /*
    function getTips() {
        global $db;
    
        $query = "SELECT * FROM tips";
    
        $statement = $db->prepare($query);
        $statement->execute();
    
        $results = $statement->fetchAll();
        $statement->closecursor();
    
        $tips = [];
    
        foreach($results as $result) {
            return ($result['type'] . ": " . $result['description'];
        } 
    
    }*/

?>