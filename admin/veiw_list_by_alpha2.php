<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

session_start();
if($_SESSION['auth']==1){?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOCAL GOVERNMENT PENSION DEPARTMENT:::View list by alphabet</title>
<link href="style.css" rel="stylesheet" type="text/css" />

 <style type="text/css">
 
 tr:hover{
	 background-color:#F00;
	 color:#FFF;
	 cursor:default;}
 
 
 
 </style>

</head>
<body>
<div  id="wrapper">

<div id="head">
<h2>LOCAL GOVERNMENT PENSION DEPARTMENT</h2>
</div>

<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
<br/>
<div id="content">






<?php 


include_once('connect.php');
$display = 30;
 // Determine how many pages there are...
 if (isset($_GET['p']) && is_numeric($_GET
['p'])) { // Already been determined.

 $pages = $_GET['p'];
 } else { // Need to determine.

 // Count the number of records:
 $q = "SELECT * FROM `voters`";
 $r = mysql_query ($q);
$records=mysql_num_rows($r);
if(!$r){echo " could not select for pagination problem";}
if(empty($r)){echo "the database query is empty";}


 // Calculate the number of pages...
 if ($records > $display) { // More than
 $pages = ceil ($records/$display);
 } else {
$pages = 1;
 }
 }
if (isset($_GET['s']) && is_numeric
($_GET['s'])) {
 $start = $_GET['s'];
 } else {
 $start = 0;
 }


echo "<h1>PAYMENT RECORD(S) SORTED ALPHABETHICALLY</h1>";

$sql="SELECT * FROM `voters` WHERE `payment_status`='paid'  ORDER BY `name_of_beneficiary` ASC ";
$query=mysql_query($sql) or die("ERROR: ".mysql_error());

if(mysql_num_rows($query)==0){
	echo "<h2>No Records to be Displayed Alphabethically</h2>";
	}

elseif(mysql_num_rows($query)>0){
	echo "<p style='color:#F00;'> There is/are ".mysql_num_rows($query)." Record(s) from your query </p>";
	?>
	
    
<center><table border="1" class="restable" width="100%" style="color:#a9aaab; text-align:center; border-collapse:collapse; font-size:14px;">
  <tr style="background-color:#9C0; color:#FFF; font-family:Tahoma, Geneva, sans-serif;">
<th height="37">DATE OF FIRST APPOINTMENT </th>
<th>DATE OF RTD</th>
<th>AMOUNT</th>
<th>FILE NO.</th>
<th>NAME OF BENEFICIARIES</th>
<th>TYPE OF BENEFIT</th>
<th>PAYMENT NO.</th>
<th>REMARK</th>
</tr>
<?php 

//FETCH AND SPIT IT OUT
while($row=mysql_fetch_array($query)){
$bg = ($bg=='#cfebf2' ? '#f6f6f6' :
'#cfebf2'); // Switch the background
 echo "<tr bgcolor='$bg' class='trs'>";  ?>

<td><?php echo $row['date_of_first_appointment']; ?></td>
<td><?php echo $row['date_of_rtd'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $row['fileno'];?></td>
<td><?php echo $row['name_of_beneficiary'];?></td>
<td><?php echo $row['type_of_benefit'];?></td>
<td><?php echo $row['payment_no'];?></td>
<td><?php echo $row['remark'];?></td>

</tr>

<?php
}//if visitors exist
}

?>
<?php
number_format();
$query3="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='paid'";
$result3=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result3)){
echo "The Total Amount is ".$row['SUM(amount)']. "<br/>";
}

?>
</table>
</center>
    
<?php


//paginate the result set
if ($pages > 1) {
echo '<br /><p>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="veiw_list_by_alpha2.php?s=' .
($start - $display) . '&p=' . $pages .
'">Previous</a></center> ';
 }


for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="veiw_list_by_alpha2.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="veiw_list_by_alpha2.php?s=' .
($start + $display) . '&p=' . $pages .
'">Next</a></center>';
 }

 echo '</p>';// Close the paragraph.
 
 }
 
 ?>
<center>   <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="  Print  " '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT>
</div>


<div id="footer">
<?php include("footer.php"); ?></div>



</div>

</body>
</html>
<?php }
else {header("location:index.php?access=denied");

}
?>
