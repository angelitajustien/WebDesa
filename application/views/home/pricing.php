<?php $this->load->view('template/headerHome'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="offers">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">PRICING</h2>
			</div>
		</div>
		<div class="row offers_items text-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header" style="background-color: #f2c318;color:white">
						<h3 class="card-title">Gold</h3>
					</div>
					<div class="card-body">
						<h2>Rp 99999/bulan</h2>
					</div>
					<div class="card-body">
						<h4>Pengiriman Kilat</h4>
					</div>
					<div class="card-body">
						<h4>Pengiriman Reguler</h4>
					</div>
					<div class="card-body">
						<h4>Target Pengiriman 24 Jam</h4>
					</div>
					<div class="card-body">
						<a href="<?php echo base_url('user/register/4'); ?>">Daftar</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card" style="height: 100%;">
					<div class="card-header" style="background-color: #b600ff;color:white">
						<h3 class="card-title">Reguler</h3>
					</div>
					<div class="card-body">
						<h3>Rp 10000/bulan</h3>
					</div>
					<div class="card-body">
						<h4>Pengiriman Reguler</h4>
					</div>
					<div class="card-body">
						<h4>Target Pengiriman 3 Sampai 4 Hari</h4>
					</div>
					<div class="card-header" >
						<a href="<?php echo base_url('user/registerReguler'); ?>">Daftar</a>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<?php $this->load->view('template/footerHome'); ?>