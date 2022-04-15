<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Sat, 19 Oct 2013 02:11:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    
    
  </head>
  <body>

  <?php
/* Change next two lines if using online */
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

ALTER TABLE IQSEreminders ADD column id int(11);

?>
  
  </body>
</html>