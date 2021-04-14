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
			"account_password" => $_POST['password'],
			"middle_name" => $_POST['middle'],
			"lastname" => $_POST['lastname'],
			"age" => $_POST['age'],
			"email" => $_POST['email'],
            "account_status" => "user"
        );
        $obj->insertAny('accountinformation', $data, $message);
    endif; //end

    if($key == 'save_patient'): 

        $message = "New patient save";

        $data = array(
            "name" => $_POST['name'],
            "address" => $_POST['address'],
			"contact_number" => $_POST['contact_number'],
			"gender" => $_POST['gender'],
			"id_number" => $_POST['id_number'],
			"issue" => $_POST['issue'],
			"lastname" => $_POST['lastname'],
			"age" => $_POST['age'],
			"parent_contact" => $_POST['parent_contact'],
            "guardian" => $_POST['guardian'],
            "issue_status" => $_POST['issue_status'],
            "date_issue" => $_POST['date_issue'],
            "time_issue" => $_POST['time_issue'],
            "note" => $_POST['note']
        );
        $obj->insertAny('patients', $data, $message);

    
    endif;

    if($key == "updateAccount") :
        $id = $_POST['myId'];

        $data = array(
			'name' => $_POST['name'],
			'lastname' => $_POST['lastname'],
			'middle_name' => $_POST['middleName'],
			'gender' => $_POST['gender'],
			'age' => $_POST['age'],
			'username' => $_POST['username'],
			'account_password' => $_POST['password'],
			'contact_number' => $_POST['contactNumber'],
			'id_number' => $_POST['idNumber'],
			'email' => $_POST['email'],
            'address' => $_POST['address']
		);

        $obj->updateAny('accountinformation', $data, $id);
		exit('Updated Successfully');
    
    endif;

    if($key == "test") : 
        $name = $_POST['name'];
        exit($name);
    endif;

    if($key == "updateAccountStatus") :

        $new_status = $_POST['status']; 
        $id = $_POST['id'];
        
        $fields = array(
            "account_status"=>$new_status,
        );

        $obj->updateAny('accountinformation', $fields, $id);
        exit("Please wait...");

    endif;

    if($key == 'deleteAccount') :
        $id = $_POST['id'];

       $sql = $database->conn->query("DELETE FROM accountinformation where id = '$id'");

       if($sql) {
           exit("Deleted Successfully");
       } else {
           exit($sql);
       }
       
    endif;

    if($key == 'getUpdatingData') :
        $id = $_POST['id'];

        $sql = $database->conn->query("SELECT * FROM patients WHERE id = '$id'");
       if($row = $sql->fetch_array()) {

           $data = array(
               'name' => $row['name'],
               'lastname' => $row['lastname'],
               'id_number' => $row['id_number'],
               'issue' => $row['issue'],
               'contact_number' => $row['contact_number'],
               'address' => $row['address'],
               'gender' => $row['gender'],
               'note' => $row['note'],
               'age' => $row['age'],
               'guardian' => $row['guardian'],
               'parent_contact' => $row['parent_contact'],
               'issue_status' => $row['issue_status'],
               'date_issue' => $row['date_issue'],
               'time_issue' => $row['time_issue'],
               'id' => $id
           );
    
          exit(json_encode($data));
       } else {
           exit('Queries not executed properly');
       }

    endif;

    if($key == 'updatePatient') :
        $id = $_POST['id'];

        $data = array(
            "name" => $_POST['name'],
            "address" => $_POST['address'],
			"contact_number" => $_POST['contact_number'],
			"gender" => $_POST['gender'],
			"id_number" => $_POST['id_number'],
			"issue" => $_POST['issue'],
			"lastname" => $_POST['lastname'],
			"age" => $_POST['age'],
			"parent_contact" => $_POST['parent_contact'],
            "guardian" => $_POST['guardian'],
            "issue_status" => $_POST['issue_status'],
            "note" => $_POST['note'],
            "date_issue" => $_POST['date_issue'],
            "time_issue" => $_POST['time_issue'],
        );
        $obj->updateAny('patients', $data, $id);
        exit('Updated Successfully');

    endif;

    if($key == 'deletePatient') :
        $id = $_POST['id'];
        $sql = $database->conn->query("DELETE FROM patients where id = '$id'");
        exit();
    endif;

    if($key == 'deleteLogs'): 
        $id = $_POST['id'];
        $sql = $database->conn->query("DELETE FROM logs where id = '$id'");
        exit();
    endif;

} else {
    exit("Key is not set");
}

