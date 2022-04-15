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

$query=" SELECT * FROM SaFERplants WHERE dbname='$dbname'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$plantcolor1=mysql_result($result,$i,"plantcolor1");
$plantcolor2=mysql_result($result,$i,"plantcolor2");
$plantcolor3=mysql_result($result,$i,"plantcolor3");
$plantcolor4=mysql_result($result,$i,"plantcolor4");
$plantcolor5=mysql_result($result,$i,"plantcolor5");
$planttype=mysql_result($result,$i,"planttype");
$plantloc=mysql_result($result,$i,"plantloc");
$leafshape=mysql_result($result,$i,"leafshape");
$leafmargin=mysql_result($result,$i,"leafmargin");
$treebranching=mysql_result($result,$i,"treebranching");
$barktype=mysql_result($result,$i,"barktype");
$seedtype=mysql_result($result,$i,"seedtype");
$sciname=mysql_result($result,$i,"sciname");
$commonname=mysql_result($result,$i,"commonname");
$familyname=mysql_result($result,$i,"familyname");
$dbphoto1=mysql_result($result,$i,"dbphoto1");
$dbphoto2=mysql_result($result,$i,"dbphoto2");
$dbphoto3=mysql_result($result,$i,"dbphoto3");
$dbphoto4=mysql_result($result,$i,"dbphoto4");
$dbphoto5=mysql_result($result,$i,"dbphoto5");
$plantlink=mysql_result($result,$i,"plantlink");
$dbdescription=mysql_result($result,$i,"dbdescription");
?>

<center><h3><font face="Arial">Plant Update Form</font></h3>
<table width="800" cellpadding="10" cellspacing="0" border="0" > <tbody style="font-family:arial">  
  <tr align="center" valign="top">
     <td align="center" colspan="3">
	  <form action="registration_change_record.php" method="POST">
	  <input type="hidden" name="ud_dbname" value="<?php echo "$dbname" ?>"></td></tr>
  <tr>
	  <td width="500">
	   <font color="#FF0000">**</font>Plant Color 1:</div></td><!-- Col 1 -->
    <td><select name="ud_plantcolor1"><option value="<?php echo "$plantcolor1"; ?>"><?php echo "$plantcolor1"; ?></option><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> &nbsp;&nbsp;Current Value: <?php echo "$plantcolor1"; ?></td><!-- Col 2 -->
  </tr>
  <tr>
	  <td width="500">
	   <font color="#FF0000">**</font>Plant Color 2:</div></td><!-- Col 1 -->
    <td><select name="ud_plantcolor2"><option value="<?php echo "$plantcolor2"; ?>"><?php echo "$plantcolor2"; ?></option><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> &nbsp;&nbsp;Current Value: <?php echo "$plantcolor2"; ?></td><!-- Col 2 -->
   </tr>
  <tr>
	  <td width="500">
	   <font color="#FF0000">**</font>Plant Color 3:</div></td><!-- Col 1 -->
    <td><select name="ud_plantcolor3"><option value="<?php echo "$plantcolor3"; ?>"><?php echo "$plantcolor3"; ?></option><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> &nbsp;&nbsp;Current Value: <?php echo "$plantcolor3"; ?></td><!-- Col 2 -->
  </tr>
  <tr>
	  <td width="500">
	   <font color="#FF0000">**</font>Plant Color 5:</div></td><!-- Col 1 -->
    <td><select name="ud_plantcolor4"><option value="<?php echo "$plantcolor4"; ?>"><?php echo "$plantcolor4"; ?></option><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> &nbsp;&nbsp;Current Value: <?php echo "$plantcolor4"; ?></td><!-- Col 2 -->
  </tr>
  <tr>
	  <td width="500">
	   <font color="#FF0000">**</font>Plant Color 5:</div></td><!-- Col 1 -->
    <td><select name="ud_plantcolor5"><option value="<?php echo "$plantcolor5"; ?>"><?php echo "$plantcolor5"; ?></option><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> &nbsp;&nbsp;Current Value: <?php echo "$plantcolor5"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Plant Type (taken from Audubon Quick Guide):</div></td><!-- Col 1 -->
     <td><select name="ud_planttype"><option value="<?php echo "$planttype"; ?>"><?php echo "$planttype"; ?></option><option value="Forb-Herb like Plants">Forb-Herb Like Plants</option><option value="Grass-like Plants">Grass-like Plants</option><option value="Lichen-like Organisms">Lichen-like Organisms</option><option value="Nonvascular Plants">Nonvascular Plants</option><option value="Shrub-like Plants">Shrub-like Plants</option><option value="Tree-like Plants">Tree-like Plants</option><option value="Vines">Vines</option></select> &nbsp;&nbsp;Current Value: <?php echo "$planttype"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Plant Location:</div></td><!-- Col 1 -->
     <td><select name="ud_plantloc"><option value="<?php echo "$plantloc"; ?>"><?php echo "$plantloc"; ?></option><option value="Aquatic">Aquatic</option><option value="Forest">Forest</option><option value="Prairie">Prairie</option><option value="Upland">Upland</option><option value="Wetland">Wetland</option></select> &nbsp;&nbsp;Current Value: <?php echo "$plantloc"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Leaf Shape or Pattern (Trees):</div></td><!-- Col 1 -->
     <td><select name="ud_leafshape"><option value="<?php echo "$leafshape"; ?>"><?php echo "$leafshape"; ?></option><option value="Alternate">Alternate</option><option value="Opposite">Opposite</option><option value="Whorled">Whorled</option><option value="Conifer--Needle Shape">Conifer--Needle Shape</option><option value="Conifer--not Needle Shape">Conifer--not Needle Shape</option><option value="Simple--Lobed">Simple--Lobed</option><option value="Simple--Not Lobed">Simple--Not Lobed</option></select> &nbsp;&nbsp;Current Value: <?php echo "$leafshape"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Leaf Margin (Trees):</div></td><!-- Col 1 -->
     <td><select name="ud_leafmargin"><option value="<?php echo "$leafmargin"; ?>"><?php echo "$leafmargin"; ?></option><option value="Crenate (Rounded Toothed)">Crenate (Rounded Toothed)</option><option value="Dentate">Dentate</option><option value="Entire(Smooth)">Entire (Smooth)</option><option value="Incised">Incised</option><option value="Serrate (Toothed)">Serrate (Toothed)</option><option value="Doubly Serrate">Doubly Serrate</option><option value="Undulate (Wavy)">Undulate (Wavy)</option><option value="Other">Other</option></select> &nbsp;&nbsp;Current Value: <?php echo "$leafmargin"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Branching Habit (Trees):</div></td><!-- Col 1 -->
     <td><select name="ud_treebranching"><option value="<?php echo "$treebranching"; ?>"><?php echo "$treebranching"; ?></option><option value="Alternate">Alternate</option><option value="Opposite">Opposite</option></select> &nbsp;&nbsp;Current Value: <?php echo "$treebranching"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Bark Type (Trees):</div></td><!-- Col 1 -->
     <td><select name="ud_barktype"><option value="<?php echo "$barktype"; ?>"><?php echo "$barktype"; ?></option> <option value="Paper-like">Paper-like</option><option value="Rough">Rough</option><option value="Smooth">Smooth</option></select> &nbsp;&nbsp;Current Value: <?php echo "$barktype"; ?></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="500"><div align="center"><font color="#FF0000">**</font>Seed Type (Trees):</div></td><!-- Col 1 -->
     <td><select name="ud_seedtype"><option value="<?php echo "$seedtype"; ?>"><?php echo "$seedtype"; ?></option> <option value="Berry-like">Berry-like</option><option value="Cherry-like">Cherry-like</option><option value="Cone">Cone</option><option value="Hairy">Hairy</option><option value="Multiple-seed">Multiple-Seed</option><option value="Nut--No Husk">Nut--No Husk</option><option value="Nut--with Husk">Nut--with Husk</option><option value="Pod">Pod</option><option value="Spiny">Spiny</option><option value="Winged">Winged</option></select> &nbsp;&nbsp;Current Value: <?php echo "$seedtype"; ?></td><!-- Col 2 -->
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
     <td><input type="text" size="35"  name="ud_plantlink" value="<?php echo "$plantlink" ;?>"></td><!-- Col 2 -->
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
    <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Photo 4:</div></td><!-- Col 1 -->
     <td><select name="ud_dbphoto4"><option value="<?php echo "$dbphoto4"; ?>"><?php echo "$dbphoto4"; ?></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
    <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Photo 5:</div></td><!-- Col 1 -->
     <td><select name="ud_dbphoto5"><option value="<?php echo "$dbphoto5"; ?>"><?php echo "$dbphoto5"; ?></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
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

