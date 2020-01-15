<!-- Start fact Area -->
<section class="facts-area section-gap">
	<div class="container">
		<div class="row">
			
			<?php foreach($tb_mobil as $u){ ?>

			<div class="col single-fact">
				<h1 class="counter"><?php echo $u->total_mobil ?></h1>
				<p>Total Mobil</p>
			</div>

			<?php } ?>

			<div class="col single-fact">
				<h1 class="counter">6784</h1>
				<p>Pemesanan</p>
			</div>
			<div class="col single-fact">
				<h1 class="counter">1059</h1>
				<p>Proses Pinjam</p>
			</div>	
			
			<?php foreach($tb_detail_transaksi as $u){ ?>

			<div class="col single-fact">
				<h1 class="counter"><?php echo $u->total_transaksi_selesai ?></h1>
				<p>Transaksi Selesai</p>
			</div>

			<?php } ?>

			<?php foreach($tb_transaksi as $u){ ?>

			<div class="col single-fact">
				<h1 class="counter"><?php echo $u->total_transaksi ?></h1>
				<p>Total Transaksi</p>
			</div>

			<?php } ?>										
		</div>
	</div>	
</section>
<!-- end fact Area -->									

<!-- Start reviews Area -->
<section class="reviews-area section-gap" id="review">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text text-center">
				<h1>Beberapa Fitur yang Membuat Kami Unik</h1>
				<p class="mb-10 text-center">
					Yang sangat mencintai sistem ramah lingkungan.
				</p>
			</div>
		</div>					
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Cody Hines</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Chad Herrera</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Andre Gonzalez</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>							
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Jon Banks</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Landon Houston</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Nelle Wade</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>												
		</div>
	</div>	
</section>
<!-- End reviews Area -->