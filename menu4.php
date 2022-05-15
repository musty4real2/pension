<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
if($_SESSION['auth']==1){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MENU</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="loopedslider.min.js" type="text/javascript" charset="utf-8"></script>
	<style type="text/css" media="screen">	
		/*
		 * Required 
		*/
		.container { width:300px; height:175px; overflow:hidden; position:absolute; top:140px; cursor:pointer; }
		.slides { position:absolute; top:0; left:0; }
		.slides > div { position:absolute; top:0; width:500px; display:none; }
		/*
		 * Optional
		*/
		#loopedSlider,#newsSlider { margin:0 auto; width:500px; clear:both; position:absolute; top:140px; left:800px;}
		ul.pagination { list-style:none; padding:0; margin:0; }
		ul.pagination li  { float:left; }
		ul.pagination li a { padding:2px 4px; }
		ul.pagination li.active a { background:blue; color:white; }
	</style>
</head>

<body>

<div  id="wrapper">

<div id="head">

<h2 style="position:relative; top:15px; left:70px;">LOCAL GOVERNMENT PENSION DEPARTMENT </h2>
</div>
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
<br/><br/><br/><br/>

<div id="content">
MENU 4 Paid Details
<center><table width="700" border="0">
  <tr>
    <td height="92"><a href="veiw_list_by_number2.php"><center><img src="images/icon6.PNG" width='120' style='border:none;' height='87' /><br/>Veiw All Outstanding Payments Sorted By Number</center></a></td>
    <td><a href="veiw_list_by_number1.php"><center><img src="images/author.gif" width='120' style='border:none;' height='87' /><br/>Veiw all payment made Sorted By Number</center> </a></td>
  
  </tr>
  
  <tr>
    <td height="118"><a href="veiw_list_by_alpha1.php"><center><img src="images/icon7.PNG" width='120' style='border:none;' height='87' /><br/>Veiw Outstanding List Sorted Alphabethically</center></a></td>
    <td><a href="veiw_list_by_alpha2.php"><center><img src="images/icon7.PNG" width='120' style='border:none;' height='87' /><br/>Veiw Paid List Sorted Alphabethically</center></a></td>
  </tr>

    <td><a href="search_by_name1.php"><center><img src="images/icon5.PNG" width='120' style='border:none;' height='87' /><br/>Search Outstanding Payment By Name</center></a></td>
            <td><a href="search_by_name2.php"><center><img src="images/icon5.PNG" width='120' style='border:none;' height='87' /><br/>Search Payment By Name</center></a></td>

  </tr>



</table></center>
<script type="text/javascript" charset="utf-8">
	$(function(){
		// Option set as a global variable
		$.fn.loopedSlider.defaults.addPagination = true;
		
		$('#loopedSlider').loopedSlider({
			autoStart: 3500,
			hoverPause: true
		});
	});
</script>



</div>


<div id="footer" style="clear:both;">
<?php include("footer.php"); ?></div>



</div>

</body>
</html>
<?php
}
else {
	header("location:index.php?access=denied");
	}
	?>