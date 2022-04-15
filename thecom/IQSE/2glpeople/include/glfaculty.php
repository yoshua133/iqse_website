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

<html>
<body>


<!-- ============================== Enter Center Content ============================  -->
<?php $uname=$_POST['uname'];
  
//registration_change_form.php
?>

<html><head><title>Update Profile Form</title>
<style>
p { page-break-after: always}
</style>


</head>
<body>
<center><h3>Research Faculty</h3></center>
<center>
<table width="96%" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr valign="top">

<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSEpeople WHERE classification='faculty' AND dbgroupmbr Like '%$uname%' AND dbstatus='active'ORDER BY last ASC";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);

$i=0;
$j=0;
while ($i < $num) {
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$email=mysql_result($result,$i,"email");
$oloc=mysql_result($result,$i,"oloc");
$ophone=mysql_result($result,$i,"ophone");
$lloc=mysql_result($result,$i,"lloc");
$uname=mysql_result($result,$i,"uname");
$lphone=mysql_result($result,$i,"lphone");
$fphone=mysql_result($result,$i,"fphone");
$title=mysql_result($result,$i,"title");
$title2=mysql_result($result,$i,"title2");
$title3=mysql_result($result,$i,"title3");
$dept=mysql_result($result,$i,"dept");
$dept2=mysql_result($result,$i,"dept2");
$dept3=mysql_result($result,$i,"dept3");
$classification=mysql_result($result,$i,"classification");
$dbgroupmbr=mysql_result($result,$i,"dbgroupmbr");
$dbstatus=mysql_result($result,$i,"dbstatus");
$dbdatechange=mysql_result($result,$i,"dbdatechange");
$dbdateadd=mysql_result($result,$i,"dbdateadd");
$dbdateterm=mysql_result($result,$i,"dbdateterm");
$dbFYadd=mysql_result($result,$i,"dbFYadd");
$dbFYterm=mysql_result($result,$i,"dbFYterm");
$dbwaddress=mysql_result($result,$i,"dbwaddress");
$dbdescription=mysql_result($result,$i,"dbdescription");
$dbworkgroup=mysql_result($result,$i,"dbworkgroup");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
$dbcomment4=mysql_result($result,$i,"dbcomment4");
$dbcomment5=mysql_result($result,$i,"dbcomment5");
$dbcomment6=mysql_result($result,$i,"dbcomment6");
?>

<?php
$start = 0;
$end = 100;
$split = 4;
?>
<?php If(($i) % ($split) == $split-1){echo "</td><td width=\"20%\" height=\"380\">&nbsp;<br><center><img src=\"../../../people/images/".$uname.".jpg\" height=\"150\" /> <br> <b><font size=\"+1\">$first &nbsp; $last</font></b></center> <br> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Title: </b>$title <br><b>&nbsp;&nbsp;&nbsp;&nbsp;Office:</b>&nbsp;$oloc &nbsp; $ophone <br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lab:</b>&nbsp;$lloc &nbsp; $lphone <br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: </b>$fphone <br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</b> $email <br> </td></tr><tr valign=\"top\">";}
else{ echo "<td width=\"20%\" height=\"380\"> &nbsp;<center><img src=\"../../../people/images/".$uname.".jpg\" height=\"150\" /> <br> <b><font size=\"+1\">$first &nbsp; $last</font></b></center> <br> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Title: </b>$title <br><b>&nbsp;&nbsp;&nbsp;&nbsp;Office:</b>&nbsp;$oloc &nbsp; $ophone <br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lab:</b>&nbsp;$lloc &nbsp; $lphone <br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: </b>$fphone <br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</b> $email <br>";}?>

<?php //If($num2==1){echo "</td><td>&nbsp;&nbsp;</td></tr><tr valign=\"top\">";}?> 
<?php ++$i; ?>

<?php } ?>
</td>
</tr>
</table>
</center>

<?php /*
<table width="400" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td style="width:125px"><br />

</td>
<td style="width:275px" align="left" colspan="1">

</tr></td>
</table><br> 
<?php
++$i;

}
if($num=='0'){echo "None Listed";}
?>

<br><br>*/ ?>
 

<!-- ============================== STOP Center Content Entry ============================  -->
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<?php
}
?>
</body>
</html>

