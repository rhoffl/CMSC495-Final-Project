<?PHP
require_once("./include/membersite_config.php");

$success = false;
if($fgmembersite->ResetPassword())
{
    $success=true;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Reset Password</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
        <link rel="STYLESHEET" type="text/css" href="style/bootstrap.min.css">
        <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css"> 
        <script src="scripts/jquery-1.10.2.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
</head>
<body>
           <nav class="navbar navbar-default">
        <div class="container-fluid">
        <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="index.php">Contact</a></li>
                </ul>

            <ul class="nav navbar-nav navbar-right">
                   <li><a href="register.php">Register</a></li>
                   <li><a href="login-home.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="container body-content">
            <center>
        <div class="header_p1">
        <h2 class="header_p1_child"> <a href="index.php">Sporting Goods Management System</a>
        
          </div>
    </center>
    </div> 
<div id='fg_membersite_content'>
<?php
if($success){
?>
<h2 class="header_p1_child">Password is Reset Successfully</h2>
Your new password is sent to your email address.
<?php
}else{
?>
<h2 class="header_p1_child">Error</h2>
<span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span>
<?php
}
?>
</div>

</body>
</html>