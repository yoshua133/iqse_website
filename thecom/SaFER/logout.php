<?php 
session_start(); //Allows you to use sessions. 
session_destroy(); //Deletes all the sessions. ?>
<?php include("../include/headerSaFER.php"); ?>
<?phpinclude("include/topmenu.php"); ?><br><br>
<?php echo('<br><br><br><div align="center"><font face="Arial"><h2>You are now logged out.</h2></font></div>'); 
?> 
<br><br><br><br>
<?php include("../include/footer.php"); ?>
