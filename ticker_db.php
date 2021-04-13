<?php

  function addTicker($ticker) {
    global $db;

    $query = "INSERT INTO tickers VALUES(:userid, :ticker)";
    $statement = $db->prepare($query);

    $statement->bindValue(':userid', $_SESSION['user']);
    $statement->bindValue(':ticker', $ticker);

    $statement->execute();
    $statement->closeCursor();
  }

  function removeTicker($ticker) {
    global $db;

    $query = "DELETE FROM tickers WHERE user_id=:userid";
    $statement = $db->prepare($query);

    $statement->bindValue(':userid', $_SESSION['user']);
    $statement->bindValue(':ticker', $ticker);

    $statement->execute();
    $statement->closeCursor();
  }

  function getTickers($email) {
    global $db;

    $query = "SELECT ticker FROM tickers WHERE user_id=:userid";

    $statement = $db->prepare($query);
    $statement->bindValue(':userid', get_userId($email));
    $statement->execute();

    $results = $statement->fetchAll();
    $statement->closecursor();

    $tickers = [];

    foreach($results as $result) {
        array_push($tickers, $result);
    }

    $cookie_name = $email;
    $cookie_value = $tickers;
    setcookie($cookie_name, $cookie_value, time() + 86400, "/"); //1 day
  }
?>
