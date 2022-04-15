<?php 
session_start(); //Allows you to use sessions 
$user = "SaFER"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username7'] == $user AND $_POST['password7'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username7'] = $_POST['username7'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/SaFER/SaFER.php">Login?</a>'); 
  } 
else 
    { 
?> 




<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    
  </head>
  <body>
<?php include("../include/headerSaFER.php"); ?>
<?phpinclude("include/topmenu.php"); ?>
<br><br>
<table>
<tbody style="font-family:arial">
<tr>
<td style="padding-left: 50px;">
<?php include("peopleform.php"); ?> 
</td>
</tr>
</table>
   
  </body>
</html>

<br><br>
<?php include("../include/footer.php"); ?>

<?php 

    } 
?>  
