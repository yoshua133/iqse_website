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
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="TRR.php">Login?</a>'); 
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

<div align="center"><font color="#500000"><font size="6">Welcome to the TRR Module</font><br>(Please select the Function you wish to access)</font></div>
  </div>
<br>
<br>
<table>
<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>    <font size="4"><b>Check-Out Maintenance System</b></font> </li><br><br>
    <ul>
    <li>  	<font size="3"><b><a href="4checkout/IQSERR_checkout_form.php">Check Out/In a Book</a></b></font> </li><br>
    <li>	<font size="3"><b><a href="patronsearch/IQSERR_patronsearch_form.php">Books Checked-Out by Patron (by Last Name or UIN)</a></b></font> </li><br>
    <li>	<font size="3"><b><a href="reminder/send_reminder.php">Send Email Reminder to Return Books</a></b></font> </li><br>
    </ul> </ul> 
</td>
</tr>
<tr>
<td style="padding-left: 50px;">
<ul>
    <li>    <font size="4"><b>Search Books</b></font> </li><br><br>
<ul>
    <li><font size="3"><b><a href="authorsearch/IQSERR_authorsearch_form.php">By Author</a></b></font> </li><br>
    <li><font size="3"><b><a href="titlesearch/IQSERR_titlesearch_form.php">By Title (or words in the title)</a></b></font> </li><br>
    </ul> </ul> 
</td>
</tr>
<tr>
<td style="padding-left: 50px;">
<ul>
    <li>    <font size="4"><b>Book Maintenance</b></font> </li><br><br>
<ul>
<li><font size="3"><b><a href="newbook.php">Add a New Book</a></b></font> </li><br>
<li><font size="3"><b><a href="4update/IQSERR_update_form.php">Update an Existing Book</a></b></font> </li><br>
<li><font size="3"><b><a href="2delete/IQSERR_delete_form.php">Delete an Existing Book</a></b></font> </li><br>
   </ul> </ul> 
</td>
</tr>
<tr>
<td style="padding-left: 50px;">
<ul>
    <li>    <font size="4"><b>Lists</b></font> </li><br><br>
<ul>
    <li><font size="3"><b><a href="checkedout.php">Currently Checked-Out Books</a></b></font> </li><br>
	<li><font size="3"><b><a href="inventory.php">Inventory (by Reference Number)</a></b></font> </li><br>
	<li><font size="3"><b><a href="inventoryloc.php">Inventory (by Location)</a></b></font> </li><br>
    <li><font size="3"><b><a href="missing.php">Missing Books</a></b></font> </li><br>
    </ul> </ul> 
</td>
</tr>
</table>
 <?php include("include/footer.php"); ?>
  </body>
</html>

<?php 
    } 
?>  