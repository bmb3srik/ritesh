<?php session_start();?>
<?php //require_once("./templates/template_dental.php");?>
<?php 
$came_from1=$_SERVER['REQUEST_URI'];
$came_from1 = htmlspecialchars($came_from1, ENT_QUOTES);
require_once("./templates/template_engine.php");
?>
<?php require_once("./includes/functions_security.inc.php");?>
<?php include_once("./includes/functions_common.inc.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php startblock("metatag");?>
	<?php endblock("metatag");?>
	<?php echo '<link href="'.HOST.'/css/menu.css" type="text/css" rel="stylesheet"/>'."\n";?>
	<?php echo '<link href="'.HOST.'/css/style.css" type="text/css" rel="stylesheet"/>'."\n";?>
	<?php startblock('script');?>
	<script type="text/javascript" src="<?php echo HOST;?>/js/jquery.metadata.js"></script>
	<script type="text/javascript" src="<?php echo HOST;?>/js/jquery.tablesorter.js"></script>
	<script type="text/javascript" src="<?php echo HOST;?>/js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="<?php echo HOST;?>/js/jquery-latest.js"></script>
	<?php endblock('script'); ?>
	<?php startblock('style'); ?>
	<?php endblock('style'); ?>
</head>
<body>
	<div id="main_container">
	<!--header-->
<div id="header">
	<?php startblock("header");?>
	<!-- menu strip-->
	<div id="logo" style="height: 100px;">			
		<table width="1024px;">
			<tr>
				<td width="15%"><a href="home.html"><img src="images/jatak.png" alt="" title="" border="0"></a></td>
				<td width="70%" style="font-size: 35px; text-align:left; padding-top:10px; padding-left:-25px;"> <span >Appirion Dental Software</span></td>

				<td width="25%" style="text-align: right;" valign= "top"> 
				<?php
				if(isset($_SESSION['USER_NAME']))
				{
					echo $_SESSION['USER_NAME'];
				}
				?>


				<br/>
				<a href="#"> Preferences </a>  <br/>
				<?php
			      echo " <a href='".HOST."logout.php'>Logout</a></li>\n";
			  ?>
				</td>
			</tr>
		</table>
		<tr>
				<td width="40%">
				<div id="ddd">
				<span style="font-size:11px;">
				every Patient is important
				</span>
				</div></td>

		</tr>

		</div>
</div>

<div class = "clear"></div>

<!-- menu strip end -->

<div style="clear:both;"> </div>
				<div class="nav-collapse collapse nav-collapse-scondary" id="headernav">						
							<ul>
							<li><a href="#">List</a>
							<ul style="padding-left: 0px;">
							<li><a href="patient.php">Patient</a></li>
							<li><a href="add_patient.php">Add Patient</a></li>
							<li style="border-right: 0px none;"><a href="#">Child</a></li>
							</ul>
							</li>

							<li><a href="home.php">Home</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Contact Us</a></li>
							</ul>
				</div>

<div class = "clear"></div>


<?php endblock("header");?>

<!--header end-->




<!--for middle content hide-->
<?php include_once('slider.php');?>
<!--<div class="main"  >


<?php //startblock("filter");?>
	<div style="height: 300px;"> 
	
	</div>

<?php //endblock("filter");?>


<?php //startblock("content");?>
	<div style="height: 300px;"> 
	     
	</div>

<?php //endblock("content");?>
</div>-->
<!-- middle content end-->
<!--footer-->
<?php startblock("footer");?>
<div id = "footer" >
<div class="copyright">

</div>
<div class="footer_links"> 
<a href="#">Technology partner: Appirion Dental Software.</a>

</div>
</div>
<?php endblock("footer");?>
<!--footer end-->
</div>
</body>
</html>
