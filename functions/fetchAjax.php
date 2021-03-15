<?php

include 'functionsClass.php';
include 'mysqliConnection.php';
$obj = new DataOperation;
$database = new Database;

if(isset($_POST["key"])) {
    $key = $_POST['key'];

    // this is for register the new user
    if($key == 'registerUser') :
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
            "account_account_status" => "user"
        );
        $obj->insertAny('accountinformation', $data, $message);
    endif; //end


    if ($key == 'login') :
		$account_status = '';
		$username = $database->conn->real_escape_string($_POST['username']);
		$password = $database->conn->real_escape_string($_POST['password']);

				$query = $database->conn->query("SELECT * from accountinformation where username = '$username' AND password = '$password'");

				if ($query) {
					
					if ($query->num_rows > 0) 
					{
						
						$data = $query->fetch_array();

						if ($data['account_status'] == 'admin') 
						{
							$_SESSION['uid'] = $data['id'];
							$_SESSION['account_status'] = $data['account_status'];
							//header("Location:../pages/administrator/index.php");
							exit("admin");
						}
						else if($data['account_status'] == 'nurse')
						{
                            $_SESSION['uid'] = $data['id'];
							$_SESSION['account_status'] = $data['account_status'];
                           
							exit('nurse');
						}
						else if($data['account_status'] == 'user')
						{
							exit('Your account is waiting for approval by admin');
						}
					}
					else{ exit("Username and Password not match!"); }							
					
				}else{exit("error");}

	endif;

} else {
    exit("Key is not set");
}

