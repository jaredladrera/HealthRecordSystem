<?php 
$myId = $_SESSION['id'];
$query = 'SELECT * FROM accountinformation WHERE id = '.$myId.'';
$stmt = $database->conn->query($query);

$row = $stmt->fetch_array();
$count = $stmt->num_rows;


?>

<style>
  .form-control {
      border: 1px solid black;
  }
  h2{
    font-weight: bold;
  }

  .container {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px #888888;
  }

  .field-icon {
        float: right;
        margin-left: -30px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
    }


</style>
<div class="container" style="border: 1px solid black; border-radius: 20px; margin-top: 3rem;">
 
    <h2 class="text-center mt-3 mb-3" >Account Settings</h2>
    <input type="hidden" value="<?php echo $myId; ?>" id="accountID">
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" value="<?php echo $row['name']; ?>">
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" class="form-control" value="<?php echo $row['lastname']; ?>" >
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" class="form-control" value="<?php echo $row['address']; ?>" >
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" id="middleName" class="form-control" value="<?php echo $row['middle_name']; ?>" >
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="gender">Age</label>
                    <input type="text" id="age" class="form-control" value="<?php echo $row['age']; ?>" >
            </div>
        </div>
        <div class="col col-md-3">
        <div class="form-group">
                        <label for="gender">Gender <span>*</span></label>
                        <select class="form-control" id="gender"  value="<?php echo $row['gender']; ?>">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
        </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" value="<?php echo $row['username']; ?>" >
            </div>
        </div>
        <div class="col col-md-3">
        <div class="form-group">
                        <label for="password">Password</label>
                        <input  type="password" id="password" class="form-control" name="password" value="<?php echo $row['account_password']; ?>">
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
        </div>
        <div class="col col-md-3">
                <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type="text" id="contactNumber" class="form-control" value="<?php echo $row['contact_number']; ?>" >
                </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                <label for="idNumber">ID Number</label>
                <input type="text" id="idNumber" class="form-control" value="<?php echo $row['id_number']; ?>" >
            </div>
        </div>
        <div class="col col-md-3">
                <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control" value="<?php echo $row['email']; ?>" >
                </div>
        </div>
        <div class="col col-md-3">

        </div>
    </div>

    <div class="row mb-5 mt-3 justify-content-center">
        <button class="btn btn-primary mr-2" onclick="updateAccount()">Save Changes</button>
        <button class="btn btn-danger" onclick="reset()">Reset</button>
    </div>

</div>
<script>

function updateAccount() {
    let name = $('#name').val();
    let lastname = $('#lastname').val();
    let address = $('#address').val();
    let middleName = $('#middleName').val();
    let gender = $('#gender').val();
    let age = $('#age').val();
    let username = $('#username').val();
    let password = $('#password').val();
    let contactNumber = $('#contactNumber').val();
    let idNumber = $('#idNumber').val();
    let email = $('#email').val();
    let id = $('#accountID').val();


    $.ajax({
        url: '../../functions/fetchAjax.php',
        method: 'post',
        dataType: 'text',
        data: {
            key: "updateAccount",
            myId : id,
            name : name,
            lastname: lastname,
            address: address,
            middleName: middleName,
            gender : gender,
            age : age,
            username : username,
            password : password,
            contactNumber : contactNumber,
            idNumber : idNumber,
            email : email,

        }, success : function(res) {
            Alt.alternative({
            status:'success',
            title:'Success',
            text:res
            }).then((res) => {
                setTimeout(() => {
                    location.reload();
                }, 1000);
            })
        }

    })

}

function test() {
    let name = $('#name').val();
    let id = $('#myId').val();

    // alert(id);
    $.ajax({
        url: '../../functions/fetchAjax.php',
        method: 'post',
        dataType: 'text',
        data: {
            key: "test",
            name: id
        }, success : function(res) {
            alert(res);
        }

    })

}

function reset() {
    $('#name').val('');
    $('#lastname').val('');
    $('#address').val('');
     $('#middleName').val('');
     $('#gender').val('');
    $('#age').val('');
     $('#username').val('');
     $('#password').val('');
    $('#contactNumber').val('');
     $('#idNumber').val('');
     $('#email').val('');

}


</script>