<?php 
session_start(); //Allows you to use sessions 
$user = "ART"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username3'] == $user AND $_POST['password3'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username3'] = $_POST['username3'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/ART/ART.php">Login?</a>'); 
  } 
else 
    { 
?> 




<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    
  </head>
  <body>
<?php include("../include/headerART.php"); ?>
<?phpinclude("include/topmenu.php"); ?>
<br><br>
<table>
<tbody style="font-family:arial">
<tr>
<td style="padding-left: 50px;">
 <ul>
<script type="text/javascript" src="swfobject.js"></script><div id="CC2852934">Form Object</div><script type="text/javascript">var so = new SWFObject("peopleform.swf", "peopleform.xml", "550", "1100", "7,0,0,0", "#ffffff");so.addParam("classid", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000");so.addParam("quality", "high");so.addParam("scale", "noscale");so.addParam("salign", "lt");so.addParam("FlashVars", "xmlfile=peopleform.xml&w=550&h=1100");so.write("CC2852934");</script> 
</td>
</tr>
</table>
   
  </body>
</html>

<br><br>
<?php include("../include/footer.php"); ?>

<?php 

    } 
?>  
