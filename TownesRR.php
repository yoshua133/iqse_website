<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Wed, 17 Nov 2010 21:05:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IQSE Faculty</title>

<LINK REL=StyleSheet HREF="person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" /> 

      
</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->

<br><br>

<?php include("include/leftmenu.php"); ?>

			
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<!--&nbsp&nbsp Quick Links: &nbsp&nbsp 		   		
		   		<a href="people.html#faculty">Faculty</a>&nbsp&nbsp 
				<a href="people.html#staff">Staff</a>&nbsp&nbsp
				<a href="people.html#researchers">Researchers</a>&nbsp&nbsp
				<a href="people.html#gs">Graduate Students</a>&nbsp&nbsp 
				<a href="people.html#visitors">Visitors</a>&nbsp&nbsp	<br><br/> -->
		
<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tbody style="font-family:arial">
<tr valign="top"> 
<td cellspacing="5">
<!-- ============================== Enter Center Content ============================  -->

<?php 
	include "config.php";
	$link = mysqli_connect($dbhost, $dbuser, $dbpass);
	if (! $link)
	die("Couldn't connect to MySQL");
	
	mysqli_select_db( $link, $db )
	or die("Couldn't open $db: ".mysqli_error());
?>

<h2><center>WELCOME TO THE TOWNES READING ROOM</center></h2>
<br>
<div align="center">Search the Townes Reading Room Inventory<br><br></div>
<ul><br>
    <li><h3>Search By Author</h3><br>
	
	<?php include("include/TRR/IQSERR_authorsearch_form.php");?><br></i>
	<br>
    <li><h3>Search By Title (or words in the title)</h3>
	
	<?php include("include/TRR/IQSERR_titlesearch_form.php");?> </li>
</ul>
<br><br>
<hr>			
</td>
</tr>
<tr valign="top">
<td>
<div align="center">The Townes Reading Room:<br><br></div>
The Townes Reading Room was created in 1998 in honor of Dr. Charles H. Townes. The idea was to make the hard to find, always checked-out, classic physics texts into the hands of our students, researchers, and faculty members. Several faculty members (whose names dare not be listed for fear of overlooking someone) have contributed books to the Townes Reading Room.  TAMU Evans Library has also placed several books on loan to the Townes Reading Room. The Townes Reading Room has been quite successful with 70 books per year walking off in the first few years of this undertaking. As a result, the books are now all locked up. To gain access to the books, please identify the location of the book (see locating a book below), confirm the book is available (physically find it on the shelf in the Townes Reading Room as sometimes books are misfiled or have been checked out and not yet returned). Once the physical location of the book has been confirmed, IQSE Business Staff in IQSE 562 of the Mitchell Physics Building can help you to gain access to the book.   
</td>
</tr>
<tr valign="top">
<td>
<br>
<b>The Charles H. Townes Distinguished Lecture Award </b>:<br><br>
The Charles H. Townes Distinguished Lecture Award was established in 2016 in honor of Dr. Charles H. Townes. More information on this prestigious award may be found on the <a href="TownesDLA.php">Charles H. Townes Distinguished Lecturer home page.</a><br><br>
</td>
</tr>
<tr valign="top">
<td>
<b>Locating a Book</b>:<br><br>
To locate a book in the Townes Reading Room, enter all or part of the author's name or title of the book in the search engines above. 

</td>
</tr>
<tr valign="top">
<td>
<b>Reading Room Rules:</b><br><br>
The books in the Townes Reading Room are intended to be read in the Townes Reading Room. The Townes Reading Room Hours are from 8:30 AM until 4:30 p.m. Monday thru Friday. If access to a book is needed beyond the Townes Reading Room available reading hours, books may be checked out for a 24 hours period. Books checked out for the 24 hour period MUST be returned during the next open Townes Reading Room Reading day, e.g., books checked out on a Friday MUST be returned on Monday. The 24-hour rule exists in order that the books may be available to readers during available reading hours. 
</td>
</tr>
<tr>
<td>
<b>Checkout Process:</b><br><br>
To check out a Townes Reading Room book, please see Debbie McCulley in IQSE 545 of the Mitchell Physics Building. A TAMU ID and active tamu email address will be required in order to check out books.
</td>
</tr>
</table>
</div>

	
		<br>
		<br>
		<hr>
<center> <font face="Arial">Last updated:&nbsp;03 January 2013</font></center>
		<br><br>
		

<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
<?php include("include/footer.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("include/header.php"); ?>

</div>

</body>

</html>

