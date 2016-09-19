<?php
session_start();

    if(empty($_SESSION['name']))
    {
        header('Location: login.php');
        die();
    }
    if($_SESSION['credential'] != 'admin' and $_SESSION['credential'] != 'superadmin')
    {
        header('Location: success.php?q=usr');
        die();
    }

    require_once 'include/lib/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->
    <?php
        require_once 'head.php';
    ?>  
<!-- head -->

<!-- body -->
<body>
<div class="container">
    
<!-- for header -->
	<?php
	    require_once 'header.php';
	?>
<!-- end header -->

<!-- for body -->
<div class="row">  
    
    <!-- for nav -->
    <?php
        require_once 'nav.php';    
    ?>    
    <!-- end nav -->
    <!-- for main panel --> 
	<?php
        require_once 'body.php';
    ?>   
    <!-- end main panel -->

</div><!-- .row -->
<!-- end body -->


<?php
    require_once 'promo-index.php';
    require_once 'merchant-index.php';
    require_once 'category-index.php';
    require_once 'reports-index.php';        
?>

</div><!-- .container -->
</body>

<!-- for footer -->
<!-- end footer -->

</html>
