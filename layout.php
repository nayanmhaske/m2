<?php
function page_head()
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<title>Townsville Community Centre</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="media.css" type="text/css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="slider/jquery.bxslider.min.js"></script>
		<script src="slider/plugins/jquery.easing.1.3.js"></script>
		<!-- bxSlider CSS file -->
		<link href="slider/jquery.bxslider.css" rel="stylesheet" />

</head>
<?php
}

function body_head()
{
?>
	<div class="container" style="background:#313332;">
	<div id="header" style="overflow:visible" >
		<a href="index.php">
		<div id="logo">
			<img src="images/logo.png" style="max-width:100%" />
		</div>
		</a>
		
		<div id="header-menu">
		
			<link rel="stylesheet" href="menu/styles.css">
			   <script src="menu/script.js"></script>
			   <div id='cssmenu'>
				<ul>
				   <li><a href='index.php'>Home</a></li>
				   <li><a href='about.php'>About</a></li>
				   <li><a href='events.php'>Events</a></li>				   
				   <li><a href='bulletin.php'>Bulletin</a></li>				   
				   <li><a href='sponsors.php'>Sponsors</a></li>
				   <li><a href='musos.php'>Musos</a></li>
				   <li><a href='members.php'>Members</a></li>
				   <li><a href='contact.php'>Contact</a></li>
				</ul>
				</div>
			
		</div>
		
	</div>
	</div>
<?php
}

function menu()
{
?>
	<div class="container" style=" overflow:visible;">
	<div id="navigation">
	   
	</div>
	</div>
<?php
}

function slider()
{
?>
	<div class="container">
	<div id="slider">
		<ul class="bxslider">
 		  <li><img src="images/slide1.jpg" /></li>
		  <li><img src="images/slide1.jpg" /></li>
		  <li><img src="images/slide1.jpg" /></li>
		</ul>
		
		<script type="text/javascript">
		$(document).ready(function(){
		  $('.bxslider').bxSlider({
		  	auto:true,
			pager: false
			}
		  );
		});
		</script>
	
	</div>
	</div>
	
	<!--
	<div class="container" style="margin:10px 0px;">
	<div id="slider">
		<img src="images/banner.png" width="100%" />
	</div>
	</div>
	-->
<?php
}

function footer_bar()
{
?>
	<div class="container" style="padding:10px 0px;  background:#313332; font-size:14px;">
	<div id="footer-bar" style="overflow:auto;">
		<div id="footer-bar-div">
		<h2>ABOUT US</h2>		
		<P>Based in Townsville, North Qld, the Music Centre presents concerts and workshops throughout the year, in a diverse range of genres including classical, jazz, folk, blues, world and contemporary music, featuring touring artists and locally-based professional and emerging artists.</P>
		
		</div>
		
		<div id="footer-bar-div">
		
		<h2>GET IN TOUCH</h2>	
		<table width="100%" cellspacing="10" style="margin-left:-10px;">
			<tr>
			<td><strong>Address:</strong></td>
			<td>Townsville Civic Theatre, 41 Boundary Street, Townsville, Qld 4810</td>
			</tr>
			<tr>
			<td><strong>Phone:</strong></td>
			<td>07 4724 2086<br/>0457 314 611</td>
			</tr>
			<tr>
			<td><strong>Email:</strong></td>
			<td>admin@townsvillemusic.org.au</td>
			</tr>
		</table>	
		
		
		</div>
		
		<div id="footer-bar-div1">
		<H2>SOCIAL MEDIA</H2>
		<p>Connect with us!</p>
		<?php
		for($i=1;$i<=6;$i++)
		{
		?>
		<a href="https://www.facebook.com/TownsvilleCommunityMusicCentre/" target="_blank" style="text-decoration:none;">
		<img src="images/icons/<?php echo $i; ?>.jpg" />
		</a>
		<?php
		}
		?>
		</div>
		
	</div>
	</div>
	
<?php
}



function footer()
{
?>
	<div class="container" style="padding:10px 0px;  background:#252726; font-size:14px;">
	<div id="footer" style="overflow:auto; text-align:center;">
		<h2 style="color:#fff;">COPYRIGHTS 2017</h2>
	</div>
	</div>
<?php
}
?>