<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

session_start();
if($_SESSION['auth']==1){?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
<h2 style="position:relative; top:15px; left:70px;">SUMMARY OF ALL OUTSTANDING PAYMENT  </h2>
</div>
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>

<br/>
<div id="content">


<?php 


include_once('connect.php');



echo "<h1>$status Local Government Record (s)</h1>";	
?>

  
<center><table border="1" class="restable" width="100%" style="color:#a9aaab; text-align:center; border-collapse:collapse;font-size:14px;">
  <tr style="background-color:#9C0; color:#FFF; font-family:Tahoma, Geneva, sans-serif;">
<th>S/N</th>
<th height="37">LOCAL GOVERNMENT </th>
<th>TOTAL OF OUT STANDING PAYMENTS</th>

</tr>
<tr>
<td>1</td>

<td>Agaie</td>
<td><?php
number_format();
$query1="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Agaie'";
$result1=mysql_query($query1) or die(mysql_error());

while($row=mysql_fetch_array($result1)){
	$tot1=number_format($row['SUM(amount)'],2);
	
echo $tot1;

}
?></td>
</tr>
<tr>
<td>2</td>

<td>Agwara</td>
<td><?php
number_format();
$query2="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Agwara'";
$result2=mysql_query($query2) or die(mysql_error());

while($row=mysql_fetch_array($result2)){
	$tot2=number_format($row['SUM(amount)'],2);
	
echo $tot2;

}
?></td>
</tr>
<tr>
<td>3</td>

<td>Bida</td>
<td>
<?php
number_format();
$query3="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Bida'";
$result3=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result3)){
	$tot3=number_format($row['SUM(amount)'],2);
	
echo $tot3;

}
?>
</td>

<tr>
<td>4</td>

<td>Borgu</td>
<td>
<?php
number_format();
$query4="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Borgu'";
$result4=mysql_query($query4) or die(mysql_error());

while($row=mysql_fetch_array($result4)){
	$tot4=number_format($row['SUM(amount)'],2);
	
echo $tot4;

}
?>
<tr>
<td>5</td>

<td>Bosso</td>
<td>
<?php
number_format();
$query5="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Bosso'";
$result5=mysql_query($query5) or die(mysql_error());

while($row=mysql_fetch_array($result5)){
	$tot5=number_format($row['SUM(amount)'],2);
	
echo $tot5;

}
?>
<tr>
<td>6</td>

<td>Chanchanga</td>
<td>
<?php
number_format();
$query6="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Chanchanga'";
$result6=mysql_query($query6) or die(mysql_error());

while($row=mysql_fetch_array($result6)){
	$tot6=number_format($row['SUM(amount)'],2);
	
echo $tot6;

}
?>
<tr>
<td>7</td>

<td>Edata</td>
<td>
<?php
number_format();
$query7="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Edata'";
$result7=mysql_query($query7) or die(mysql_error());

while($row=mysql_fetch_array($result7)){
	$tot7=number_format($row['SUM(amount)'],2);
	
echo $tot7;

}
?>
<tr>
<td>8</td>

<td>Gbako</td>
<td>
<?php
number_format();
$query8="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Gbako'";
$result8=mysql_query($query8) or die(mysql_error());

while($row=mysql_fetch_array($result8)){
	$tot8=number_format($row['SUM(amount)'],2);
	
echo $tot8;

}
?>
<tr>
<td>9</td>

<td>Gurara</td>
<td>
<?php
number_format();
$query9="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Gurara'";
$result9=mysql_query($query9) or die(mysql_error());

while($row=mysql_fetch_array($result9)){
	$tot9=number_format($row['SUM(amount)'],2);
	
echo $tot9;

}
?>
<tr>
<td>10</td>

<td>Katcha</td>
<td>
<?php
number_format();
$query10="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Katcha'";
$result10=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result10)){
	$tot10=number_format($row['SUM(amount)'],2);
	
echo $tot10;

}
?>
<tr>
<td>11</td>

<td>Kontangora</td>
<td>
<?php
number_format();
$query11="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Kontangora'";
$result11=mysql_query($query11) or die(mysql_error());

while($row=mysql_fetch_array($result11)){
	$tot11=number_format($row['SUM(amount)'],2);
	
echo $tot11;

}
?>
<tr>
<td>12</td>

<td>Lapai</td>
<td>
<?php
number_format();
$query12="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Lapai'";
$result12=mysql_query($query12) or die(mysql_error());

while($row=mysql_fetch_array($result12)){
	$tot12=number_format($row['SUM(amount)'],2);
	
echo $tot12;

}
?>
<tr>
<td>13</td>

<td>Lavun</td>
<td>
<?php
number_format();
$query13="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Lavun'";
$result13=mysql_query($query13) or die(mysql_error());

while($row=mysql_fetch_array($result13)){
	$tot13=number_format($row['SUM(amount)'],2);
	
echo $tot13;

}
?>
<tr>
<td>14</td>

<td>Magama</td>
<td>
<?php
number_format();
$query14="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Magama'";
$result14=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result14)){
	$tot14=number_format($row['SUM(amount)'],2);
	
echo $tot14;

}
?>
<tr>
<td>15</td>

<td>Mariga</td>
<td>
<?php
number_format();
$query15="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Mariga'";
$result15=mysql_query($query15) or die(mysql_error());

while($row=mysql_fetch_array($result15)){
	$tot15=number_format($row['SUM(amount)'],2);
	
echo $tot15;

}
?>
<tr>
<td>16</td>

<td>Mashegu</td>
<td>
<?php
number_format();
$query16="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Mashegu'";
$result16=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result16)){
	$tot16=number_format($row['SUM(amount)'],2);
	
echo $tot16;

}
?>
<tr>
<td>17</td>

<td>Mokwa</td>
<td>
<?php
number_format();
$query17="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Mokwa'";
$result17=mysql_query($query17) or die(mysql_error());

while($row=mysql_fetch_array($result17)){
	$tot17=number_format($row['SUM(amount)'],2);
	
echo $tot17;

}
?>
<tr>
<td>18</td>

<td>Munya</td>
<td>
<?php
number_format();
$query18="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Munya'";
$result18=mysql_query($query18) or die(mysql_error());

while($row=mysql_fetch_array($result18)){
	$tot18=number_format($row['SUM(amount)'],2);
	
echo $tot18;

}
?>
<tr>
<td>19</td>

<td>Paiko</td>
<td>
<?php
number_format();
$query19="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Paiko'";
$result19=mysql_query($query19) or die(mysql_error());

while($row=mysql_fetch_array($result19)){
	$tot19=number_format($row['SUM(amount)'],2);
	
echo $tot19;

}
?>
<tr>
<td>20</td>

<td>Rafi</td>
<td>
<?php
number_format();
$query20="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Rafi'";
$result20=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result20)){
	$tot20=number_format($row['SUM(amount)'],2);
	
echo $tot20;

}
?>
<tr>
<td>21</td>

<td>Rijao</td>
<td>
<?php
number_format();
$query21="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Rijao'";
$result21=mysql_query($query21) or die(mysql_error());

while($row=mysql_fetch_array($result21)){
	$tot21=number_format($row['SUM(amount)'],2);
	
echo $tot21;

}
?>
<tr>
<td>22</td>

<td>Suleja</td>
<td>
<?php
number_format();
$query22="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Suleja'";
$result22=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result22)){
	$tot22=number_format($row['SUM(amount)'],2);
	
echo $tot22;

}
?>
<tr>
<td>23</td>

<td>Tafa</td>
<td>
<?php
number_format();
$query23="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Tafa'";
$result23=mysql_query($query23) or die(mysql_error());

while($row=mysql_fetch_array($result23)){
	$tot23=number_format($row['SUM(amount)'],2);
	
echo $tot23;

}
?>
<tr>
<td>24</td>

<td>Wushishi</td>
<td>
<?php
number_format();
$query24="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Wusihshi'";
$result24=mysql_query($query24) or die(mysql_error());

while($row=mysql_fetch_array($result24)){
	$tot24=number_format($row['SUM(amount)'],2);
	
echo $tot24;

}
?>
<tr>
<td>25</td>

<td>Shiroro</td>
<td>
<?php
number_format();
$query25="SELECT SUM(amount) FROM `voters` WHERE `payment_status`='outstanding' AND `lg_to_vote`='Bida'";
$result25=mysql_query($query25) or die(mysql_error());

while($row=mysql_fetch_array($result25)){
	$tot25=number_format($row['SUM(amount)'],2);
	
echo $tot25;

}
?>

</table>

</center>
    
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