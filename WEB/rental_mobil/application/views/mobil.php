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
		<title>Rental Mobil | Mobil</title>

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
							Mobil			
						</h1>	
						<p class="text-white link-nav"><a href="<?php echo base_url() ?>index.php/home">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url() ?>index.php/cars"> Mobil</a></p>
					</div>											
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<!-- Start team Area -->
		<section class="team-area section-gap team-page-teams" id="team">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Pilih Desain Mobil yang Anda Sukai</h1>
							<p>Semua mobil yang siap untuk digunakan kapanpun, dimanapun dan kemanapun.</p>
						</div>
					</div>
				</div>						
				<div class="row justify-content-center d-flex align-items-center">

					<?php foreach($tb_gallery_mobil as $u){ ?>

					<div class="col-md-3 single-team">
					    <div class="thumb">
					        <img class="img-fluid" src="<?php echo base_url();?>upload/mobil/<?php echo $u->IMAGE ?>" alt="">
					        <div class="align-items-center justify-content-center d-flex">
								<a href="#"><i class="fa fa-check"></i></a>
					        </div>
					    </div>
					    <div class="meta-text mt-30 text-center">
						    <h4><?php echo $u->NAMA_MOBIL ?></h4>
						    <p><?php echo $u->MERK_MOBIL ?>, Warna <?php echo $u->WARNA_MOBIL ?>, Tahun <?php echo $u->TAHUN_MOBIL ?>, Kapasitas <?php echo $u->KAPASITAS_MOBIL ?> Orang</p>									    	
					    </div>
					</div>

					<?php } ?>
															
				</div>
			</div>	
		</section>
		<!-- End team Area -->								

		<?php 
			include "view/view-rekomendasi-mobil.php";
			include "view/view-anggota.php";
			include "view/view-layanan.php";
			include "view/view-footer.php"; ?>
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
