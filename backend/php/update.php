<?php

    require "config.php";
    $connection = new PDO($dsn, $username, $password, $options);

    $new_user = array(
    "score"  => $_POST['score'],
    "Sdate"     => $_POST['date'],
    "uuid" => $_POST['uuid']
    );

    $sql = sprintf(
        "UPDATE users SET score=:score, Sdate=:Sdate WHERE uuid=:uuid"
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
    


    echo $sql;

  
?>