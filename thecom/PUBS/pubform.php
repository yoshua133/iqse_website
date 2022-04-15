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





<html lang="en">
  <head>
    <meta charset="utf-8">
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
<div align="center"><font color="#500000"><font size="6">Enter Publication Information</font> </font><br></div>
 <center> (<font color="#FF0000"><b>ALL Fields Required</b></font>)  </center> <br><br>

<form action="pubform2insert.php" method="POST">
<center><table width="500" cellpadding="10" cellspacing="0" border="1" ></center>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Publication's DOI:<br><small>(Enter <font color="#FF0000">none</font>, if none)</small></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="pubdoi" value="e.g., none or 10.1073/pnas.172290899" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Publication Information <br><small>(format: Doe, J. and Smith, J., "Title", Journal, vol., pp/art no. (year))</small>:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbpub"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Authors' IQSE Assigned Unames (usernames, e.g., asokolov, mscully, mszubairy):</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbunames" value="if unknown, use master list" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Publication Date: <br> (format yyyymmdd)</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="pubDate" value="yyyymmdd" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Comment 1:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbcomment1" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Comment 2:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbcomment2" value="none" ></td><!-- Col 2 -->
  </tr><tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Comment 3:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbcomment3" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Comment 4</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbcomment4" value="none" ></td><!-- Col 2 -->
  </tr>
  
 </table>
<br><br>

<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" >
</form></center>
   </tr>

<br><br>
<div align="center"><?php include("include/footer.php"); ?></div>

  </body>
</html>


<?php 
    } 
?> 