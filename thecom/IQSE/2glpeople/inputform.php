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

<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->

<?php
//registration_update_form.php
?>
<html><head><title>Input Form</title>
</head>
<body>

<center>
<br>
<form method="POST" action="generate.php">
<pre>
&nbsp;&nbsp;<h2>Enter Uname of Faculty Member to Generate their Pople List: </h2><br>
<input type="text" name="uname" size="30">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center>

<center><table>
<tr>
<td>
<br>
<center><font size="4">List of Faculty Unames</font></center> 
<?php include("include/ruffaculty.php"); ?>
</td>
<td width=5% valign='top'>
</td>
<td valign='top'>


</td>
</tr>
</table>

<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: October 15, 2012</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->

 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<small><?php include("../include/footer-1.php"); ?></small>

<?php
}
?>
</body>
</html>
