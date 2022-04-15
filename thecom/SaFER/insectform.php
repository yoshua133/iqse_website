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
<form action="insectform2insert.php" method="POST">
<center> <table width="500" cellpadding="10" cellspacing="0" border="1" >
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Insect Color 1:</div></td><!-- Col 1 -->
     <td><select name="dbcolor1"><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Insect Color 2:</div></td><!-- Col 1 -->
     <td><select name="dbcolor2"><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Insect Color 3:</div></td><!-- Col 1 -->
     <td><select name="dbcolor3"><option value=""></option><option value="black">black</option><option value="blue">blue</option><option value="brown">brown</option><option value="green">green</option><option value="grey">grey</option><option value="maroon">maroon</option><option value="orange">orange</option><option value="pink">pink</option><option value="purple">purple</option><option value="red">red</option><option value="white">white</option><option value="yellow">yellow</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Number of Legs:</div></td><!-- Col 1 -->
     <td><select name="legs6or8"><option value=""></option><option value="Six">Six</option><option value="Eight">Eight</option><option value="More than Eight">More than Eight</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Does it have Wings?:</div></td><!-- Col 1 -->
     <td><select name="winged"><option value=""></option><option value="No">No</option><option value="Yes">Yes</option></select> </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Does it have any unique characteristics?:</div></td><!-- Col 1 -->
     <td><select name="dbspecial"><option value=""></option><option value="Abdomen: Segmented">Abdomen: Segmented</option><option value="Antennae: Long">Antennae: Long</option><option value="Antennae: Bent">Antennae: Bent</option><option value="Body: Covered with tiny hairs">Body: Covered with tiny hairs</option><option value="Body: Shaped like a Shield">Body: Shaped like a Shield</option><option value="Eyes: Large">Eyes: Large</option><option value="Eyes: Meet on top of head">Eyes: Meet on top of head</option><option value="Eyes: None">Eyes: None</option><option value="Neck: Long">Neck: Long</option><option value="Head: Large (compared to chest)">Head: Large (compared to chest)</option><option value="Head: Small (compared to body)">Head: Small (compared to body)</option><option value="Head: Snout-like ">Head: Snout-like </option><option value="Legs: Forelegs praying ">Legs: Forelegs praying </option><option value="Legs: Long hind legs (jumper?)">Legs: Long hind legs (jumper?)</option><option value="Tail: "Two?"">Tail: "Two?"</option><option value="Tail: Three (or more)">Tail: Three (or more)</option><option value="Waist: Constricted (wasp/bee-like)">Waist: Constricted (wasp/bee-like)</option><option value="Wings: Fan-like">Wings: Fan-like</option><option value="Wings: Transparent">Wings: Transparent</option></select> </td><!-- Col 2 -->
  </tr>  
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Type?:</div></td><!-- Col 1 -->
     <td><select name="dbtype"><option value=""></option><option value="Ant-like">Ant-like</option><option value="Bee-like/Wasp-like">Bee-like/Wasp-like</option><option value="Beetle-like">Beetle-like</option><option value="Butterfly/Moth-like">Butterfly/Moth-like</option><option value="Centipede-like">Centipede-like</option><option value="Cicada-like">Cicada-like</option><option value="Cockroach-like">Cockroach-like</option><option value="Dragonfly-like">Dragonfly-like</option><option value="Earwig-like">Earwig-like</option><option value="Fly-like">Fly-like</option><option value="Grasshopper/Cricket-like">Grasshopper/Cricket-like</option><option value="Mayfly-like">Mayfly-like</option><option value="Spider-like">Spider-like</option><option value="Stick-like">Stick-like</option></select> </td><!-- Col 2 -->
  </tr>
  
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">What is its habit?:</div></td><!-- Col 1 -->
     <td><select name="dbhabit"><option value=""></option><option value="Biting Bugs">Biting Bugs</option><option value="Flying Bugs">Flying Bugs</option><option value="Jumping Bugs">Jumping Bugs</option><option value="Noisy Bugs">Noisy Bugs</option><option value="Stinging Bugs">Stinging Bugs</option><option value="Sucking Bugs">Sucking Bugs</option></select> </td><!-- Col 2 -->
  </tr> 
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Where was it found?:</div></td><!-- Col 1 -->
     <td><select name="dbhabitat"><option value=""></option><option value="Aquatic">Aquatic</option><option value="Forest">Forest</option><option value="Prairie">Prairie</option><option value="Upland">Upland</option><option value="Wetland">Wetland</option><option value="Found Under rocks/logs">Found Under rocks/logs</option><option value="Lives in the Soil">Lives in the Soil</option><option value="Multiple">Multiple</option></select> </td><!-- Col 2 -->
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
     <td><input type="text" size="35"  name="insectlink" value="none"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
      <td align="right"><P> <strong>Description:</strong><br></td>
      <td><textarea name="dbdescription" cols=80 rows=25 wrap=virtual> <center>TBA</center></textarea></p>
  </tr>
  <tr><!-- Row 4 -->
      <td align="right"><P> <strong>Description 2:</strong><br></td>
      <td><textarea name="dbdescription2" cols=80 rows=25 wrap=virtual> <center>TBA</center></textarea></p>
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
