<?php 
session_start(); //Allows you to use sessions 
$user = "IQSE"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username4'] == $user AND $_POST['password4'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username4'] = $_POST['username4'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/IQSE/IQSE.php">Login?</a>'); 
  } 
else 
    { 
?> 

<html>
<body>

<?php /*
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>
*/ ?>
<!-- ============================== Enter Center Content ============================  -->
<?php $uname=$_POST['uname'];
  
//registration_change_form.php
?>

<html><head><title>Update Profile Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>



</head>
<body>
<center><h2>List of People in Group <font color="#FF8080"><?php echo "'$uname'";?></font></h2></center>
<?php include("include/glfaculty.php"); ?>
<?php include("include/glresearchers.php"); ?>
<?php include("include/glstaff.php"); ?>
<?php include("include/glgs.php"); ?>
<?php include("include/glvisitors.php"); ?>
<?php include("include/glfellows.php"); ?>

<br><br>
 <hr><center>
<p class="c2">August 21, 2013</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<?php include("../include/footer-1.php"); ?>

<?php
}
?>
</body>
</html>

