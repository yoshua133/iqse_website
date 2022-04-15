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

<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->
<br>
<center><h1> List of Upcoming Reminders<br> 
(By Activity Type)</h1></center>

<center><h2>2018</h2>
<?php include("include/rl42018.php"); ?></center>
<center><h2>2019</h2>
<?php include("include/rl42019.php");?></center>
<center><h2>2020</h2>
<?php include("include/rl42020.php"); ?></center>
<center><h2>2021</h2>
<?php include("include/rl42021.php"); ?></center>
<center><h2>2022</h2>
<?php include("include/rl42022.php"); ?></center>
<center><h2>2023</h2>
<?php include("include/rl42023.php"); ?></center></body>
</html>
<?php }?>


<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: September 14, 2013</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->

 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<small><?php include("../include/footer-1.php"); ?></small>

</body>
</html>

