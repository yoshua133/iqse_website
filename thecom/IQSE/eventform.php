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
<?php include("include/header.php"); ?>  
<?php include("include/topmenu.php"); ?>

<div align="center"><font color="#500000"><font size="6">Add an Event to the IQSE Database</font> </font><br></div>
 <center> (<font color="#FF0000"><b>**Fields Required</b></font>)  </center> <br><br>
<form action="eventform2insert.php" method="POST">
<center> <table width="500" cellpadding="10" cellspacing="0" border="1" >
   <tr><!-- Row 10 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Type of Talk:</div></td><!-- Col 1 -->
     <td><input type="text" size="100" value="AMO/QO Physics Seminar" name="talktype" ></td><!-- Col 2 -->
  </tr> 
   </tr>
    <tr><!-- Row 3 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Title of Talk:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="speakertitle" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Speaker's Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="speakername" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Speaker's Affiliation:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="speakeraffil" ></td><!-- Col 2 -->
 
  
  <tr><!-- Row 4 -->
  <td align="right"><P> <strong> Abtract:</strong><br></td>
<td><textarea name="speakerabstract" cols=80 rows=25 wrap=virtual> <center>TBA</center> </textarea></p>
</tr>

    <tr><!-- Row 5 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Date of Talk:<br></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="talkdate" value="as to appear on announcement"</td><!-- Col 2 -->
  </tr>
  
<tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Year talk is being given (ordering variable, [yyyy], e.g., 2012):</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="talkyear" value="2012"></td><!-- Col 2 -->
  </tr>
<tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Month Day of Talk (used to order event list [mmdd]): <br><small>(e.g., October 2 should be entered as 1002)</small></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dborder" value="mmdd"></td><!-- Col 2 -->
  </tr>

  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Event Date (used to place on Calendar [mm/dd/yyyy]):</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="eventDate" value="mm/dd/yyyy"></td><!-- Col 2 -->
  </tr>    
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Multi-Day Event Listing?:<br><small> 1st occurence="no"</small></div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment6" value="no"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 6 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Time of Talk:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="talktime" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 7 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Talk Location:<br><small><font color="#FF0000">(4 digit building code plus Room number)</font></small></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="talkloc" value="IQSE 578" </td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 11 -->
     <td align="center" width="200"><div align="center">Building in which Talk will be given:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="talkbuilding" value="Mitchell Physics Building"></td><!-- Col 2 -->
  </tr>  
    <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Event Web Address:<br> (form: http://www.webaddress.com)</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbwaddress" value="none"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Sponsor:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbsponsor" value="Institute for Quantum Science and Engineering<br>Texas A&M University"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Refreshment Comment:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbfood" value="(Coffee and Cookies to be served 15 minutes prior start time)"></td><!-- Col 2 -->
   </tr>
  <tr><!-- Row 8 -->
     <td align="center" width="200"><div align="center">Host:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="speakerhost" ></td><!-- Col 2 -->
  </tr> 
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Host's Email Address</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="hostemail" value="none"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 9 -->
     <td align="center" width="200"><div align="center">Name of person posting this information:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbposter" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Comment 1:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment1" value="none"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Comment 2:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment2" value="none"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Comment 3: SWDLS Event Info Location</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment3" value="none or http://..."></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Comment 4: SWDLS reception?</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment4" value="none"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 12 -->
     <td align="center" width="200"><div align="center">Comment 5:SWDLS speaker uname</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment5" value="none"></td><!-- Col 2 -->
  </tr>

</table><br><br>
<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" />
</form></center>
   
<br><br>
<div align="center"><?php include("include/footer.php"); ?></div>
  </body>
</html>


<?php 
    } 
?>  