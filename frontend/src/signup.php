<?php require_once "controllerUserData.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="signup.css">
    <!-- Main Stylesheet -->
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <title>Document</title>
</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
    <div class="container1-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 bg-light pb-5">
                        <div class="row px-3"> <img src="https://i.imgur.com/pFCf3zf.jpg" class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5"> <img src="https://i.imgur.com/ucirQQf.png" class="image"> </div>
                        <div class="row px-3 text-center justify-content-center">
                            <h4>Collect everything from ESTORE</h4> <small class="text-muted px-5 mx-1 mx-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                    <form action="signup.php" method="POST" autocomplete="">
                        <h3 class="mb-1">Create ESTORE Account</h3>
                        <p class="mb-4 text-sm">Already have an account? <a class="text-primary login" href="login3.php">Log In</a></p>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="google"><span class="fa fa-google"></span><small class="pl-3 pr-1">Sign up with google</small></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="fb"><span class="fa fa-facebook"></span><small class="pl-3 pr-1">Sign up with facebook</small></p>
                            </div>
                        </div>
                        <div class="row px-3">
                            <div class="line"></div> <small class="text-muted or text-center">OR</small>
                            <div class="line"></div>
                        </div>
                        <?php
                        if(count($errors) == 1){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach($errors as $showerror){
                                    echo $showerror;
                                }
                                ?>
                            </div>
                            <?php
                        }elseif(count($errors) > 1){
                            ?>
                            <div class="alert alert-danger">
                                <?php
                                foreach($errors as $showerror){
                                    ?>
                                    <li><?php echo $showerror; ?></li>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control button" type="submit" name="signup" value="Signup">
                        </div>
                        
                        <div class="col-md-7"> <small class="text-muted">By creating an account, you understand and agree to Mallo's Terms of Service, including the User Agreement and privacy policy</small>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>