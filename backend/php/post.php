<?php

    require "config.php";
    $connection = new PDO($dsn, $username, $password, $options);

    $new_user = array(
    "uuid" => $_POST['uuid'],
    "score"  => $_POST['score'],
    "Sdate"     => $_POST['date'],
    );

    $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "users",
        implode(", ", array_keys($new_user)),
        ":" . implode(", :", array_keys($new_user))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
    


    echo $new_user["uuid"];

  
?>