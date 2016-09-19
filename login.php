<!DOCTYPE html>
<html lang="en">
  
<head>
    <?php
        require 'head.php';
    ?>    
</head>

<body>

<div class="page-header">
    <center><img class="page-header-logo" align="center" src="include/img/rclogo.png"></center>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Login</strong>
                </div>
                <div class="panel-body">
                <form name="login" action="login-submit.php" class="form-horizontal" role="form" method="post">

<?php
if(isset($_GET['err']) and $_GET['err'] != null)
    echo '<div class="form-group">
    <label for="" class="col-sm-8" control-label" color="red"><strong><p style="color:red">Invalid email/password.</p></strong></div></label>';
?>

                       <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="password" placeholder="********" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input type="checkbox" class="">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">&nbsp;
                </div>
            </div>
        </div>
    </div>
</div>
</body>
