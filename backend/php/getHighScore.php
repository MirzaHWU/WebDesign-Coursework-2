<?php

    class User {
        public $name;
        public $score;

        function __construct($name, $score) {
            $this->name = $name;
            $this->score = $score;
        }
    }

    require "config.php";
    $connection = new PDO($dsn, $username, $password, $options);

    $r = array();
    $stmt = $connection->query("SELECT * FROM users ORDER BY CAST(score AS UNSIGNED), score;");
    while ($row = $stmt->fetch()) {

        array_push($r, new User($row['uuid'], $row['score']));
    }

  echo json_encode($r)
?>