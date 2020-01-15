	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/users/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Rental Mobil</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/nice-select.css">					
			<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/main.css">
		</head>
		<body>

			<?php include "view/view-header.php" ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">Best Car Rental in Yogyakarta</h6>
							<h1 class="text-white text-uppercase">
								Temukan Kenyamananmu Disini				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Berlibur dengan keluarga, teman maupun kekasih hati. Dengan menggunakan atau berlangan di <b>Rental Mobil Jogja</b>, dengan pelayanan, harga dan kualitas yang sanggat <b>profesional</b>.
							</p>
							<a href="<?php echo base_url() ?>index.php/cars" class="primary-btn text-uppercase">Rental Mobil Sekarang</a>
						</div>
						<div class="col-lg-5 col-md-6 header-right">
							<h4 class="text-white pb-30">Registrasi dulu sebelum menjelajah!</h4>
							<form class="form" role="form" autocomplete="off">							    
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="NAME" placeholder="Masukan Username">
							    	<input class="form-control txt-field" type="password" name="PASSWORD" placeholder="Masukan Password">
							    </div>
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Login</button>
							            <p class="text text-center text-white">Belum memiliki Akun? Langsung Daftar aja!</p>
							            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Registrasi</button>
							        </div>
							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<?php 
				include "view/view-layanan.php";
				include "view/view-layanan-jaringan.php";
				include "view/view-rekomendasi-mobil.php"; 
				include "view/view-statistik.php";
				include "view/view-anggota.php";  ?>			

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Terbaru Dari Blog Kami</h1>
								<p>Anda juga dapat menemukan berbagai warna, tergantung pada sebagian besar, dan melakukan hal-hal lain selain itu untuk melakukannya dan juga untuk mempelajari lebih lanjut.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url();?>assets/users/img/b1.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url();?>assets/users/img/b2.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url();?>assets/users/img/b3.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url();?>assets/users/img/b4.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->


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



