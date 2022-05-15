<?Php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

session_start();
if($_SESSION['auth']==1){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOCAL GOV'T AREA'S MENU</title>
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

<h2 style="position:relative; top:15px; left:70px;">LOCAL GOVERNMENT PENSION DEPARTMENT</h2>
</div>

<p style="margin:-20px 0px 0px 80px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
<br/><br/><br/><br/>

<div id="content">
MENU 2 Local Government Area's Details
<table border="1" class="restable" width="100%" style="color:#a9aaab; text-align:center; border-collapse:collapse;font-size:14px;">
  <tr>
       <td><?php echo "<a href='menu3.php?status=Agaie'><img src='#' width='120' style='border:none;' height='87' /><br/>Agaie</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Agwara'><img src='#' width='120' style='border:none;' height='87' /><br/>Agwara</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Bida'><img src='#' width='120' style='border:none;' height='87' /><br/>Bida</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Borgu'><img src='#' width='120' style='border:none;' height='87' /><br/>Borgu</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Bosso'><img src='#' width='120' style='border:none;' height='87' /><br/>Bosso</a>";?></td>
  </tr>
  <tr>
     <td height="68"><?php echo "<a href='menu3.php?status=Chanchanga'><img src='#' width='120' style='border:none;' height='87' /><br/>Chanchanga</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Edata'><img src='#' width='120' style='border:none;' height='87' /><br/>Edata</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Gbako'><img src='#' width='120' style='border:none;' height='87' /><br/>Gbako</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Gurara'><img src='#' width='120' style='border:none;' height='87' /><br/>Gurara</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Katcha'><img src='#' width='120' style='border:none;' height='87' /><br/>Katcha</a>";?></td>
  </tr>
  <tr>
     <td height="44"><?php echo "<a href='menu3.php?status=Kontangora'><img src='#' width='120' style='border:none;' height='87' /><br/>Kontangora</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Lapai'><img src='#' width='120' style='border:none;' height='87' /><br/>Lapai</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Lavun'><img src='#' width='120' style='border:none;' height='87' /><br/>Lavun</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Magama'><img src='#' width='120' style='border:none;' height='87' /><br/>Magama</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Mariga'><img src='#' width='120' style='border:none;' height='87' /><br/>Mariga</a>";?></td>

  </tr>
  <tr>
     <td height="42"><?php echo "<a href='menu3.php?status=Mashegu'><img src='#' width='120' style='border:none;' height='87' /><br/>Mashegu</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Mokwa'><img src='#' width='120' style='border:none;' height='87' /><br/>Mokwa</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Munya'><img src='#' width='120' style='border:none;' height='87' /><br/>Munya</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Paiko'><img src='#' width='120' style='border:none;' height='87' /><br/>Paiko</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Rafi'><img src='#' width='120' style='border:none;' height='87' /><br/>Rafi</a>";?></td>

  </tr>
  <tr>
     <td height="71"><?php echo "<a href='menu3.php?status=Rijao'><img src='#' width='120' style='border:none;' height='87' /><br/>Rijao</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Suleja'><img src='#' width='120' style='border:none;' height='87' /><br/>Suleja</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Tafa'><img src='#' width='120' style='border:none;' height='87' /><br/>Tafa</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Wusihshi'><img src='#' width='120' style='border:none;' height='87' /><br/>Wusihshi</a>";?></td>
     <td><?php echo "<a href='menu3.php?status=Shiroro'><img src='#' width='120' style='border:none;' height='87' /><br/>Shiroro</a>";?></td>
  </tr>
  <tr>
     <td height="71"><a href="summary.php">View Summaries</a></td>
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
<?php
}
else {
	header("location:index.php?access=denied");
	}
	?>