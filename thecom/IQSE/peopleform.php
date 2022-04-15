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

<div align="center"><h2><font color="#500000">Add a New Person to IQSE Database </h2></font><br></div>
 <br> <center>
  <br> (<font color="#FF0000"><b>**Fields Required</b></font>) <br><br>
<form action="peopleform2insert.php" method="POST">
<center> <table width="500" cellpadding="10" cellspacing="0" border="1" >
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>First Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="first" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Last Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="last" ></td><!-- Col 2 -->
  </tr>
    <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Email Address:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="email" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Office Location:<br></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="oloc"<small><font color="#FF0000">(4 digit building code plus Room number)</font></small></td><!-- Col 2 -->
  </tr>
    <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Office Phone:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="ophone" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Lab Location:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="lloc"<small><font color="#FF0000">(4 digit building code plus Room number)</font></small></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Lab Phone:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="lphone" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Fax number:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="fphone" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Position Title 1:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="title" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Position Title 2:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="title2" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Position Title 3:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="title3" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Area of Interest:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dept" value="(none, or e.g., Quantum Optics)"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Department 2:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dept2" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Department 3:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dept3" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Uname:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="uname" value="(First Initial+ Last Name)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Classification:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="classification" value="(ug, gs, researcher, faculty, visitor)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Group ID:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbgroupmbr" value="(e.g., The Scully group is mscully)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Work Group:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbworkgroup" value="(Enter Professors' full names)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Status</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbstatus" value="(Active, Inactive only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Date Added:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbdateadd" value="(yr month day (e.g., 10/26/2011 is 111026))" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Date Updated:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbdatechange" value="(e.g., December 20, 2011)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Date Terminated:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbdateterm" value="ye month day (10/26/2011 is 111026)"></td><!-- Col 2 -->
  </tr>
  <tr>
  	   <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Semester Added:</div></td>
	   <td><input type="text" size="35" name="dbFYadd" value="e.g., 2011Fall, 2011Spring, or 2011Summer"></td>
  </tr>
  <tr>
  <td align="center" width="200"><div align="center">Semester Terminated:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbFYterm" value="e.g., 2011Fall, 2011Spring, or 2011Summer" ></td><!-- Col 2 -->
  </tr>
  <tr>
  <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Homepage:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbwaddress" value="none or http://" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Comment 1: CV?</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment1" value="no cv = none"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Comment 2: Photo? </div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment2"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Comment 3: Publications?</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment3"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Comment 4:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment4"></td><!-- Col 2 -->
  </tr>	  	   
<tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Comment 5:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment5"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Comment 6:</div></td><!-- Col 1 -->
     <td><input type="text" size="100"  name="dbcomment6"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
  <td align="right"><P> <strong>Description:</strong><br></td>
<td><textarea name="dbdescription" cols=80 rows=25 wrap=virtual> <center>TBA</center></textarea></p>
</tr>
</table><br><br>
<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" />
</form></center>
   </tr>

<br><br>
<div align="center"><?php include("include/footer.php"); ?></div>

  </body>
</html>

<?php 
    } 
?>  
