
<?php 
$uname = $_GET['uname'];
//echo "$uname";
?> 


<html lang="en">
  <head>
  
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  
<?php
#include "config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());
?>
	 
<?php

$query2=" SELECT * FROM IQSEpeople WHERE dbgroupmbr='$uname' AND classification='visitor' AND dbstatus='active' ORDER BY last ASC";
$result2=mysqli_query($link, $query2);
$num2=mysqli_num_rows($result2);
$num_rows = mysqli_num_rows( $result2 );

if($num_rows=='0'){echo "";}else{

echo "<h4><font face=\"Arial\">Visitors</font></h4>";

$i=0;
while ($i < $num2) {
$first=mysql_result($result2,$i,"first");
$last=mysql_result($result2,$i,"last");
$uname=mysql_result($result2,$i,"uname");
$classification=mysql_result($result2,$i,"classification");
?>

<table width="98%">
<tbody style="font-family:arial">
<tr valign="top">
<td width="30%">
<?php echo "<a href=\"visitor.php?uname=".$uname."\"> ".$first." ".$last." </a>"; ?>

</td></tr>
</table>
<?php
++$i;
}}
?>
  </body>
</html>
