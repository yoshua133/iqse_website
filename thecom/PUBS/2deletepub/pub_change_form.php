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


<html>
<body>
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->
<?php $id=$_POST['id'];
  
//registration_change_form.php
?>

<html><head><title>Update Event Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>



</head>
<body>
<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSEpubs WHERE id='$id'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$pubdoi=mysql_result($result,$i,"pubdoi");
$dbpub=mysql_result($result,$i,"dbpub");
$dbunames=mysql_result($result,$i,"dbunames");
$pubDate=mysql_result($result,$i,"pubDate");

?>

<center>

<h3><font color="#FF0000"><b>PUBLICATION TO BE DELETED</b></font></h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="pub_change_record.php" method="POST">
<input type="hidden" name="ud_id" value="<?php echo "$id" ?>">ID Number:
</td><td align="center" colspan="1">
<?php echo "$id"?><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Publication DOI: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_pubdoi" value="<?php echo "$pubdoi"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Publication Information: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbpub" value="<?php echo "$dbpub"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Authors IQSE assigned unames (usernames): 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbunames" value="<?php echo "$dbunames"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Publication Date: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_pubDate" value="<?php echo "$pubDate"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 1: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment1" value="<?php echo "$dbcomment1"?>"><br>
</td></tr><tr align="center" valign="top">
<td align="center" colspan="1">
Comment 2: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment2" value="<?php echo "$dbcomment2"?>"><br>
</td></tr><tr align="center" valign="top">
<td align="center" colspan="1">
Comment 3: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment3" value="<?php echo "$dbcomment3"?>"><br>
</td></tr><tr align="center" valign="top">
<td align="center" colspan="1">
Comment 4: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment4" value="<?php echo "$dbcomment4"?>"><br>
</td></tr>

</table><br><br>
<input type="Submit" value="Delete"></form>
<?php
++$i;
}
?>

<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: August 23, 2013</p></center>

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
