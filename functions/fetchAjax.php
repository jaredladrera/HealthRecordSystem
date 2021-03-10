<?php

include 'functionsClass.php';
$obj = new DataOperation;

if(isset($_POST["key"])) {
    $key = $_POST['key'];

    // this is for register the new user
    if($key == 'registerUser') {
        $message = "You are now register! Please wait to confirm your account by the admin. Thank you!";

        $data = array(
            "name" => $_POST['name'],
            "address" => $_POST['address'],
			"contact_number" => $_POST['contactNumber'],
			"gender" => $_POST['gender'],
			"id_number" => $_POST['idNumber'],
			"username" => $_POST['username'],
			"password" => $_POST['password'],
			"middle_name" => $_POST['middle'],
			"lastname" => $_POST['lastname'],
			"age" => $_POST['age'],
			"email" => $_POST['email'],
            "account_status" => "default"
        );
    } //end

    $obj->insertAny('accountinformation', $data, $message);

    //exit($_POST['age'] .' ' . $_POST['email']);

} else {
    exit("Key is not set");
}

