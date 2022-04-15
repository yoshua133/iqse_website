<?php 
session_start(); //Allows you to use sessions 
$user = "TRR"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username5'] == $user AND $_POST['password5'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username5'] = $_POST['username5'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="../TRR.php">Login?</a>'); 
 } 
else 
    { 
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Sat, 23 Apr 2011 22:19:26 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Send Email Reminder</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  <br>
<div align="center">
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>
</div>	 
<br>
  
<div align="center"><h2> Send an Email Reminder that Book is Due</h2>

<FORM METHOD="POST" ACTION="send_reminder2.php">
<P><strong>Subject:</strong><br>
<input type="text" name="subject" value="Townes Reading Room Book Reminder" size=50></P>

<P> <strong> Message:</strong><br>
<textarea name="message" cols=50 rows=25 wrap=virtual>Dear Patron, 

The Townes Reading Room was established in order for books to be made available to students, researchers, and faculty for reading in the Townes Reading Room area without the burden of having to purchase these fundamental texts. For patron convenience, Books are allowed to be checked out for a 24 hour period. 

Email reminders are sent out daily to remind patrons to return the books that they might be available for others to read also. Please know a copier is available in IQSE 562 for you to use if there is a section in the book you have checked out that you need for a longer period of time. 

Thank you for helping us to keep the Townes Reading Room books available for reading by everyone.

Sincerely, 
IQSE</textarea></p>

<p><input type="submit" name="submit" value="Send Message"></p>
</FORM>
</div>

<br><br>
<div align="center">
<?php include("../include/footer-1.php"); ?>
</div>
  </body>
</html>
<?php } ?>