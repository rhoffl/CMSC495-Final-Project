<?PHP
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title> <title>SGMS Logout</title></title>
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
    
      <center>
        <div class="header_p1">
            <h3 class="header_p1_child"> <a href="index.php">Sporting Goods Management System</a></h3><br />
            <h2 class="header_p1_child">You have logged out</h2>
          </div>



</body>
</html>