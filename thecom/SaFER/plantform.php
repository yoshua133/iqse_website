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
  

<div align="center"><h2><font color="#500000">Add a New Plant to SaFER Database </h2></font><br></div>
 <br> <center>
  <br> (<font color="#FF0000"><b>**Fields Required</b></font>) <br><br>
<form action="plantform2insert.php" method="POST">
<center> <table width="500" cellpadding="10" cellspacing="0" border="1" >
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Plant Color 1:</div></td><!-- Col 1 -->
     <td><select name="plantcolor1"><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">PlantColor 2:</div></td><!-- Col 1 -->
     <td><select name="plantcolor2"><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Plant Color 3:</div></td><!-- Col 1 -->
     <td><select name="plantcolor3"><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Plant Color 4:</div></td><!-- Col 1 -->
     <td><select name="plantcolor4"><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Plant Color 5:</div></td><!-- Col 1 -->
     <td><select name="plantcolor5"><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Plant Type or Habit:</div></td><!-- Col 1 -->
     <td><select name="planttype"><option value=""></option><option value="Forb-Herb like Plants">Forb-Herb Like Plants</option><option value="Grass-like Plants">Grass-like Plants</option><option value="Lichen-like Organisms">Lichen-like Organisms</option><option value="Nonvascular Plants">Nonvascular Plants</option><option value="Shrub-like Plants">Shrub-like Plants</option><option value="Tree-like Plants">Tree-like Plants</option><option value="Vines">Vines</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Plant Location or Habitat:</div></td><!-- Col 1 -->
     <td><select name="plantloc"><option value=""></option><option value="Aquatic">Aquatic</option><option value="Forest">Forest</option><option value="Prairie">Prairie</option><option value="Upland">Upland</option><option value="Wetland">Wetland</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Leaf Shape or Pattern (Trees):</div></td><!-- Col 1 -->
     <td><select name="leafshape"><option value=""></option><option value="Alternate">Alternate</option><option value="Opposite">Opposite</option><option value="Whorled">Whorled</option><option value="Conifer--Needle Shape">Conifer--Needle Shape</option><option value="Conifer--not Needle Shape">Conifer--not Needle Shape</option><option value="Simple--Lobed">Simple--Lobed</option><option value="Simple--Not Lobed">Simple--Not Lobed</option></select> </td><!-- Col 2 -->
  </tr>  
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Broad Leaf Margin (Trees):</div></td><!-- Col 1 -->
     <td><select name="leafmargin"><option value=""></option><option value="Crenate (Rounded Toothed)">Crenate (Rounded Toothed)</option><option value="Dentate">Dentate</option><option value="Entire(Smooth)">Entire (Smooth)</option><option value="Incised">Incised</option><option value="Serrate (Toothed)">Serrate (Toothed)</option><option value="Doubly Serrate">Doubly Serrate</option><option value="Undulate (Wavy)">Undulate (Wavy)</option><option value="Other">Other</option></select> </td><!-- Col 2 -->
  </tr> 
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Branching Habit (Trees):</div></td><!-- Col 1 -->
     <td><select name="treebranching"><option value=""></option><option value="Alternate">Alternate</option><option value="Opposite">Opposite</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Bark Type (Trees):</div></td><!-- Col 1 -->
     <td><select name="barktype"><option value=""></option><option value="Paper-like">Paper-like</option><option value="Rough">Rough</option><option value="Smooth">Smooth</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Seed Type:</div></td><!-- Col 1 -->
     <td><select name="seedtype"><option value=""></option><option value="Berry-like">Berry-like</option><option value="Cherry-like">Cherry-like</option><option value="Cone">Cone</option><option value="Hairy">Hairy</option><option value="Multiple-seed">Multiple-Seed</option><option value="Nut--No Husk">Nut--No Husk</option><option value="Nut--with Husk">Nut--with Husk</option><option value="Pod">Pod</option><option value="Spiny">Spiny</option><option value="Winged">Winged</option></select> </td><!-- Col 2 -->
  </tr>

  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Family Name:<br></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="familyname"<small><font color="#FF0000"></font></small></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Scientific Name:<br></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="sciname"<small><font color="#FF0000" value="genus and species"></font></small></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Common Name(s):</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="commonname" ></td><!-- Col 2 -->
  </tr>
  </tr>
    <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">dbname:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbname" ></td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Photo 1:</div></td><!-- Col 1 -->
     <td><select name="dbphoto1"><option value=""></option><option value="yes">yes</option><option value="none">none</option></select> </td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Photo 2:</div></td><!-- Col 1 -->
     <td><select name="dbphoto2"><option value=""></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Photo 3:</div></td><!-- Col 1 -->
     <td><select name="dbphoto3"><option value=""></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Photo 4:</div></td><!-- Col 1 -->
     <td><select name="dbphoto4"><option value=""></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
   <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Photo 5:</div></td><!-- Col 1 -->
     <td><select name="dbphoto5"><option value=""></option><option value="none">none</option><option value="yes">yes</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Link:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="plantlink" value="none"></td><!-- Col 2 -->
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

<?php 
    } 
?>  
