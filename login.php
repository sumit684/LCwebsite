<?php
include("config.php");
session_start();
$error='';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

    $sql = "SELECT id FROM user WHERE id = '$myusername' and pass = '$mypassword'";
    $result = mysqli_query($db,$sql);
    //      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //      $active = $row['active'];
    //      
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        //         session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: main.php");
    }else {
        $error = "Login Name or Password is invalid";
    }
}
?>
<html>

    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!--

<style type = "text/css">
body {
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
label {
font-weight:bold;
width:100px;
font-size:14px;
}
.box {
border:#666666 solid 1px;
}
</style>
-->
        <style>
            :root {
                --input-padding-x: 1.5rem;
                --input-padding-y: .75rem;
            }

            body {
                background: #007bff;
                background: linear-gradient(to right, #0062E6, #33AEFF);
            }

            .card-signin {
                border: 0;
                border-radius: 1rem;
                box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
            }

            .card-signin .card-title {
                margin-bottom: 2rem;
                font-weight: 300;
                font-size: 1.5rem;
            }

            .card-signin .card-body {
                padding: 2rem;
            }

            .form-signin {
                width: 100%;
            }

            .form-signin .btn {
                font-size: 80%;
                border-radius: 5rem;
                letter-spacing: .1rem;
                font-weight: bold;
                padding: 1rem;
                transition: all 0.2s;
            }

            .form-label-group {
                position: relative;
                margin-bottom: 1rem;
            }

            .form-label-group input {
                height: auto;
                border-radius: 2rem;
            }

            .form-label-group>input,
            .form-label-group>label {
                padding: var(--input-padding-y) var(--input-padding-x);
            }

            .form-label-group>label {
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                width: 100%;
                margin-bottom: 0;
                /* Override default `<label>` margin */
                line-height: 1.5;
                color: #495057;
                border: 1px solid transparent;
                border-radius: .25rem;
                transition: all .1s ease-in-out;
            }

            .form-label-group input::-webkit-input-placeholder {
                color: transparent;
            }

            .form-label-group input:-ms-input-placeholder {
                color: transparent;
            }

            .form-label-group input::-ms-input-placeholder {
                color: transparent;
            }

            .form-label-group input::-moz-placeholder {
                color: transparent;
            }

            .form-label-group input::placeholder {
                color: transparent;
            }

            .form-label-group input:not(:placeholder-shown) {
                padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
                padding-bottom: calc(var(--input-padding-y) / 3);
            }

            .form-label-group input:not(:placeholder-shown)~label {
                padding-top: calc(var(--input-padding-y) / 3);
                padding-bottom: calc(var(--input-padding-y) / 3);
                font-size: 12px;
                color: #777;
            }

            .btn-google {
                color: white;
                background-color: #ea4335;
            }

            .btn-facebook {
                color: white;
                background-color: #3b5998;
            }
            #laser_logo{
                border: 1px solid transparent;
                
            }

        </style> 
    </head>

    <body bgcolor = "#FFFFFF">

        <!--
<div align = "center">
<div style = "width:300px; border: solid 1px #333333; " align = "left">
<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

<div style = "margin:30px">

<form action = "" method = "post">
<label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
<label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
<input type = "submit" value = " Submit "/><br />
</form>

<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error ?></div>

</div>

</div>

</div>
-->
        <div class="container">

            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <center><img id="laser_logo" src="images/logo.png"/></center>
                            <h5 class="card-title text-center" style="margin-top:10px;">LOG IN</h5>
                            <form class="form-signin" action="" method="post">
                                <div class="form-label-group">
                                    <input name = "username" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                    <label for="inputEmail">UserName</label>
                                </div>

                                <div class="form-label-group">
                                    <input name = "password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>

                                <!--
<div class="custom-control custom-checkbox mb-3">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Remember password</label>
</div>
-->
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                                <hr class="my-4">
                                <!--
<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
--> 
                                <div style = "font-size:14px; color:#cc0000; margin-top:10px; text-align:center;"><?php echo $error ?></div>
                                <center><a href="register.php">Not Registered? Create Account</a></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>