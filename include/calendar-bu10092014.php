
<html>

<?php
mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2") or die (mysqli_error());
mysql_select_db("SS2011db") or die (mysqli_error());
?>


<head>
<script>
function goLastMonth(month, year){
if(month == 1) {
--year;
month = 13;
}
--month
var monthstring= ""+month+"";
var monthlength = monthstring.length;
if(monthlength <=1){
monthstring = "0" + monthstring;
}
document.location.href ="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
}
function goNextMonth(month, year){
if(month == 12) {
++year;
month = 0;
}
++month
var monthstring= ""+month+"";
var monthlength = monthstring.length;
if(monthlength <=1){
monthstring = "0" + monthstring;
}
document.location.href ="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
}
</script>
<style>
.today{
background-color: #cccccc;
}
.event{
background-color: #eee1c6;
}
</style>
</head>
<body>

<div align="center"><font><font face="Arial"><h1>IQSE CALENDAR</h1></font></div>

<?php
if (isset($_GET['day'])){
$day = $_GET['day'];
} else {
$day = date("j");
}
if(isset($_GET['month'])){
$month = $_GET['month'];
} else {
$month = date("n");
}
if(isset($_GET['year'])){
$year = $_GET['year'];
}else{
$year = date("Y");
}
$currentTimeStamp = strtotime( "$day-$month-$year");
$monthName = date("F", $currentTimeStamp);
$numDays = date("t", $currentTimeStamp);
$counter = 0;
?>
<?php
if(isset($_GET['add'])){
$talktype =$_POST['talktype'];
$speakername =$_POST['speakername'];
$id =$_POST['id'];
$eventdate = $month."/".$day."/".$year;
$sqlinsert = "INSERT into eventcalendar(Title,Detail,eventDate,dateAdded) values ('".$title."','".$detail."','".$eventdate."',now())";
$resultinginsert = mysql_query($sqlinsert);
if($resultinginsert ){
echo "Event was successfully Added...";
}else{
echo "Event Failed to be Added....";
}
}
?>

<div align="center"><table border='1'>
<tbody style="font-family:arial">
<tr>
<td align="center"><input style='width:50px;' type='button' value='<'name='previousbutton' onclick ="goLastMonth(<?php echo $month.",".$year?>)"></td>
<td colspan='5' ><div align="center" vertical-align="middle" ><b><h2><?php echo $monthName."&nbsp;".$year; ?></h2></b></div></td>
<td align="center"><input style='width:50px;' type='button' value='>'name='nextbutton' onclick ="goNextMonth(<?php echo $month.",".$year?>)"></td>
</tr>
<tr>
<td width='100px'>Sun</td>
<td width='100px'>Mon</td>
<td width='100px'>Tue</td>
<td width='100px'>Wed</td>
<td width='100px'>Thu</td>
<td width='100px'>Fri</td>
<td width='100px'>Sat</td>
</tr>
<?php
echo "<tr>";
for($i = 1; $i < $numDays+1; $i++, $counter++){
$timeStamp = strtotime("$year-$month-$i");
if($i == 1) {
$firstDay = date("w", $timeStamp);
for($j = 0; $j < $firstDay; $j++, $counter++) {
echo "<td style='height:100px'>&nbsp;</td>";
}
}
if($counter % 7 == 0) {
echo"</tr><tr>";
}
$monthstring = $month;
$monthlength = strlen($monthstring);
$daystring = $i;
$daylength = strlen($daystring);
if($monthlength <= 1){
$monthstring = "0".$monthstring;
}
if($daylength <=1){
$daystring = "0".$daystring;
}
$todaysDate = date("m/d/Y");
$dateToCompare = $monthstring. '/' . $daystring. '/' . $year;
echo "<td height='125px' align='left' valign='top' width='100px'";
if ($todaysDate == $dateToCompare){
echo "class ='today'";
} else{
$sqlCount = "select * from IQSEevent where eventDate='".$dateToCompare."'";
$noOfEvent = mysql_num_rows(mysql_query($sqlCount));
if($noOfEvent >= 1){
echo "class='event'";
}
}
echo ">
<div style='overflow-y:auto; overflow-x:auto; width:125; height: 125px;'\">
<a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a><br>";
//echo $monthstring."/".$daystring."/".$year."<br>";
$sqlEvent = "select * FROM IQSEevent where eventDate='".$monthstring."/".$daystring."/".$year."'";
$resultEvents = mysql_query($sqlEvent);
while ($events = mysqli_fetch_array($resultEvents)){
echo "*<font size=\"2\">".$events['talktype']."&nbsp;<br></font>";
$pos=((strlen(stristr($events['talktype'],'seminar')))||(strlen(stristr($events['talktype'], 'colloquium')))||(strlen(stristr($events['talktype'], 'OSA Student')))||(strlen(stristr($events['talktype'],'Student Meeting'))));
if($pos>0){echo "<smaller>(<a href=\"event.php?id=".$events['id']."\"><font size=\"2\">Announcement</font></a>)</smaller><br>";}else{echo "<smaller>(<a href=\"".$events['dbwaddress']."\"><font size=\"2\">Event Website</font></a>)</smaller>";}}
echo "</div></td>";}
echo "</tr>";
?>
</table></div>
<?php
if(isset($_GET['v'])) {
echo "<hr>";
echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Event</a>";
if(isset($_GET['f'])) {
echo "<a href=\"../../../thecom/IQSE/eventform.php\">(Must Have User Account) </a>";
}
$sqlEvent = "select * FROM IQSEevent where eventDate='".$month."/".$day."/".$year."'";
$resultEvents = mysql_query($sqlEvent);
echo "<hr>";
while ($events = mysqli_fetch_array($resultEvents)){
echo  $month."/".$day."/".$year."<br>";
echo $events['talktype']."<br>";
echo $events['speakername']."<br>";
echo "<a href=\"event.php?id=".$events['id']."\"> Announcement </a><br><br>";
}
}
?>
</body>
</html> 
