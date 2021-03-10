<?php
include 'connection.php';
$conn = new Connect();


$userid = 1;

    $query = "SELECT * FROM students where id = ".$userid;
    $result = $conn->connection->prepare($query);
    $result->execute();
    $name = $result->fetch();

    echo $name->firstName;

    //return $userid;

