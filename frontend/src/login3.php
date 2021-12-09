<?php require_once "controllerUserData.php"; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="signup.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="login.js"></script>
    <title>Estore</title>
</head>
<body>
    <div id="logreg-forms">
        <form action="profile.php" method="POST" autocomplete="" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Customer Login</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR  </p>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Log in</button>
            <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <div class="link login-link text-center">Not yet a member? <a href="signup.php">Signup now</a></div>
            
        </form>


   
   
   

</body>
</html>