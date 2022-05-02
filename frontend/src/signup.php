<?php require_once "controllerUserData.php";
require 'config2.php';

$login_button = '';

if(isset($_GET['code']))
{

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);



    if(!isset($token['error']))
    {
        $google_client->setAccessToken($token['access_token']);


        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($google_client);

        $data = $google_service->userinfo->get();


        if(!empty($data['given_name']))
        {
            $_SESSION['user_first_name'] = $data['given_name'];
        }


        if(!empty($data['family_name']))
        {
            $_SESSION['user_last_name'] = $data['family_name'];
        }


        if(!empty($data['email']))
        {
            $_SESSION['user_email_address'] = $data['email'];
        }


        if(!empty($data['gender']))
        {
            $_SESSION['user_gender'] = $data['gender'];
        }


        if(!empty($data['picture']))
        {
            $_SESSION['user_image'] = $data['picture'];
        }

    }

}



if(!isset($_SESSION['access_token'])){


     $login_button = '<a href='.$google_client->createAuthUrl().'></a>'?>
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
                        
                        <div class="row px-3 justify-content-center mt-4 mb-5"> <img src="product_images/logo1.png" width="400" class="image"> </div>
                        <div class="row px-3 text-center justify-content-center">
                            <h4>Collect everything </h4> <small class="text-muted px-5 mx-1 mx-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                    <form action="signup.php" method="POST" autocomplete="">
                        <h3 class="mb-1">Create ESTORE Account</h3>
                        <p class="mb-4 text-sm">Already have an account? <a class="text-primary login" href="login-user.php">Log In</a></p>
                        <div class="row">
                            <div class="col-sm-6">
                             <a href="<?php echo $google_client->createAuthUrl() ?>">   <p class="google"><span class="fa fa-google"></span><small class="pl-3 pr-1">Sign up with google</small></p><a>
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
    <?php } ?>

<div class="container">
    <div class="panel panel-default">
     <?php
     if($login_button === "")
     {
         echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
         echo '<img src="'.$_SESSION['user_image'].'" class="img-responsive img-circle img-thumbnail">';
         echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
         echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
         echo '<h3><a href="logout.php">Logout</h3></div>';
     }

     else
     {
            echo '<div align="center">'.$login_button . '</div>';
     }
     ?>













<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/622b4b98a34c2456412a9667/1ftshujsf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>