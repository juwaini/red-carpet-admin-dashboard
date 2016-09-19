<!DOCTYPE html>
<html lang="en">
  
<?php
    require_once 'head.php';
?>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Register</strong>
                </div>
                <div class="panel-body">
                    <form id="register" name="register" action="register-submit.php" class="form-horizontal" role="form" method="post">
<?php
if(!isset($_GET['err']))
    echo '<div class="form-group">
    <label for="" class="col-sm-8" control-label" color="red"><strong><p style="color:red">Your email is already registered.</p></strong></div></label>';
?>
                       <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
                            </div>
                        </div>
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
                            <label for="password-confirm" class="col-sm-3 control-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password-confirm" id="password-confirm" placeholder="********" required="">
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Register</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Already Registered? <a href="login.php" class="">Login here</a>
                </div>
            </div>
        </div>
    </div>
</html>
<script>
$( "#register" ).submit(function( event ) {
    if( $('#password').val() != $('#password-confirm').val() )
    {
        alert( "Your password is inconsistent..." );
        event.preventDefault();
    }
});
</script>
