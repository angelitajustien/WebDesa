<?php $this->load->view('template/headerHome') ?>
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
				<h2 class="section_title">Tarif Kiriman Reguler</h2>
			</div>
		</div>
		<div class="row offers_items text-center">
			<table class="table">
				<tr>
					<td><h1>Rp : <?php echo $hasil; ?></h1></td>
				</tr>		
			</table>
		</div>
				</div>
			</div>
			<a href="<?php 	echo site_url('user/logoutTransaction') ?>" class="btn btn-info btn-block" role="button">Selesai</a>
</section>
<?php $this->load->view('template/footerHome') ?>