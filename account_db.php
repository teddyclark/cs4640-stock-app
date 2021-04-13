<?php

  function addAccount($fname, $lname, $email, $password){
    global $db;
    $query = "INSERT INTO accounts VALUES(DEFAULT, :fname, :lname, :email, :password)";
    $statement = $db->prepare($query);

    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);

    $statement->execute();
    $statement->closeCursor();

  }

function get_password($email) {
    global $db;

    $query = "SELECT password FROM accounts WHERE email=:email LIMIT 1";

    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();

    $results = $statement->fetchAll();
    $statement->closecursor();


    foreach($results as $result) {
        return($result['password'] . "<br/>");
    }

}

function get_name($email) {
    global $db;

    $query = "SELECT fname, lname FROM accounts WHERE email=:email LIMIT 1";

    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();

    $results = $statement->fetchAll();
    $statement->closecursor();

    foreach($results as $result) {
        return($result['fname'] . " " . $result['lname'] . "<br/>");
    }
}

function get_userId($email) {
    global $db;

    $query = "SELECT user_id FROM accounts WHERE email=:email LIMIT 1";

    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();

    $results = $statement->fetchAll();
    $statement->closecursor();

    
    foreach($results as $result) {
        return($result['user_id'] . "<br/>");
    }
}

?>
