<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
	<body>
	    
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
	
	
	
		   
				<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
				<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>		
			</div>
		</div>
	</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="recent">
					
				</div>		
				<form role="form">
					<div class="form-group">
					
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</div>
					<div class="form-group">
					
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					
					<textarea class="form-control" rows="8"></textarea>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			
			
				<div class="contact-area">
					<p>A variation on the question technique above, the multiple-choice question is another great way to engage your reader. I don’t know about you, but I love multiple-choice questions. It’s like responding to a poll. As above, make your question relevant to your reader and the article itself.</p>
					<p>Nam liber tempor cum soluta nobis eleifend option 
					congue nihil imperdiet doming id quod mazim placerat
					facer possim assum. Typi non habent claritatem insitam;
					est usus legentis in iis qui facit eorum.</p>
					
					<h4>Address:</h4>4,Shastri circle behind post office,Udaipur<br>
					<h4>Telephone:</h4>+91 7610850721</br>
					
				</div>										
			</div>			
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<hr>
		</div>
	</div>
	
	
		
		<!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/responsive-slider.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>