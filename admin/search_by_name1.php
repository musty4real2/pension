<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

session_start();
if($_SESSION['auth']==1){?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Search by name</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="style.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />

			<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>
    	<script type="text/javascript" src="lib/jquery.custom.js"></script>
    	<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
    	<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
        <script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
<style type="text/css">
.warning{
	color:#F00;
	
	}

</style>
    </head>
    <body>
   <div  id="wrapper">

<div id="head">

<h2 style="position:relative; top:15px; left:70px;">LOCAL GOVERNMENT PENSION DEPARTMENT</h2>
 </div>
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
<br/>
</div>
<div id="content">

    
    <script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>
<center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get"/>

<table>
<tr><td>Enter Name Here<br /><br/>
<input type="text" name="wname" id="wname" maxlength="30" autosuggest="off" size="40" /></td></tr><br/>
<tr><td>
<input type="submit" name="sname" id="button2" value="Search By Name" onclick="alert('please wait while your result is been fetched.........')"; />
</td></tr>
</table>
</form>
</center>
<fieldset style="height:auto; margin:0px 0px 30px 0px;">
<legend>Outstanding Records been fetched</legend>

<?php

if(isset($_GET['sname'])){
	include("connect.php");
$name=addslashes($_GET['wname']);

$select="SELECT * FROM `pension`.`voters` WHERE `name_of_beneficiary`='$name'  AND `payment_status`='outstanding'";
$q=mysql_query($select);

if(mysql_num_rows($q)==0){ echo "<p style='color:#F00;'>No Match found!</p>";
}
elseif(mysql_num_rows($q)==1){?>

<center><table border="1" class="restable" width="100%" style="color:#a9aaab; text-align:center; border-collapse:collapse; font-size:14px;">
  <tr style="background-color:#9C0; color:#FFF; font-family:Tahoma, Geneva, sans-serif; ">
<th height="37">DATE OF FIRST APPOINTMENT </th>
<th>DATE OF RTD</th>
<th>AMOUNT</th>
<th>FILE NO.</th>
<th>NAME OF BENEFICIARIES</th>
<th>TYPE OF BENEFIT</th>
<th>PAYMENT NO.</th>
<th>REMARK</th>
</tr>

<?php while($row=mysql_fetch_array($q)){
$bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background

 echo "<tr bgcolor='$bg' class='row'>";  ?>.
<td><?php echo $row['date_of_first_appointment']; ?></td>
<td><?php echo $row['date_of_rtd'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $row['fileno'];?></td>
<td><?php echo $row['name_of_beneficiary'];?></td>
<td><?php echo $row['type_of_benefit'];?></td>
<td><?php echo $row['payment_no'];?></td>
<td><?php echo $row['remark'];?></td>


	<?php } ?>
</table></center>
<?php } }?>

</fieldset>
  
    

</div>


<div id="footer" style="clear:both;">
<?php include("footer.php"); ?></div>



</div>
</body>
</html>

<?php }
else {header("location:index.php?access=denied");

}
?>					