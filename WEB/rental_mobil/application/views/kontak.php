<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/users/img/elements/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Rental Mobil | Kontak</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/nice-select.css">			
		<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/main.css">
	</head>
	<body>

		<?php include "view/view-header.php" ?>

		<!-- start banner Area -->
		<section class="banner-area relative" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Hubungi Kami
						</h1>	
						<p class="text-white link-nav"><a href="<?php echo base_url() ?>index.php/home">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url() ?>index.php/contact<?php echo base_url();?>assets/users/"> Kontak</a></p>
					</div>											
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<!-- Start contact-page Area -->
		<section class="contact-page-area section-gap">
			<div class="container">
				<div class="row">
					<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
					<div class="col-lg-4 d-flex flex-column address-wrap">
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-home"></span>
							</div>
							<div class="contact-details">
								<h5>Dhaka, Bangladesh</h5>
								<p>56/8, West Panthapath</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-phone-handset"></span>
							</div>
							<div class="contact-details">
								<h5>00 (880) 9865 562</h5>
								<p>Mon to Fri 9am to 6 pm</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-envelope"></span>
							</div>
							<div class="contact-details">
								<h5>support@codethemes.com</h5>
								<p>Send us your query anytime!</p>
							</div>
						</div>														
					</div>
					<div class="col-lg-8">
						<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
							<div class="row">	
								<div class="col-lg-6 form-group">
									<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
								
									<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

									<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
									<div class="mt-20 alert-msg" style="text-align: left;"></div>
								</div>
								<div class="col-lg-6 form-group">
									<textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									<button class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
																			
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>	
		</section>
		<!-- End contact-page Area -->

		<!-- start footer Area -->		
		<?php include "view/view-footer.php";  ?>
		<!-- End footer Area -->		

		<script src="<?php echo base_url();?>assets/users/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?php echo base_url();?>assets/users/js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
		<script src="<?php echo base_url();?>assets/users/js/easing.min.js"></script>			
		<script src="<?php echo base_url();?>assets/users/js/hoverIntent.js"></script>
		<script src="<?php echo base_url();?>assets/users/js/superfish.min.js"></script>	
		<script src="<?php echo base_url();?>assets/users/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url();?>assets/users/js/jquery.magnific-popup.min.js"></script>	
		<script src="<?php echo base_url();?>assets/users/js/owl.carousel.min.js"></script>			
		<script src="<?php echo base_url();?>assets/users/js/jquery.sticky.js"></script>
		<script src="<?php echo base_url();?>assets/users/js/jquery.nice-select.min.js"></script>	
		<script src="<?php echo base_url();?>assets/users/js/waypoints.min.js"></script>
		<script src="<?php echo base_url();?>assets/users/js/jquery.counterup.min.js"></script>					
		<script src="<?php echo base_url();?>assets/users/js/parallax.min.js"></script>		
		<script src="<?php echo base_url();?>assets/users/js/mail-script.js"></script>	
		<script src="<?php echo base_url();?>assets/users/js/main.js"></script>	
	</body>
</html>


