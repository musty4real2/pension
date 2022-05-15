<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

session_start();
if($_SESSION['auth']==1){?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="tinybox.js"></script>
</head>
<title>Enter Details</title>
<style type="text/css">
.warning{
	color:#F00;
	
	}

</style>
<p id="demo" align="right"></p>

<script type="text/javascript">
document.getElementById("demo").innerHTML=Date();
</script>
</head>

<body>

<div  id="wrapper">

<div id="head">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;LOCAL GOVERNMENT PENSION DEPARTMENT</h2>
<h2 style="position:relative; top:15px; left:70px;">&nbsp;</h2>
</div>
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
<br/>

<div id="content">


<?php
if($_GET['entered']==1){
?>
<body onLoad="TINY.box.show({html:'Entered Successfully',animate:false,close:false,boxid:'error',top:5})">
<?php } ?>


<?php
if($_POST['enter']){
	include("connect.php");
	
$a=mysql_escape_string($_POST['accno']);
$b=mysql_escape_string($_POST['bank']);
$c=mysql_escape_string($_POST['amount']);
$d=mysql_escape_string($_POST['name']);
$e=mysql_escape_string($_POST['sortcode']);
$f=mysql_escape_string($_POST['naration']);

$exe="INSERT INTO `pension`.`records` (`account_number`, `bank`, `amount`, `name`, `sort_code`, `naration`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";
  
	$exe=mysql_query($exe);
	if(!$exe){
	$sqlError[]="Sorry, could not  Enter record into the databse:".mysql_error();
		}
				
		foreach($sqlError as $err){
		echo "Application Database Error:	$err<br/>";
			}

header("location:input_form.php?entered=1");

	
	}
	
?>
<table width="100%" border="0">
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" />
  <tr>
    <td width="36%">Account Number</td>
    <td width="64%"><input type="text" name="accno" id="select"/></td>
  </tr>
  <tr>
    <td>Bank</td>
    <td><input type="text" name="bank" id="select"/></td>
  </tr>
  <tr>
    <td>Amount</td>
    <td><input type="text" name="amount" id="select"/></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" id="select"/></td>
  </tr>
  <tr>
    <td>Sort-Code</td>
    <td><input type="text" name="sortcode" id="select"/></td>
  </tr>
  <tr>
    <td>Naration</td>
    <td><input type="text" name="naration"id="select"/></td>
  </tr>
   <tr>
  <td>&nbsp;</td>
    <td align="center" valign="middle"><input type="submit" name="enter" value="Enter " id="download"/></td>
  </tr>
  </form>
</table>
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