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

        if($res->num_rows === 1) {
            $row = $res->fetch_array();
            if($row['username'] === $username && $row['account_password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['account_type'] = $row['account_status'];

                if($row['account_status'] === 'admin') {
                    header("Location: ../pages/administrator/index.php");
                    exit();
                } elseif ($row['account_status'] === 'nurse') {
                    header("Location: ../pages/nurse/index.php");
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