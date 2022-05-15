<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
if($_SESSION['auth']==1){
	include("connect.php");
$status=$_GET['status'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: LOCAL GOVERNMENT PENSION :: Monthly payment Record</title>
<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="loopedslider.min.js" type="text/javascript" charset="utf-8"></script>
	 <style type="text/css">
 
 tr:hover{
	 background-color:#9C0;
	 color:#FFF;
	 cursor:default;}
 
 
 
 </style>


</head>

<body>

<div  id="wrapper">

<div id="head">
<h2 style="position:relative; top:15px; left:70px;">LOCAL GOVERNMENT PENSION DEPARTMENT</h2>
<p style="margin:-20px 0px 0px 800px;"><B><strong>LOCAL GOVERNMENT-<?PHP echo "$status"; ?></strong></B></p>
</div>
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
<br/>


<div id="content">

<div id="menu"><!--MENU DIV----->
<?php 
  
  include ("class.php");
  $object=new ourclass;
  
  $display = 20;
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
  
  ?>


  <p>&nbsp;</p>
  <h1>Month of <?php echo date("F");?> Payment Records For <?php echo $status; ?></h1>
  
  <?php
//SQL query to pull out all registered students
$fetch="SELECT * FROM `voters` WHERE MONTH(`diff`)=MONTH(NOW()) AND YEAR(`diff`)=YEAR(NOW()) AND `payment_status`='paid' AND `lg_to_vote`='$status' ORDER BY `date` ASC LIMIT $start, $display ";
$fetch=@mysql_query($fetch) or die(mysql_error());

if($object->checkNumofVisitors($fetch)==false){echo "<p class='msg info'>Sorry, no Records found!</p>";}
elseif($object->checkNumofVisitors($fetch)==true){
?>
  
<center><table border="1" class="restable" width="100%" style="color:#a9aaab; text-align:center; border-collapse:collapse;font-size:14px;">
  <tr style="background-color:#9C0; color:#FFF; font-family:Tahoma, Geneva, sans-serif;">
<th height="37">DATE OF FIRST APPOINTMENT </th>
<th>DATE OF RTD</th>
<th>AMOUNT</th>
<th>FILE NO.</th>
<th>NAME OF BENEFICIARIES</th>
<th>TYPE OF BENEFIT</th>
<th>PAYMENT NO.</th>
<th>REMARK</th>
<th></th>

</tr>
<?php 

//FETCH AND SPIT IT OUT
while($row=mysql_fetch_array($fetch)){
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
</table>
    <?php
 
  //paginate result set
if ($pages > 1) {
echo '<center>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="view3.php?s=' .
($start - $display) . '&p=' . $pages .
'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="view3.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="view3.php?s=' .
($start + $display) . '&p=' . $pages .
'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
 }
 ?>  

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<center>   <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="  Print  " '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT>
</center>

</div><!--MENU DIV----->

</div><!--RIGHT CONTENT DIV--->

</div><!--BODY DIV--->

<div><!--FOOTER DIV--->
<?php include("footer.php"); ?>
</div><!--FOOTER DIV--->


</div><!--WRAPPER DIV--->

</body>
</html>
<?php }
else {header("location:index.php?access=denied");

}
?>
