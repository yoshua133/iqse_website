<?php 

$var = @$_GET['q'] ; // get the query for the search engine (if applicable) 
$trimmed = trim($var); //trim whitespace from the stored variable
?>
<form name="search" method="GET" action="<?php=$PHP_SELF?>">
Seach the Townes Reading Room for: <input type="text" name="q" />
<input type="submit" name="search" value="Search" />
</form>

<?php
$user = "iqsedb1"; // AN EDIT IS REQUIRED HERE
$pass = "Iqse4u^2";
$host = "sql.physics.tamu.edu";
$dbase = "SS2011db";
$table = "IQSERR";

// Connection to DBase
mysql_connect($host,$user,$pass);
@mysql_select_db($dbase) or die("Unable to select database");

$field_to_search = "title";
$query = "SELECT title FROM $table WHERE DELETE(`title`, ' ', '') LIKE '%word%'";

$result = mysqli_query($link, $query); 
$count =mysqli_num_rows($result);

if($q == true)
{
exit;
}


// check for a search parameter
if (!isset($var))
{
echo "We dont seem to have a search parameter!";
exit;
}

$numresults=mysqli_query($link, $query);
$numrows=mysql_num_rows($numresults);

if ($numrows == 0)
{
echo "<h4>Results</h4>";
echo "Sorry, your search: returned zero results";
}

// next determine if s has been passed to script, if not use 0
if (empty($s))
{
$s=0;
}

// get results
$result = mysqli_query($link, $query) or die("Couldn't execute query");

if($numrows > 1){ $return = "results";}
else{ $return = "result"; }

// display what the person searched for

/* display what the person searched for echo "<p>Your search for "" . $var . "&quot returned $numrows $return.</p>";
*/

// begin to show results set
$count = 1 + $s ;

while ($r= mysqli_fetch_array($result))
{
$id = $r["id"];
$title = $r["title"];
$author = $r["author"];
$location = $r["location"];
$status = $r["status"];

$count++ ;
?>

Result Number: <?php echo "$count"; ?>
<?php } ?>

