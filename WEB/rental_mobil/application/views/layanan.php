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
		<title>Rental Mobil | Layanan</title>

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

		<?php include "view/view-header.php"; ?>

		<!-- start banner Area -->
		<section class="banner-area relative" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Layanan			
						</h1>	
						<p class="text-white link-nav"><a href="<?php echo base_url() ?>index.php/home">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url() ?>index.php/service"> Layanan</a></p>
					</div>											
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<?php 
			include "view/view-layanan.php";
			include "view/view-statistik.php";
			include "view/view-footer.php"; ?>			

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
