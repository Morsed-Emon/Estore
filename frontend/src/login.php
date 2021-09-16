<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="style2.css">



    <title>Document</title>
</head>
<body>
    
    <div class="login_form_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- login_wrapper -->
                    <div class="login_wrapper">
                    <form action="login-user.php" method="POST" autocomplete="">
                        <div class="row">
                            <h1>ESTORE ADMIN PANEL</h1>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="#" class="btn btn-primary facebook"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a> </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="#" class="btn btn-primary google-plus"> Login with Google <i class="fa fa-google-plus"></i> </a> </div>
                        </div>
                        <h2>or</h2>
    
                        <?php
           if(count($errors) > 0){
               ?>
               <div class="alert alert-danger text-center">
                   <?php
                   foreach($errors as $showerror){
                       echo $showerror;
                   }
                   ?>
               </div>
               <?php
           }
           ?>
           <div class="form-group">
               <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email?>">
           </div>
           <div class="form-group">
               <input class="form-control" type="password" name="password" placeholder="Password" required>
           </div>
           <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
           <div class="form-group">
               <input class="form-control button" type="submit" name="login" value="Login">
           </div>
           <div class="link login-link text-center">Not yet a member? <a href="signup.php">Signup now</a></div>
       </form>
    
    
    
    

                </div> <!-- /.login_wrapper-->
            </div>
        </div>
    </div>
</body>
</html>