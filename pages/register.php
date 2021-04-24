<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/MyCustomStyle.css">
    <link rel="stylesheet" href="../dependency/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		

    <link rel="stylesheet" href="../dependency/datatables/datatables.min.css">
    <link rel="stylesheet" href="../dependency/font-awesome/css/font-awesome.min.css">
    <style>
        .field-icon {
        float: right;
        margin-left: -30px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
        }

        #hideDiv{background:red; width:400px; margin:0 auto; color:#fff; padding:10px; text-align:center;}
    </style>
</head>
<body style=" background-color: #17a2b8 !important;">


<div id="register">
        <!-- <h1 class="text-center text-white pt-5">Health Record System</h1> -->
        <div class="container" >
            <div id="register-row" class="row justify-content-center align-items-center" >
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                    
                        <h3 class="text-center"><img src="../images/bsulogo.png" alt="" srcset=""></h3>
                            <h3 class="text-center text-info">Register User</h3>

                                <!-- <p id="errorMessage" class="text-center" style="color:red;">Error</p> -->

                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="text-info">Lastname:</label><br>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="middle" class="text-info">Middle:</label><br>
                                <input type="text" name="middle" id="middle" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="middle" class="text-info">Address:</label><br>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="age" class="text-info">Age:</label><br>
                                <input type="text" name="age" id="age" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender</label>
                                <select class="form-control" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="contactNumber" class="text-info">Contact Number:</label><br>
                                <input type="text" name="contactNumber" id="contactNumber" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email Address:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="idNumber" class="text-info">ID Number:</label><br>
                                <input type="text" name="idNumber" id="idNumber" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Password</label>
                                <input  type="password" id="password" class="form-control" name="password">
                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <label for="rePassword" class="text-info">Re-enter Password:</label><br>
                                <input type="password" name="rePassword" id="rePassword" class="form-control">
                                <span toggle="#rePassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <div id="errMessage"></div>
                            </div>
               
       

                            <div class="form-group">
                                <label for="remember-me" class="text-info"></label><br>
                                <!-- <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"> -->
                                <button class="btn btn-info" onclick="register()">Register</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="../index.php" class="text-info">Back to login</a>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="../dependency/jquery.min.js"></script>
<script src="../dependency/popper.min.js"></script>
<script src="../dependency/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.3/lottie.min.js"></script>
<script src="../dependency/alert/js/alt-alert.js"></script>
</body>
</html>
<script>
         $('.form-control').keypress(function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                   register(); 
                }

                event.stopPropagation();
        });

        function register(){
           name =  $('#name').val();
           lastname =  document.getElementById('lastname').value;
           middle =  $('#middle').val();
           age =  document.getElementById('age').value;
           gender =  $('#gender').val();
           address =  $('#address').val();
           contactNumber =  document.getElementById('contactNumber').value;
           idNumber =  $('#idNumber').val();
           username =  $('#username').val();
           password =  $('#password').val();
           rePassword =  $('#rePassword').val();
           email =  $('#email').val();

            // alert(contactNumber);
           

        if(password == rePassword) {
            
               $.ajax({ 
                    url: '../functions/fetchAjax.php',
                    method: 'post',
                    dataType: 'text',
                    data: {
                        key: 'registerUser',
                        name: name,
                        lastname: lastname,
                        middle: middle,
                        address: address,
                        contactNumber: contactNumber,
                        gender: gender,
                        age: age,
                        idNumber: idNumber,
                        username: username,
                        password: password,
                        email: email,
                    }, success: function(response){
                        Alt.alternative({
                        status:'success',
                        title:'Success',
                        text:'You are now register!'
                        }).then((data) => {
                            if(data) {

                                window.location.href = '../index.php';
                            }
                        })
                    }
    
                });

        } else {

            

                document.getElementById('errMessage').innerHTML = '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert"><strong>Error : </strong> Password Not Match!!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
   
     

        }

           
        } //end



        $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
            input.attr("type", "text");
            } else {
            input.attr("type", "password");
        }
        });

</script>
