<?php 
    session_start();

     if(!isset($_SESSION['confirm_order']) || empty($_SESSION['confirm_order']))
     {
         header('location:index.php');
         exit();
     }

    require_once('./inc/config.php');    
    require_once('./inc/helpers.php');  

    
	$pageTitle = 'Demo Thank You';
	$metaDesc = 'Demo PHP shopping cart thank you page';
	
    include('layouts/header.php');
?>
<div class="row">
    <div class="col-md-12">
        <h1>Thank you so much for ordering by ESTORE!</h1>
        <p>
            Your order has been placed.
            <?php unset($_SESSION['confirm_order']);?>
        </p>
        <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
    </div>
</div>
<?php include('layouts/footer.php'); ?>    