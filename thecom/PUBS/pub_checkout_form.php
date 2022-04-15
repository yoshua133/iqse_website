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

 

<html><head><title>IQSE Publication Management System </title>
</head>

<body>


<div align="center">
<?php include("include/header.php"); ?>
<?php include("include/topmenu.php"); ?>
</div>	
<div align="center"><h2>Preventing Duplicates/Searching the Database</h2></div>
<br>
<?php include("include/doisearch.php"); ?><br>
<?php include("include/pubdatesearch.php"); ?><br>
<?php include("include/authorsearch.php"); ?><br>
<?php include("include/pubinfosearch.php"); ?>
<br> <br><br> 

<br><br>
<div align="center">
<?php include("include/footer.php"); ?>
</div>
</body>

</html>

<?php } ?>