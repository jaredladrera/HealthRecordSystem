<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/MyCustomStyle.css">
    <link rel="stylesheet" href="dependency/bootstrap/css/bootstrap.min.css">
</head>
<body>


<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3><img src="images/bsulogo.png" alt="" srcset=""></h3>
                        <p class="text-danger text-center" id="errorMessage"></p>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <!-- <input type="submit" class="btnSubmit" value="Login" /> -->
                            <button class="btnSubmit" onclick="login()">Login</button>
                        </div>
                        <div class="form-group">
                            <a href="pages/register.php" class="ForgetPwd">Create an Account</a>
                        </div>

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
</body>
</html>
<script>
$('.form-control').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        login();
    }
      event.stopPropagation();
    });

function login() {
    // window.location.href = 'admin/admin_index.php';
    let username = $('#username').val();
    let password = $('#password').val();

    if(username != '' || password != '') {

        $.ajax({

        url: 'functions/fetchAjax.php',
        method: 'post',
        dataType: 'text',
        data: {
            key: 'login',
            username: username,
            password: password
        }, success: (res) => {
            $admin = toString("admin");
            $nurse = toString("nurse");
            $user = toString("user");
            $result = toString(res);


            if($result == $admin) {
                window.location.href = 'pages/administrator/index.php';
            } else if($result == $nurse){
                window.location.href = 'pages/nurse/index.php';
            } else if($result == $user) {
               document.getElementById('errorMessage').innerHTML = res;    
            } else {
                document.getElementById('errorMessage').innerHTML = res;    
            }
        }

        });


    } else {
        
        document.getElementById('errorMessage').innerHTML = "Pleas fill up all fields";
    }

}
</script>

