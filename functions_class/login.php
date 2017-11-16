<?php

$basedir = realpath(__DIR__);
include_once($basedir . '/users_file/user.php');

if(isset($_SESSION['login_user'])){
    header("location:user_list.php");
}
$user=new user();

$insert = $user->loginuser();

?>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">


  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
              <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>

            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>

                  <form action=" " method="post">
                    <div class="form-group has-feedback">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="row">
                      <div class="col-xs-8">
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox"> Remember Me
                          </label>
                        </div>
                      </div>

                      <div class="col-xs-4">
                        <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</input>
                      </div>
                    </div>
                  </form>

                  <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                      Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                      Google+</a>
                  </div>

                <a href="forgot_password.php">I forgot my password</a><br>
                <a href="register.php" class="text-center">Register a new membership</a>

             </div>
         </div>

        <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script>
          $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
        </script>



    </body>



</html>
