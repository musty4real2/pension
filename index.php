<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOCAL GOVERNMENT PENSION DEPARTMENT</title>
<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="loopedslider.min.js" type="text/javascript" charset="utf-8"></script>
	
	<style type="text/css" media="screen">	
		/*
		 * Required 
		*/
		.container { width:300px; height:175px; overflow:hidden; position:relative; cursor:pointer; }
		.slides { position:absolute; top:0; left:0; }
		.slides > div { position:absolute; top:0; width:500px; display:none; }
		/*
		 * Optional
		*/
		#loopedSlider,#newsSlider { margin:0 auto; width:500px; position:relative; clear:both; }
		ul.pagination { list-style:none; padding:0; margin:0; }
		ul.pagination li  { float:left; }
		ul.pagination li a { padding:2px 4px; }
		ul.pagination li.active a { background:blue; color:white; }
	</style>


</head>

<body>

<div  id="wrapper">

<div id="head">
<h2>LOCAL GOVERNMENT PENSION DEPARTMENT</h2>
<h2 style="position:relative; top:15px; left:70px;">&nbsp;</h2>
</div>


<div id="content">
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
<?php 

if($_GET['access']=='denied'){ echo "<h3 style='color:#F00;'>ACCESS DENIED!! LOGIN </h3>";
}
if($_GET['logout']==1){ echo "<h3 style='color:#F00;'>You have been loged out</h3>";
}


if(isset($_POST['button'])){

	$uname=addslashes($_POST['uname']);
	$pword=addslashes($_POST['pword']);
	

//USERNSAME=admin  PASSWORD=swordfish

if($uname=="admin" && $pword=="pension12345"){
	$_SESSION['auth']=1;
	header("location:menu.php");
	}
	
else {echo "<p style='color:#F00;'>Invalid Username or Password</p>";
}
}

?>


<fieldset style="clear:both;">
<legend>ADMIN LOGIN ONLY</legend>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="800" border="0" height="100">
  <tr>
    <td>Username:</td>
    <td><label>
      <input type="text" name="uname" id="textfield" size="50" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="pword" id="textfield2" size="50"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="button" id="button" value="Submit" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form></center>
</fieldset>
</div>


<div id="footer">
<?php include("footer.php"); ?></div>



</div>
</body>
</html>