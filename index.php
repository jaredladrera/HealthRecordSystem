<?php 
session_start();
if(isset($_SESSION['logs_id']) && isset($_SESSION['account_type'])) {
    $status = $_SESSION['account_type'];
    if($status == 'admin') {
        header("Location: pages/administrator/index.php");
    } else {
        header("Location: pages/nurse/index.php");
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/MyCustomStyle.css">
    <link rel="stylesheet" href="dependency/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>


<div class="container login-container">
            <div class="row">
            
                <div class="col-md-6 login-form-1">
                    <h3><img src="images/bsulogo.png" alt="" srcset=""></h3>
            <form action="./functions/login.php" method="POST">
                        <?php if(isset($_GET['error'])) : ?>
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                            <?php echo $_GET['error'] ?>    
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                            <!-- <button class="btnSubmit" onclick="login()">Login</button> -->
                        </div>
                        <div class="form-group">
                            <a href="pages/register.php" class="ForgetPwd">Create an Account</a>
                        </div>
            </form>

                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Mission</h3>
                    <p class="text-white">A university committed to producing leaders by providing a 21st century learning environment through innovations in education, multidisciplinary research, and community and industry partnerships in order to nurture the spirit of nationhood, propel the national economy, and engage the world for sustainable development.</p>
                    <h3>Vission</h3>
                    <p class="text-white">
                    A premier national university that develops leaders in the global knowledge economy.
                    </p>
                </div>
                
            </div>
        </div>



<script src="dependency/jquery.min.js"></script>
<script src="dependency/popper.min.js"></script>
<script src="dependency/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</body>
</html>


