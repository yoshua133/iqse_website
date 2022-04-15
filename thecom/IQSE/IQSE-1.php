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


<div align="center"><font color="#500000"><font size="6">Welcome to the IQSE Module</font><br>(Please select the Function you wish to access)</font></div>
  </div>
  <br> <br>
  
<table>
<tr>
<tr>
<td style="padding-left: 50px;">
 <ul>
	<li>	<font size="4"><b>Reminders</b></font> </li><br><br>
	<ul>
	<li>	<font size="3"><b><a href="reminders2.php">Set Reminder</a></b></font> </li><br>
	<li>	<font size="3"><b><a href="2updatereminder/registration_update_form.php">Edit Reminder</a></b></font> </li><br>
		<li>	<font size="3"><b><a href="reminder/reminder_list4.php">Reminder List Ordered by Activity Type</a></b></font> </li><br>
	<li>	<font size="3"><b><a href="reminder/reminder_list3.php">Reminder List Ordered by Trigger Date</a></b></font> </li><br>
	</ul>
 </ul>
</td>
</tr>
<td style="padding-left: 50px;">
 <ul>
	<li>	<font size="4"><b>Event Functions</b></font> </li><br><br>
	<ul>
	<li>	<font size="3"><b><a href="eventform.php">New Event Entry</a></b></font> </li><br>
	<li>	<font size="3"><b><a href="2updateevent/registration_update_form.php">Update an Existing Event Entry</a></b></font> </li><br>
	<li>	<font size="3"><b><a href="2copyevent/registration_copy_form.php">Copy to Add New Event Entry</a></b></font> </li><br>
	<li>	<font size="3"><b><a href="2deleteevent/registration_delete_form.php">Delete an Existing Event Entry</a></b></font> </li><br>
    </ul>  
  </ul> 
</td>
</tr>
<tr>
<td style="padding-left: 50px;">
 <ul>
	<li>	<font size="4"><b>Honor and Award Functions</b></font> </li><br><br>
	<ul>
	<li>	<font size="3"><b><a href="honorsform.php">New Honors Entry</a></b></font> </li><br>
	<li>	<font size="3"><b><a href="2updatehonors/registration_update_form.php">Update an Existing Honors Entry</a></b></font> </li><br>
	</ul> </ul> 
</td>
</tr>
<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>    <font size="4"><b>People Functions</b></font> </li><br><br>
    <ul>
    <li>  	<font size="3"><b><a href="peopleform.php">New Entry</a></b></font> </li><br>
    <li>	<font size="3"><b><a href="2updateadmin/registration_update_form.php">Update an Existing Entry</a></b></font> </li><br>
	<li>	<a href="master.php"><b>Master List of Faculty Assigned Unames</b></a></li><br>
 </td>
 </tr>

<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>    <font size="4"><b>Whose Who in the IQSE?</b></font> </li><br><br>
    <ul>
    <li>  	<font size="3"><b><a href="2glpeople/inputform.php">Input Faculty Username to see affiliated group Members</a></b></font> </li><br>
	<li>  	<font size="3"><b><a href="2glpeople/inputform2.php">Input Faculty Username to see affiliated group Members (Abbreviated List)</a></b></font> </li><br>

 </td>
 </tr>

</table>
<br><br>
<div align="center"><?php include("include/footer.php"); ?></div>

  </body>
</html>

<?php 
    } 
?>  