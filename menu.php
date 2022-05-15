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
MENU 1 Details
<table width="700" border="0">
  <tr>
    <td height="92"><a href="viewall.php"><center><img src="images/icon2.PNG" width='120' style='border:none;' height='87' /><br/>Veiw the record of the whole 25 local government</center></a></td>
    <td><a href="veiw_list_by_number.php"><center><img src="images/author.gif" width='120' style='border:none;' height='87' /><br/>Veiw List Sorted By Number</center> </a></td>

    <td></td>
  
  </tr>
  
  <tr>
    <td height="118"><a href="menu2.php"><center><img src="images/icon6.PNG" width='120' style='border:none;' height='87' /><br/>Veiw All Locals Government Outstanding Payments</center></a></td>
    <td><a href="veiw_list_by_alpha.php"><center><img src="images/icon7.PNG" width='120' style='border:none;' height='87' /><br/>Veiw List Sorted Alphabethically</center></a></td>
    <td></td>
  </tr>
  <tr>
    <td height="117"><a href="input_form.php"><center><img src="images/icon1.PNG" width='120' style='border:none;' height='87' /><br/>Enter Details</center></a></td>
    <td><a href="search_by_name.php"><center><img src="images/icon5.PNG" width='120' style='border:none;' height='87' /><br/>Search By Name</center></a></td>
    <td></td>
  </tr>
  
  
  <tr>
  
  <td><a href="input_form2.php"><center><img src="images/icon4.PNG" width='120' style='border:none;' height='87' /><br/>
    Enter Outstanding Payment</center></a></td>
          <td><a href="veiw_list_by_name.php"><center><img src="images/icon3.PNG" width='120' style='border:none;' height='87' /><br/>Veiw List Sorted By Name </center></a></td>

  </tr>



</table>
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

<?php }
else {header("location:index.php?access=denied");

}
?>