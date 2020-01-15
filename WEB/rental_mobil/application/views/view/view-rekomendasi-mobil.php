<!-- Start model Area -->
<section class="model-area section-gap" id="cars">
	<div class="container">
		<div class="row d-flex justify-content-center pb-40">
			<div class="col-md-8 pb-40 header-text">
				<h1 class="text-center pb-10">Rekomendasi Mobil Pilihan Untuk Anda</h1>
				<p class="text-center">
					Memberikan opsi yang terbaik untuk anda dan keluarga, teman maupun pasangan.
				</p>
			</div>
		</div>				
		<div class="active-model-carusel">

			<?php foreach($tb_gallery_mobil as $u){ ?>

			<div class="row align-items-center single-model item">
				<div class="col-lg-6 model-left">
					<div class="title justify-content-between d-flex">
						<h4 class="mt-20"><?php echo $u->NAMA_MOBIL ?></h4>
						<h2>Rp<?php echo $u->HARGA_MOBIL ?><span>/hari</span></h2>
					</div>
					<p>
						<?php
						$kata = $u->DESKRIPSI_MOBIL;
						$kalimat = substr($kata,0,200);
						echo $kalimat;?>.....
					</p>
					<p>
						Merek       : <?php echo $u->MERK_MOBIL ?> <br>
						Warna       : <?php echo $u->WARNA_MOBIL ?> <br>
						Tahun    	: <?php echo $u->TAHUN_MOBIL ?> <br>
						Kapasitas   : <?php echo $u->KAPASITAS_MOBIL ?>
					</p>
					<a class="text-uppercase primary-btn" href="#">Lihat Detail</a>
				</div>
				<div class="col-lg-6 model-right">
					<img class="img-fluid" src="<?php echo base_url();?>upload/mobil/<?php echo $u->IMAGE ?>" alt="">
				</div>
			</div>

			<?php } ?>											
		</div>
	</div>	
</section>
<!-- End model Area -->