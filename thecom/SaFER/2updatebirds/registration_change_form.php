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

<html>
<body>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<?php include("../../include/headerSaFER-1.php"); ?>
<?phpinclude("../include/topmenu.php"); ?>
<br><br>

<!--  -----------------------  Enter LEFT Content ---------------------- -->

<!-- ============================== Enter Center Content ============================  -->
<?php $dbname=$_POST['dbname'];
  
//registration_change_form.php
?>

<html><head><title>Update Profile Form</title>
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

$query=" SELECT * FROM SaFERbirds WHERE dbname='$dbname'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$birdcolor1=mysql_result($result,$i,"birdcolor1");
$birdcolor2=mysql_result($result,$i,"birdcolor2");
$birdcolor3=mysql_result($result,$i,"birdcolor3");
$birdtype=mysql_result($result,$i,"birdtype");
$birdsize=mysql_result($result,$i,"birdsize");
$sciname=mysql_result($result,$i,"sciname");
$commonname=mysql_result($result,$i,"commonname");
$familyname=mysql_result($result,$i,"familyname");
$birdlink=mysql_result($result,$i,"birdlink");
$dbdescription=mysql_result($result,$i,"dbdescription");
?>

<center><h3><font face="Arial">Bird Update Form</font></h3>
<table width="800" cellpadding="10" cellspacing="0" border="0" > <tbody style="font-family:arial">  
  <tr align="center" valign="top">
     <td align="center" colspan="3">
	  <form action="registration_change_record.php" method="POST">
	  <input type="hidden" name="ud_dbname" value="<?php echo "$dbname" ?>"></td></tr>
  <tr>
	  <td width="500">
	   <font color="#FF0000">**</font>Bird Color 1:</div></td><!-- Col 1 -->
    <td><select name="ud_birdcolor1"><option value="<?php echo "$birdcolor1"; ?>"><?php echo "$birdcolor1"; ?></option><option value="red">red</option><option value="orange">orange</option><option value="yellow">yellow</option><option value="green">green</option><option value="blue">blue</option><option value="purple">purple</option><option value="brown">brown</option><option value="black">black</option><option value="white">white</option></select> &nbsp;&nbsp;Current Value: <?php echo "$birdcolor1"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Bird Color 2:</div></td><!-- Col 1 -->
     <td><select name="ud_birdcolor2"><option value="<?php echo "$birdcolor2"; ?>"><?php echo "$birdcolor2"; ?></option><option value="red">red</option><option value="orange">orange</option><option value="yellow">yellow</option><option value="green">green</option><option value="blue">blue</option><option value="purple">purple</option><option value="brown">brown</option><option value="black">black</option><option value="white">white</option></select> &nbsp;&nbsp;Current Value: <?php echo "$birdcolor2"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Bird Color 3:</div></td><!-- Col 1 -->
     <td> <select name="ud_birdcolor3"><option value="<?php echo "$birdcolor3"; ?>"><?php echo "$birdcolor3"; ?></option><option value="red">red</option><option value="orange">orange</option><option value="yellow">yellow</option><option value="green">green</option><option value="blue">blue</option><option value="purple">purple</option><option value="brown">brown</option><option value="black">black</option><option value="white">white</option></select> &nbsp;&nbsp;Current Value: <?php echo "$birdcolor3"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Bird Type (taken from Audubon Quick Guide):</div></td><!-- Col 1 -->
     <td><select name="ud_birdtype"><option value="<?php echo "$birdtype"; ?>"><?php echo "$birdtype"; ?></option><option value="Chicken-like marsh birds">Chicken-like marsh birds</option><option value="Gull-like birds">Gull-like birds</option><option value="Hummingbirds">Hummingbirds</option><option value="Owls">Owls</option><option value="Pigeon-like birds">Pigeon-like birds</option><option value="Swallow-like birds">Swallow-like birds</option><option value="Upland ground birds">Upland ground birds</option><option value="Duck-like birds">Duck-like birds</option><option value="Hawk-like birds">Hawk-like birds</option><option value="Long-legged wader birds">Long-legged wader birds</option><option value="Perching birds">Perching birds</option><option value="Sandpiper-like birds">Sandpiper-like birds</option><option value="Tree-clinging birds">Tree-clinging birds</option><option value="Upright-perching water birds">Upright-perching water birds</option></select> &nbsp;&nbsp;Current Value: <?php echo "$birdtype"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Bird Size:</div></td><!-- Col 1 -->
     <td><select name="ud_birdsize"><option value="<?php echo "$birdsize"; ?>"><?php echo "$birdsize"; ?></option><option value="Very Large">Very Large</option><option value="Large">Large</option><option value="Medium">Medium</option><option value="Small">Small</option><option value="Very Small">Very Small</option></select> &nbsp;&nbsp;Current Value: <?php echo "$birdsize"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Family Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="ud_familyname" value="<?php echo "$familyname"; ?>"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Scientific Name:<br><small>Genus and Species</small></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="ud_sciname" value="<?php echo "$sciname"; ?>"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Common Name(s):</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="ud_commonname" value="<?php echo "$commonname"; ?>"></td><!-- Col 2 -->
  </tr>

    <tr><!-- Row 4 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Link:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="ud_birdlink" value="<?php echo "$birdlink" ;?>"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Photo 1:</div></td><!-- Col 1 -->
     <td><select name="ud_dbphoto1"><option value="<?php echo "$dbphoto1"; ?>"><?php echo "$dbphoto1"; ?></option><option value="yes">yes</option><option value="none">none</option></select> </td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Photo 2:</div></td><!-- Col 1 -->
     <td><select name="ud_dbphoto2"><option value="<?php echo "$dbphoto2"; ?>"><?php echo "$dbphoto2"; ?></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Photo 3:</div></td><!-- Col 1 -->
     <td><select name="ud_dbphoto3"><option value="<?php echo "$dbphoto3"; ?>"><?php echo "$dbphoto3"; ?></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
  <tr>
  	  <td align="center" colspan="1"> Description: </td><td align="center" colspan="1">
  	  <textarea name="ud_dbdescription" cols=80 rows=25 wrap=virtual><?php echo "$dbdescription"?></textarea></td>
  </tr>
</table><br><br>
<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" />
</form></center>

<?php
++$i;
}
?>

<br><br><br><br><br>
 <hr><center><br>
<p class="c2"><font face="Arial">Last update: June 16, 2014</font></p></center>

<!-- ============================== STOP Center Content Entry ============================  -->
<hr><center><br>
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->
<?php include("../../include/footer.php"); ?>
<?php
}
?>
</body>
</html>

