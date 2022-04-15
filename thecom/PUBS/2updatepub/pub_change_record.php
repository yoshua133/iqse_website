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

<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_change_record.php


$ud_id=$_POST['ud_id'];
$ud_pubdoi=$_POST['ud_pubdoi'];
$ud_dbpub=$_POST['ud_dbpub'];
$ud_dbunames=$_POST['ud_dbunames'];
$ud_pubDate=$_POST['ud_pubDate'];



$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("UPDATE IQSEpubs SET pubdoi='$ud_pubdoi', dbpub='$ud_dbpub' , dbunames='$ud_dbunames' , pubDate='$ud_pubDate' WHERE id='$ud_id'");


echo "<center><h3> Publication has been Modified successfully.</h3> Return to <a href=\"../PUB-1.php\">PUBS Module</a></center>";

mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: October 15, 2012</p></center>

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
