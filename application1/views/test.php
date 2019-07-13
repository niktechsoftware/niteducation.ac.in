<!DOCTYPE HTML>
<html lang="en-US">

<!-- Created by Hwebs Techonologies on Mon, 02 Dec 2013 14:57:57 IST -->
<head>
	<title>Shashi Shanti</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="skins/red-blue/blue.css" id="colors" /> 
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
	<script src="jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.color.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
	<script src="js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
		<!--switcher-->
		<link rel="stylesheet" href="css/switcher.css">	
		<script src="js/jquery.cookie.js"></script>
		<script src="js/switcher.js"></script>
		<!--switcher and-->
</head>
<body>
<div id="wrapper">
	<?php include"header.php"; ?>
	<section id="content" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="span9">
				<h1>Welcome to Shashi Shanti Dental &amp; Oral Care</h1>
				<span class="purchase">Dr Rajkumar Choubey is an Oral & Dental Surgeon and Implantologist, in Ghazipur.</span>
			</div>			
		</div>
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span3">
						<a href="contact.php" class="link-block">
							<span class="move-item icon-1 move-bg-icon"></span>
							<h2 class="move-item">appointment</h2>
							<p class="move-item">Setting appointment with the us is just a click away. Alll we need is some information about you. We will get back to you as soon as possible.</p>
						</a>
					</div>
					<div class="span3">
						<a href="service.php" class="link-block">
							<span class="move-item icon-2 move-bg-icon"></span>
							<h2 class="move-item">Our Services</h2>
							<p class="move-item">The clinic is spacious, fully air conditioned with two state of the art computerized dental chairs for providing maximum comfort to the patient.</p>
						</a>
					</div>
					<div class="span3">
						<a href="about.php" class="link-block">
							<span class="move-item icon-3 move-bg-icon"></span>
							<h2 class="move-item">Meet our doctors</h2>
							<p class="move-item">Dr. Rajkumar Choubey is a highly qualified and experienced Consultant, Surgeon and Implantologist in India.</p>
						</a>
					</div>
					<div class="span3">
						<a href="#" class="link-block">
							<span class="move-item icon-4 move-bg-icon"></span>
							<h2 class="move-item">Our Mission</h2>
							<p class="move-item">Our mission is to provide you with the finest possible dental care, in the most comfortable environment possible.<br /><br /> </p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<p>Dr Rajkumar Choubey is an Oral & Dental Surgeon and Implantologist, practising in Ghazipur, India. This site is for patients who wish to learn more about dentistry and dental care, as well as for professionals who wish to refer cases.</p>
            <p>Our mission is to provide you with the finest possible dental care, in the most comfortable environment possible, with the highest degree of technical excellence, friendliness and respect keeping your priorities and expectations in mind. The rates for treatments are quite reasonable and our practice very ethical. Besides that, you will experience a respectful & confidential consultation and treatment from our team of doctors. The clinic has been certified for ISO 9001:2008 for its quality management system & implementation.</p>
		</div>
		<div class="row">
		<div class="title"><h2>News</h2></div>
		<fieldset style="border:#06F 1px solid; height:200px; margin-bottom:30px; padding:10px 30px 10px 30px;">
                <marquee direction="up" scrollamount="2">
<?php 
						include_once"db.php";
						$news = 'select * from notice1';
						$result1 = mysql_query($news);
						while($row = mysql_fetch_array($result1))
						{
							?>
                <h4><?php echo $row['heading']; ?></h4>
                <p><?php echo $row['dis']; ?></p>
                <span style="float:right;"><h5><?php echo $row['post_date']; ?></h5></span>
                
                <?php	} ?> 
                </marquee>
                </fieldset>
		</div>
	</div>
	</section>
</div>
<footer id="footer" class="container-fluid">
	<div class="container">
		<section class="row">
			<article class="span3" style="width:300px;">
				<h3 class="title">Address</h3>
				<p><b>Shashi Shanti</b> Dental and Oral Care Center<br>Aastbhuji colony Baribag, Lanka,<br>(300 Meter inside from main road)<br>
Ghazipur, U.P.</p>
				<div class="link">
					Cell Phone : +91 9415241551<br>
					Office : +91 548-2222551  <br>
					Email: info@shashishanti.com
				</div>
					
			</article>
			
			<article class="span3 navblock" style="width:370px;">
				<aside class="widget widget_custom_comments_entries">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Shashi-Shanti-Dental-Oral-Care-Center/245867355576574?skip_nax_wizard=true" data-width="370" data-height="230" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-border-color="grey" data-header="true"></div>

							</aside>
			</article>
			<article class="span3">
				<h3 class="title">Mail Us</h3>
				<form method="post" action="mail.php">
                	<table>
                    	<tr>
                        	<td>Email</td><td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                        	<td valign="top">Message</td><td><textarea rows="3" cols="6"></textarea></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center"><input type="submit" value="Mail us" /></td>
                        </tr>
                    </table>
                </form>
			</article>
		</section>
		<div class="back-top up"><a href="#top"></a></div>
	</div>
</footer>
<footer class="footer-line container-fluid">
	<div class="container">
		<div class="row-fluid">
			<div class="span8 alignleft">Copyright &copy; 2014 Shashi Shanti Dental &amp; Oral Care Center
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="http://www.e-zeeinternet.com/count.php?page=1030067&style=plain_b&nbdigits=9&reloads=1" alt="Web Counter" border="0" >
			</div>
			
			<div class="span4 alignright hidden-phone">Powered By <a href="gfinch.in" target="_blank">Gfinch Technology</a><a href="#top" class="top up">Top</a></div>
		</div>
	</div>
</footer>

</body>

</html>