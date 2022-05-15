<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

session_start();
if($_SESSION['auth']==1){
	$isbn=$_GET['isbn'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">

<div id="head">
<h1>LOCAL GOVERNMENT PENSION DEPARTMENT </h1>
</div>

<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>

<h1 class="create">Update Status</h1>
<img class="createline" src="images/line.gif" width="755" height="1" />
<div>

<?php


if($_POST['update']) {
	
	$initialisbn=$_POST['initialisbn'];
	
	
$isbn=$_POST['isbn'];
	
$c=mysql_escape_string($_POST['amount']);
$lgvote=addslashes($_POST['lgvote']);
		
		$dob=addslashes($_POST['date_of_first_appointment']);

		$dob1=addslashes($_POST['date_of_rtd']);
		$namebeneficia=addslashes($_POST['namebeneficia']);
$benefit=addslashes($_POST['benefit']);
$remark=addslashes($_POST['remark']);
$paymentno=addslashes($_POST['paymentno']);
$fileno=addslashes($_POST['fileno']);
		 
		 include("connect.php");

$$updateEntry="UPDATE `voters` SET `date_of_first_appointment`='$dob',`date_of_rtd`='$dob1',`amount`='$c',`fileno`='$fileno',`name_of_beneficiary`='$namebeneficia',`type_of_benefit`='$benefit',`payment_no`='$paymentno',`remark`='$remark' WHERE `id`='$initialisbn'";


	$updateEntry=mysql_query($$updateEntry);
				
		
	if($updateEntry){
header("location:success.php");
		}
}




	include("connect.php");
  	$sql="SELECT * FROM `voters` WHERE id='$isbn'";
	$query=mysql_query($sql);
if(!$query){
		echo "Sorry, could not fetch record:".mysql_error();
		}
	while($row=mysql_fetch_array($query)){
?>

<form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    <fieldset class="authorfield">
      <table width="486" border="0" cellspacing="7" class="authortab">

    <tr>
      <td height="65">Date of First Appointment :
</td>
      <?php $dob1=$row['date_of_first_appointment'];?>
      <td align="left" valign="top"><label>
        <input name="date_of_first_appointment" type="text" class="grey" id="subject" size="36" value="<?php echo $row['date_of_first_appointment'];?>"/>
      </label></span> 

<span class="warning">*</span>
      </label><div id="autocompletediv" class="author"></div></td>
          </tr>
    </table>
    </fieldset>
    
    
    <input type="hidden" name="initialisbn" value="<?php echo $row['id'];?>" />
    
    
    
    
    
    
    <fieldset class="titfield">
    
  <table class="tittab"  border="0" cellspacing="7">
    <tr>
      <td height="57">Date of RTD:</td>
      <td align="left" valign="top"><label>
        <input name="date_of_rtd" type="text" class="grey" id="subject" size="36" value="<?php echo $row['date_of_rtd'];?>"/>
      </label><span class="warning">*</span> 
</td>
    </tr>
    <tr>
      <td>Amount :</td>
      <td align="left" valign="top"><label>

        <input name="amount" type="text" class="grey" id="subject" size="36" value="<?php echo $row['amount'];?>"/>
      </label><span class="warning">*</span> 
</td>
    </tr>
        <tr>
      <td>File No. :</td>
      <td align="left" valign="top"><label>

        <input name="fileno" type="text" class="grey" id="subject" size="36" value="<?php echo $row['fileno'];?>"/>
      </label><span class="warning">*</span> 
</td>
    </tr>
    
        <tr>
      <td>Name of Beneficiary :</td>
      <td align="left" valign="top"><label>

        <input name="namebeneficia" type="text" class="grey" id="subject" size="36" value="<?php echo $row['name_of_beneficiary'];?>"/>
      </label><span class="warning">*</span> 
</td>
    </tr>
    
          <tr>
      <td>Type of Benefits :</td>
         <td><select  class="grey"name="benefit" id="edition">  
        <option value="select">select</option>
        <option value="">-----------</option>
        <?php
		if($row['type_of_benefit']){
		echo "<option value='{$row['benefit']}' selected='selected'>".$row['type_of_benefit']."</option>";
		}
	
        ?>
    <option value="Retirement Benefit">Retirement Benefit</option>
    <option value="Death Benefit">Death Benefit</option>
        </select><span class="warning">*</span>
         
</td>
<td></td>
    <td></td>
    </tr>

    
    <tr>
      <td>Payment No. :      
</td>
      <td align="left" valign="top"><label>

        <input name="paymentno" type="text"  class="grey" id="place" size="36" value="<?php echo $row['payment_no'];?>"/>
      </label><span class="warning">*</span>
</td>
    </tr>
    <tr>
      <td>Remark:      
</td>
      <td align="left" valign="top"><label>
        <input name="remark" type="text" class="grey" id="publisher" size="36" value="<?php echo $row['remark'];?>"/>
      </label><span class="warning">*</span>
</td>
    </tr>
    
    </table>
    
    </fieldset>
   
        <input type="submit" name="update" id="submit" value="  " class="update" />
      </label>
   
</form>
<?php 
} ?>


</div>
<center><a href="menu.php">Go to Menu</a></center>
<div id="footer">
</div>
</div>



</body>
</html>
<?php }
else {header("location:index.php?access=denied");

}
?>