<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact us</title>
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="SportFIT template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<a href="#">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><div></span></div></div>
						</a>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
			                    <li> <a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="forme.php">EMS For Me</a></li>
								<li><a href="business.php">EMS For Business</a></li>
								<li class="active"><a href="contact.php">Contact Us</a></li>
								<li><a href="dis.php">Distribution</a></li>
							</ul>
						</nav>
						
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Hamburger -->
	
	<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
		<div class="hamburger">
			<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
				<span>menu</span>
				<div class="hamburger_container">
					<div class="menu_hamburger">
						<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
						<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
						<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->

	<div class="menu trans_800">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="forme.php">EMS For Me</a></li>
				<li><a href="business.php">EMS For Business</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="dis.php">Distribution</a></li>
			</ul>
		</div>

		
	</div>


	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/contactp.jpg)"></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact Us</div>
							
						<div class="home_subtitle">Please fill out the form below to send us an email and we will get back to you as soon as possible.</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Content -->
				<div class="col-lg-4">
					<div class="contact_content">
						<div class="contact_logo">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><div></span></div></div>
						</div>
						<div class="contact_text">
							<p>Mail us! We create exclusive offers based on your special demands.</p>
						</div>
						
				<?php
				include('ncontact.php');
				?>
						<div class="contact_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>AD:</div></div>
									<div>Weideweg 27,8<p>30926 seelze,<br>Germany</p></div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>AD:</div></div>
									<div>2, Near Warszawskie Przedmiescir<p>6-222, 99-320 kutno<br>Poland</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>M:</div></div>
									<div>@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form 
						
				<div class="col-lg-8 contact_col">
					<div class="contact_title">Get in touch</div>
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div class="row">
								<div class="col-lg-6">
									<div class="input_item"><input type="text" name="name" class="contact_input trans_200" placeholder="Name" required="required"></div>
								</div>
								<div class="col-lg-6">
									<div class="input_item"><input type="email" name="email" class="contact_input trans_200" placeholder="E-mail" required="required"></div>
								</div>
							</div>
							<div class="input_item"><textarea name="message" class="contact_input contact_textarea trans_200" placeholder="Message" required="required"></textarea></div>
							<button  type="submit" name="contact_submit" class="contact_button button">Send<span></span></button>
						</form>
					</div>
				</div>

			</div> -->
			<!-- Contact Form 
				<div class="contact_title"><h4>Mail Us : totalbodyequipment@gmail.com</h4></div>
				-->
				 
                 
		</div>
	</div>
	
<?php
if(isset($_POST['contact_submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
$to = "@gmail.com";
$subject = $subject;
$txt = $name. "\r\n" .$message;
$headers = $email;

mail($to,$subject,$txt,$headers);
echo "<script>
alert('thank you we will back to you soon...');

</script>";	
}
?>
	<!-- Footer -->

	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>