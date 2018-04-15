<?PHP
require_once("./include/membersite_config.php");

if(isset($_GET['code']))
{
   if($fgmembersite->ConfirmUser())
   {
        $fgmembersite->RedirectToURL("thank-you-regd.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Confirm registration</title>
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

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='confirm' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='get' accept-charset='UTF-8'>
  <div class="centerFieldset" >   
<fieldset >
<legend>Confirm registration</legend>    
<p>
Please enter the confirmation code in the box below
</p>  
<div class='short_explanation'>* required fields</div>
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='code' >Confirmation Code:* </label><br/>
    <input type='text' name='code' id='code' maxlength="50" /><br/>
    <span id='register_code_errorloc' class='error'></span>
</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
</fieldset>
  </div>

</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("confirm");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("code","req","Please enter the confirmation code");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>