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
  <?php include("../include/headerSaFER.php"); ?>
<?phpinclude("include/topmenu.php"); ?>
<br><br>

<div align="center"><h2><font color="#500000">Add a New Bird to SaFER Database </h2></font><br></div>
 <br> <center>
  <br> (<font color="#FF0000"><b>**Fields Required</b></font>) <br><br>
<form action="birdform2insert.php" method="POST">
<center> <table width="500" cellpadding="10" cellspacing="0" border="1" >
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Bird Color 1:</div></td><!-- Col 1 -->
     <td><select name="birdcolor1"><option value=""></option><option value="red">red</option><option value="orange">orange</option><option value="yellow">yellow</option><option value="green">green</option><option value="blue">blue</option><option value="purple">purple</option><option value="brown">brown</option><option value="black">black</option><option value="white">white</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Bird Color 2:</div></td><!-- Col 1 -->
     <td><select name="birdcolor2"><option value=""></option><option value="red">red</option><option value="orange">orange</option><option value="yellow">yellow</option><option value="green">green</option><option value="blue">blue</option><option value="purple">purple</option><option value="brown">brown</option><option value="black">black</option><option value="white">white</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Bird Color 3:</div></td><!-- Col 1 -->
     <td><select name="birdcolor3"><option value=""></option><option value="red">red</option><option value="orange">orange</option><option value="yellow">yellow</option><option value="green">green</option><option value="blue">blue</option><option value="purple">purple</option><option value="brown">brown</option><option value="black">black</option><option value="white">white</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Bird Type (taken from Audubon Quick Guide):</div></td><!-- Col 1 -->
     <td><select name="birdtype"><option value=""></option><option value="Chicken-like marsh birds">Chicken-like marsh birds</option><option value="Gull-like birds">Gull-like birds</option><option value="Hummingbirds">Hummingbirds</option><option value="Owls">Owls</option><option value="Pigeon-like birds">Pigeon-like birds</option><option value="Swallow-like birds">Swallow-like birds</option><option value="Upland ground birds">Upland ground birds</option><option value="Duck-like birds">Duck-like birds</option><option value="Hawk-like birds">Hawk-like birds</option><option value="Long-legged wader birds">Long-legged wader birds</option><option value="Perching birds">Perching birds</option><option value="Sandpiper-like birds">Sandpiper-like birds</option><option value="Tree-clinging birds">Tree-clinging birds</option><option value="Upright-perching water birds">Upright-perching water birds</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Bird Size:</div></td><!-- Col 1 -->
     <td><select name="birdsize"><option value=""></option><option value="Very Large">Very Large</option><option value="Large">Large</option><option value="Medium">Medium</option><option value="Small">Small</option><option value="Very Small">Very Small</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Family Name:<br></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="familyname"<small><font color="#FF0000"></font></small></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Scientific Name:<br></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="sciname"<small><font color="#FF0000" value="genus and species"></font></small></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Common Name(s):</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="commonname" ></td><!-- Col 2 -->
  </tr>
  </tr>
    <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>dbname:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbname" ></td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Photo 1:</div></td><!-- Col 1 -->
     <td><select name="dbphoto1"><option value=""></option><option value="yes">yes</option><option value="none">none</option></select> </td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Photo 2:</div></td><!-- Col 1 -->
     <td><select name="dbphoto2"><option value=""></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Photo 3:</div></td><!-- Col 1 -->
     <td><select name="dbphoto3"><option value=""></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Link:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="birdlink" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
      <td align="right"><P> <strong>Description:</strong><br></td>
      <td><textarea name="dbdescription" cols=80 rows=25 wrap=virtual> <center>TBA</center></textarea></p>
  </tr>
    
 </table><br><br>
<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" />
</form></center>


<br><br>
  </body>
</html>

<br><br>
<?php include("../include/footer.php"); ?>

<?php 
    } 
?>  
