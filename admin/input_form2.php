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
<h2>LOCAL GOVERNMENT PENSION DEPARTMENT</h2>
<h2 style="position:relative; top:15px; left:70px;">&nbsp;</h2>
<p style="margin:-20px 0px 0px 800px;"><a style="color:#FFF; " href="logout.php">logout</a>  |  <a style="color:#FFF; " href="menu.php">home</a></p>
</div>
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
<br/>

<div id="content">


<?php
if($_POST['enter']){
	include("connect.php");
	
$c=mysql_escape_string($_POST['amount']);
$lgvote=addslashes($_POST['lgvote']);
$year=addslashes($_POST['year1']);
		
		$dob=$_POST['day']."/".$_POST['month']."/".$_POST['year'];

		$dob1=$_POST['day1']."/".$_POST['month1']."/".$_POST['year1'];
		
		
		//CREATE THE DATE TRICK
		$datetrick=$_POST['day1'] + $_POST['month1'] + $_POST['year1'];
		
		
		$namebeneficia=addslashes($_POST['namebeneficia']);
$benefit=addslashes($_POST['benefit']);
$remark=addslashes($_POST['remark']);
$paymentno=addslashes($_POST['paymentno']);
$fileno=addslashes($_POST['fileno']);
if($c==""){
		$error[]="The Amount field cannot be empty";
		}
		if($paymentno==""){
		$error[]="The payment number field cannot be empty";
		}	
		if($fileno==""){
		$error[]="The file number field cannot be empty";
		}	
	if(!empty($error)){
		echo "<p class='msg warning'><b>Oops! ERROR:</b></p>";
		foreach($error as $oops){
			echo "<p class='msg error'>$oops</p>";
			}//foreach loop
		}//if !empty error
		
		
		//if $error variable is empty, continue with the script
		elseif(empty($error)){


  $exe="INSERT INTO `pension`.`voters` (`lg_to_vote`, `date_of_first_appointment`, `date_of_rtd`, `amount`, `fileno`, `name_of_beneficiary`, `type_of_benefit`, `payment_no`, `remark`,`payment_status`,`date`,`diff`) VALUES ('$lgvote', '$dob', '$dob1', '$c', upper('$fileno'),upper('$namebeneficia'), upper('$benefit'), '$paymentno', upper('$remark'),'outstanding',$datetrick,NOW())";
	$exe=mysql_query($exe);
	if(!$exe){
	$sqlError[]="Sorry, could not  Enter record into the databse:".mysql_error();
		}
				
		foreach($sqlError as $err1){
		echo "Application Database Error:	$err1<br/>";
			}


header("location:success.php");

				}
	
}
?>
<table width="100%" border="0">
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" />
  <tr>
    <td height="46">File No.</td>
    <td><input type="text" name="fileno"/></td>
  </tr>
    <tr>
    <td height="46">Name of Beneficiaries</td>
    <td><input type="text" name="namebeneficia"/></td>
  </tr>
    <tr>
    <td height="46">Type of Benefit</td>
    <td><select name="benefit">
    <option>---------------</option>
    <option value="Retirement Benefit">Retirement Benefit</option>
    <option value="Death Benefit">Death Benefit</option>
    </select>    
    </td>
  </tr>
  <tr>
    <td width="36%" height="51">Date of First Appointment</td>
            <td>
DD
<select name="day" id="day" class="input-text">
  <option value="">select</option>
  <option value="">............</option>
  <?php
		 $range=range(1, 31);
		 foreach($range as $r){
			 echo "<option value='$r'>$r</option>";
			 }
			 ?>
          <?php if($_POST['day']){echo "<option  value='{$_POST['day']}' selected='selected'>{$_POST['day']}</option>"; }?>
</select>
MM
<select name="month" id="month" class="input-text">
  <option value="">select</option>
  <option value="">............</option>
  <?php
		 $range=range(1, 12);
		 foreach($range as $r){
			 echo "<option value='$r'>$r</option>";
			 }
			 ?>
                       <?php if($_POST['month']){echo "<option  value='{$_POST['month']}' selected='selected'>{$_POST['month']}</option>"; }?>

</select>
YYYY
<select name="year" id="year" class="input-text">
  <option value="">select</option>
  <option value="">............</option>
  <?php
		 $range=range(2012, 2020);
		 foreach($range as $r){
			 echo "<option value='$r'>$r</option>";
			 }
			 ?>
                       <?php if($_POST['year']){echo "<option  value='{$_POST['year']}' selected='selected'>{$_POST['year']}</option>"; }?>

</select></td>
  </tr>
  <tr>
    <td height="54">Date of RTD</td>
    <td> DD
<select name="day1" id="day" class="input-text">
  <option value="">select</option>
  <option value="">............</option>
  <?php
		 $range=range(1, 31);
		 foreach($range as $r){
			 echo "<option value='$r'>$r</option>";
			 }
			 ?>
          <?php if($_POST['day']){echo "<option  value='{$_POST['day']}' selected='selected'>{$_POST['day']}</option>"; }?>
</select>
MM
<select name="month1" id="month" class="input-text">
  <option value="">select</option>
  <option value="">............</option>
  <?php
		 $range=range(1, 12);
		 foreach($range as $r){
			 echo "<option value='$r'>$r</option>";
			 }
			 ?>
                       <?php if($_POST['month']){echo "<option  value='{$_POST['month']}' selected='selected'>{$_POST['month']}</option>"; }?>

</select>
YYYY
<select name="year1" id="year" class="input-text">
  <option value="">select</option>
  <option value="">............</option>
  <?php
		 $range=range(2012, 4040);
		 foreach($range as $r){
			 echo "<option value='$r'>$r</option>";
			 }
			 ?>
                       <?php if($_POST['year']){echo "<option  value='{$_POST['year']}' selected='selected'>{$_POST['year']}</option>"; }?>

</select></td>
  </tr>
  <tr>
    <td height="46">Amount</td>
    <td><input type="text" name="amount"/></td>
  </tr>
  <tr>
 <td>Local Government:</td><td>
       <select name="lgvote" id="lgvote" class="input-text">
         <option value="">select</option>
         <option value="">---------</option>
         <?php
			include("connect.php");
	  $ask="SELECT * FROM `lgs` ORDER BY `lg` ASC";
	  if(!$ask=mysql_query($ask)){
		  echo "<option value=''>No local government available".mysql_error()."</option>";
		  }
		
		  while($row=mysql_fetch_array($ask)){
			  echo "<option value='{$row['lg']}'>{$row['lg']}</option>";
			  }
	  
	  ?>
                <?php if($_POST['lgvote']){echo "<option  value='{$_POST['lgvote']}' selected='selected'>{$_POST['lgvote']}</option>"; }?>

       </select></td>
       </tr>
         <tr>
    <td height="46">Payment No.</td>
    <td><input type="text" name="paymentno"/></td>
  </tr>
    <tr>
    <td height="46">Remark</td>
    <td><input type="text" name="remark"/></td>
  </tr>
   <tr>
     <td>&nbsp;</td>
     <td align="center" valign="middle"><input type="submit" name="enter" value="Enter "/></td>
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