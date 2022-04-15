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





<?php
/* Requested Username error checking */
$req_user = trim($_GET['user']);
if(!$req_user || strlen($req_user) == 0 ||
   !preg_match("/^([0-9a-z])+$/i", $req_user) ||
   !$database->usernameTaken($req_user)){
   die("Username not registered");
}

/* Logged in user viewing own account */
if(strcmp($session->username,$req_user) == 0){
   echo "<h1>My Account</h1>";
}
/* Visitor not viewing own account */
else{
   echo "<h1>User Info</h1>";
}

/* Display requested user information */
$req_user_info = $database->getUserInfo($req_user);

/* Username */
echo "<b>Username: ".$req_user_info['username']."</b><br>";

/* Email */
echo "<b>Email:</b> ".$req_user_info['email']."<br>";

/**
 * Note: when you add your own fields to the users table
 * to hold more information, like homepage, location, etc.
 * they can be easily accessed by the user info array.
 *
 * $session->user_info['location']; (for logged in users)
 *
 * ..and for this page,
 *
 * $req_user_info['location']; (for any user)
 */

/* If logged in user viewing own account, give link to edit */
if(strcmp($session->username,$req_user) == 0){
   echo "<br><a href=\"useredit.php\">Edit Account Information</a><br>";
}

/* Link back to main */
echo "<br>Back To [<a href=\"index.php\">Main</a>]<br>";

?></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>