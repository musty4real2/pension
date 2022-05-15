<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
if($_SESSION['auth']==1){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Finance:: Successful</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper"><!--WRAPPER DIV--->

<div id="head">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;LOCAL GOVERNMENT PENSION DEPARTMENT</h2>
<p style="margin:-20px 0px 0px 800px;"><a style="color:#FFF; " href="logout.php">logout</a>  |  <a style="color:#FFF; " href="menu.php">home</a></p>
</div>

<div id="body"><!--BODY DIV--->


<div id="sidebar"><!--SIDEBAR DIV--->

</div><!--SIDEBAR DIV--->


<div id="rightside"><!--RIGHT CONTENT DIV--->

<div id="top"><!--TOP DIV INSIDE RIGHT CONTENT DIV-->
  <h2>&nbsp; &nbsp; &nbsp; &nbsp;Administrator</h2><BR/><BR/><BR/>
</div><!--TOP DIV INSIDE RIGHT CONTENT DIV-->

<div id="below"><!--below div-->
<p style="margin:-20px 0px 0px 0px;"><a style="color:#FOO; font-size:14px;" href="menu.php">Go To Menu 1</a></p>

<p style="margin:-20px 0px 0px 200px;"><a style="color:#FOO; font-size:14px;" href="menu2.php">Go To Menu 2</a></p>

<p style="margin:-20px 0px 0px 400px;"><a style="color:#FOO; font-size:14px;" href="menu4.php">Go To Menu 3</a></p>

<p style="margin:-20px 0px 0px 600px;"><a style="color:#FOO; font-size:14px;" href="logout.php">logout</a></p>
</div><!--below div-->


<div id="menu"><!--MENU DIV----->
<p class="msg done">Records have been Entered successfully!</p>

</div><!--MENU DIV----->

</div><!--RIGHT CONTENT DIV--->

</div><!--BODY DIV--->

<div><!--FOOTER DIV--->
<?php include("footer.php"); ?>
</div><!--FOOTER DIV--->


</div><!--WRAPPER DIV--->

</body>
</html>
<?php }
else {header("location:index.php?access=denied");

}
?>