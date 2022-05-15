<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
if($_SESSION['auth']==1){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>local government pension department</title>
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
<h2 style="position:relative; top:15px; left:70px;">OUTSTANDING PAYMENT </h2>
<p style="margin:-20px 0px 0px 800px;"><B><strong>LOCAL GOVERNMENT-<?PHP echo "$status"; ?></strong></B></p>
</div>
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
<br/>


<div id="content">

<fieldset style="margin-top:50px;">
<?php 
include_once("connect.php");
$product=$_GET['product'];
$table=$_GET['table'];

$subject=$_GET['subject'];

?>
<legend>ALL PENSIONS</legend>

<?php
$query="SELECT * FROM `voters` ORDER BY `date` ASC ";
$answer=mysql_query($query) or die("ERROR:".mysql_error());

echo mysql_num_rows($answer)."Records";

if(mysql_num_rows($answer)!=0){//if table is not empty
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
	$bg = '#eeeeee';
while($row=mysql_fetch_array($answer)){//while loop to fetch from the database
		$author=htmlspecialchars($row['id']);

?>	
<?php 
  $name=$row['name'];
$bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background


 echo '<tr bgcolor="' . $bg . '">';  ?>

<td><?php echo $row['date_of_first_appointment']; ?></td>
<td><?php echo $row['date_of_rtd'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $row['fileno'];?></td>
<td><?php echo $row['name_of_beneficiary'];?></td>
<td><?php echo $row['type_of_benefit'];?></td>
<td><?php echo $row['payment_no'];?></td>
<td><?php echo $row['remark'];?></td>


<td>
<?php echo  "<center><td><a href='view_author.php?author=$author'>View Record</a></td></center>"; ?>
</td>
<?php
		
		$_SESSION['isbn']=$row['id']; 
?>

	<?php
	}//end of WHILE
	}//end of IF
?>
</table>
<center>   <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="  Print  " '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT></center>
</fieldset>
</div>


<div id="footer">
<center><p>&copy;2012. All Rights Reserved. Group One</p></center>
</div>



</div>
</body>
</html>
<?php
}
else {
	header("location:index.php?access=denied");
	}
	?>