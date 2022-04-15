<?php include("include/session.php"); ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="SS2019">
  <meta name="keywords" content="">
  <meta name="generator" content="Responsive Site Designer 2.0.2044">
  <title>SS2019</title>
  <link rel="stylesheet" href="css/foundation.min.css">
  <link rel="stylesheet" href="css/wireframe-theme.min.css">
  <script>document.createElement( "picture" );</script>
  <script src="js/picturefill.min.js" class="picturefill" async="async"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Finger+Paint%7CLato:400,b">
 <link rel="stylesheet" type="text/css" href="css/menu-menu.css" media="screen">
</head>

<body class="main-grid no-js">
  <div class="row">
    <div class="columns small-12">
      <div class="html-element"><?php include("menu.php"); ?></div>
    </div>
  </div>
  <div class="row">
    <div class="columns small-1 custom-400-small-1 column-1"></div>
    <div class="columns small-11 medium-12 custom-400-small-11">
      <div class="html-element textstyle">




<!-- ============================== Enter Center Content ============================  -->

<?php
/**
 * Forgot Password form has been submitted and no errors
 * were found with the form (the username is in the database)
 */
if(isset($_SESSION['forgotpass'])){
   /**
    * New password was generated for user and sent to user's
    * email address.
    */
   if($_SESSION['forgotpass']){
      echo "<center><h1>New Password Generated</h1></center>";
      echo "<p><center>Your new password has been generated "
          ."and sent to the email <br>associated with your account. "
          ."<a href=\"index.php\">Main</a>.</center></p>";
   }
   /**
    * Email could not be sent, therefore password was not
    * edited in the database.
    */
   else{
      echo "<center><h1>New Password Failure</h1></center>";
      echo "<p><center>There was an error sending you the "
          ."email with the new password,<br> so your password has not been changed. "
          ."<a href=\"index.php\">Main</a>.</center></p>";
   }
       
   unset($_SESSION['forgotpass']);
}
else{

/**
 * Forgot password form is displayed, if error found
 * it is displayed.
 */
?>

<center><h3>Forgot Password</h3>
A new password will be generated for you and sent to the email address<br>
associated with your account, all you have to do is enter your
username.<br><br>
<?php echo $form->error("user"); ?>
<form action="process.php" method="POST">
<b>Username:</b> <input type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>">
<input type="hidden" name="subforgot" value="1">
<input type="submit" value="Get New Password">
</form>
</center>
<?php
}
?>


<br><br><br><br><br></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>