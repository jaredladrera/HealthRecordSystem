<?php
session_start();
include "mysqliConnection.php";
$database = new Database;

$logs_id = $_SESSION['logs_id'];

 // Time Login
 // get current date
 $now = new DateTime();
 $current_date = $now->format('D F j Y');    // MySQL datetime format

 //get current time
date_default_timezone_set('Asia/Manila');
$current_time = date('g:i:a');

$sql = $database->conn->query("UPDATE logs SET date_out='$current_date', time_out='$current_time' WHERE id = '$logs_id'");

if($sql) {
    session_destroy();
    header("location:../index.php");
} else {
    echo 'Error Queries!';
}
?>