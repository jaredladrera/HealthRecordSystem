<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/MyCustomStyle.css">
    <link rel="stylesheet" href="../dependency/bootstrap/css/bootstrap.min.css">
</head>
<body style=" background-color: #17a2b8 !important;">


<div id="register">
        <!-- <h1 class="text-center text-white pt-5">Health Record System</h1> -->
        <div class="container" >
            <div id="register-row" class="row justify-content-center align-items-center" >
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" class="form" action="" method="post">
                        <h3 class="text-center"><img src="../images/bsulogo.png" alt="" srcset=""></h3>
                            <h3 class="text-center text-info">Register User</h3>
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
                                <label for="age" class="text-info">Age:</label><br>
                                <input type="text" name="age" id="age" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contactNumber" class="text-info">Contact Number:</label><br>
                                <input type="text" name="contactNumber" id="contactNumber" class="form-control">
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
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="rePassword" class="text-info">Re-enter Password:</label><br>
                                <input type="text" name="rePassword" id="rePassword" class="form-control">
                            </div>
       

                            <div class="form-group">
                                <label for="remember-me" class="text-info"></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="../index.php" class="text-info">Back to login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="../dependency/jquery.min.js"></script>
<script src="../dependency/popper.min.js"></script>
<script src="../dependency/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
