<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
if($_SESSION['auth']==1){
	$author=$_GET['author'];
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOCAL GOVERNMENT PENSION DEPARTMENT</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div id="head">
</div>
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>

<div class="viewdiv">


  <?php
  		include("connect.php");

  	$sql="SELECT * FROM `voters` WHERE id='$author'";


$query=mysql_query($sql);
if(!$query){
		echo "could not fetch record:".mysql_error();
		}?>
  
		<?php
	while($row=mysql_fetch_array($query)){?>







    <fieldset class="authornamefield">
    <legend class="create"><?php echo  $row['name_of_beneficiary'];?></legend>
   <center> <img  class="centerimg"src="images/author.gif" width="68" height="86" /></center>
<p  class="authorname"><?php echo  $row['name_of_beneficiary'];?></p>
</fieldset>
<fieldset class="titsubfield">
<table border="0" width="750" cellspacing="15">

<tr>

	<td>DATE OF FIRST APPOINTMENT :</td>
   <td class="t"><?php if($row['date_of_first_appointment']==""){echo "-";} else echo $row['date_of_first_appointment'];?></td>
   <td></td>
   <td></td>
</tr>


<tr>
    <?php
    $date_of_rtd=$row['date_of_rtd'];
	?>

    <td>DATE OF RTD :</td>
   <td><?php if($date_of_rtd==""){echo "-";} else echo $date_of_rtd;?></td>
   <td></td>
   <td></td>
 </tr>
 
 
 <tr>   
 	<td>AMOUNT :</td>
   <td class="t"><?php echo $row['amount'];?></td>
  <td></td>
   <td></td>
   </tr><tr>
	 <td>FILE NO.:</td>
 
   	<td><?php if($row['fileno']==""){echo "-";} else echo $row['fileno'];?></td>
      <td></td>
   <td></td>
</tr>
<tr>
    <td>NAME OF BENEFICIARIES</td>
    
    <td><?php echo $row['name_of_beneficiary'];?></td>
  <td></td>
   <td></td>
   </tr>
   <tr>
    <td>TYPE OF BENEFIT</td>
    <td><?php echo $row['type_of_benefit'];?></td>
  <td></td>
   <td></td>
    </tr>
 <tr>
     <td>PAYMENT NO.:</td>
    <td class="t"><?php echo $row['payment_no'];?></td>
    <td></td>
    <td></td>
</tr>
 
 
</table>
</fieldset>









<fieldset class="numberfield">
  <table class="auth" border="0" width="755" cellspacing="15">
 
    <tr>
    <td>REMARK:</td>
    <td class="number"><?php echo $row['remark'];?></td>
    </tr>
  
      <td><?php echo $row['entry_date'];?></td>
    <td></td>
    <td></td>
    </tr>
        <tr>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>


</table>
</fieldset>

<form  action="update_status.php"  method="get">

<input type="hidden" value="<?php echo $row['id'];?>" name="isbn"/>
<input type="submit" class="edit" name="edit" value="" />
</form>



<?php }?>


<center><a class="make" href="entry.php">Catalogue another book</a> |	<a class="make" href="index.php">Go to Menu</a>	|	<?php echo "<a href='book.php?subject=$subject'>back to books on $subject</a></center>";
?>
</div>



<div id="footer">
</div>


</div>
</body>
</html>
<?php }
else {header("location:index.php?access=denied");

}