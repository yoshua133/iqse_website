<?php 
session_start(); //Allows you to use sessions 
$user = "IQSEpubs"; //Username to protected page. 
$pass = "Letmein2"; //Password to protected page. 
if($_POST['username6'] == $user AND $_POST['password6'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username6'] = $_POST['username6'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/PUBS/PUB.php">Login?</a>'); 
  } 
else 
    { 
?>




<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Fri, 16 Dec 2011 18:05:58 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  
<?php include("include/header.php"); ?>
<?php include("include/topmenu.php"); ?>


<div align="center"><font color="#500000"><font size="6">Welcome to the IQSE Publication Management Module</font><br>(Please select the Function you wish to access)</font></div>
  </div>
  <br> <br>
  
<table>
<tr>
<td style="padding-left: 50px;">
 <ul>
	<li>	<a href="pub_checkout_form.php"><font size="4"><b>Add a Publication Reference to the IQSE Database</b></font></a> </li><br><br>
	<li>	<a href="2updatepub/pub_update_form.php"><font size="4"><b>Modify a Publication Reference in the IQSE Database</b></font></a> </li><br><br>
	<li>	<a href="2deletepub/pub_delete_form.php"><font size="4"><b>Delete a Publication Reference in the IQSE Database</b></font></a> </li><br><br>
	<li>	<a href="4pubstatus/pubstatus_update_form.php"><font size="4"><b>Update Your PUB status in the IQSE Database</b></font></a> </li><br><br>
	<li>	<a href="master.php" target="_blank"><font size="4"><b>Master List of IQSE Assigned Unames</b></font></a></li><br>
 </td>
 </tr>

 
</table>
<br><br>
<div align="center"><?php include("include/footer.php"); ?></div>

  </body>
</html>

<?php 
    } 
?>  