<?php 

include "mysqliConnection.php";
$database = new Database;

if(isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if(empty($username)) {
        header("Location: ../index.php?error=Username is required");
        exit();
    } elseif(empty($password)) {
        header("Location: ../index.php?error=Password is required");
        exit();
    } else {
        $query = "SELECT * FROM accountinformation WHERE username='$username' AND account_password='$password'";
        $res = $database->conn->query($query);

        // Time Login
        // get current date
        $now = new DateTime();
        $current_date = $now->format('D F j Y');    // MySQL datetime format
        

        //get current time
        date_default_timezone_set('Asia/Manila');
        $current_time = date('g:i:a');

        if($res->num_rows === 1) {
            $row = $res->fetch_array();
            if($row['username'] === $username && $row['account_password'] === $password) {
                session_start();

                if($row['account_status'] === 'admin') {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['account_type'] = $row['account_status'];

                    $sql = $database->conn->query("INSERT INTO logs (date_in, time_in, login_id, login_username) VALUES ('$current_date', '$current_time', '".$row['id']."', '".$row['username']."')");
                    if($sql) {
                        // echo $database->conn->insert_id;
                         $_SESSION['logs_id'] = $database->conn->insert_id;
                        header("Location: ../pages/administrator/index.php");
                    } else {
                        echo $sql;
                    }
                    exit();
                } elseif ($row['account_status'] === 'nurse') {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['account_type'] = $row['account_status'];

                    $sql = $database->conn->query("INSERT INTO logs (date_in, time_in, login_id, login_username) VALUES ('$current_date', '$current_time', '".$row['id']."', '".$row['username']."')");
                    if($sql) {
                        // echo $database->conn->insert_id;
                         $_SESSION['logs_id'] = $database->conn->insert_id;
                        header("Location: ../pages/nurse/index.php");
                    } else {
                        echo $sql;
                    }
                    exit();
                } elseif ($row['account_status'] === 'user') {
                    header("Location: ../index.php?error=Your account is waiting for approval");
                    exit();
                }
            }
        } else {
            header("Location: ../index.php?error=Incorrect Username and Password");
            exit();
        }
    }

} else {
    header("Location: ../../index.php");
    exit();
}



?>