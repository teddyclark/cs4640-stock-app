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

?>