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
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSERR WHERE reference='$reference'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$status=mysql_result($result,$i,"status");
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
?>

<?php if($status=='yes'){include("../include/topmenu-1.php");echo "<br><br><h4>Book is currently checked out. To continue, click \"Continue\" button below. </h4>"; 
?>
<form action="IQSERR_continue_form.php" method="POST">
<input type="hidden" name="reference" value="<?php echo "$reference"; ?>">
<input type="Submit" value="Continue"></form>

<?php}else{include("IQSERR_change_form.php");} ?>

<br><br><br><br>

</body>

</html>

<?php } }?>