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

<html>
<head>
<title>IQSERR Book Check-Out System </title>

</head>
<body>
<?php $reference=$_POST['reference'];?>


<?php
echo "$reference";
include("IQSERR_change_form.php");
?>

<!--<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<input type="hidden" name="ud_reference" value="<?php echo "$reference" ?>">
Reference No.: 
</td><td align="center" colspan="1">
<?php echo "$reference"?><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Checked Out?: 
</td><td align="center" colspan="1">
<?php echo "$status"?><br>
</td></tr>
</table><br><br>-->
<center>
<?php
++$i;
?><?php }?>
</body>

</html>

