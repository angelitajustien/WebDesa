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
				<h2 class="section_title">Transaksi Berhasil</h2>
				<h1 class="section_title">Pengiriman Anda Segera Di Proses</h1>
			</div>
		</div>
		<div class="row offers_items text-center">
			<table class="table">
							<tr>
								<td>ID Transaksi</td>
								<td><?php echo $transaksi->id_transaksi ?></td>
							</tr>
							<tr>
								<td>Tanggal Transaksi</td>
								<td><?php echo $transaksi->tanggal_transaksi ?></td>
							</tr>
							<tr>
								<td>Alamat Rinci</td>
								<td><?php echo $transaksi->alamat_rinci ?></td>
							</tr>
							<tr>
								<td>Penerima</td>
								<td><?php echo $transaksi->penerima ?></td>
							</tr>
							<tr>
								<td>Telepon Penerima</td>
								<td><?php echo $transaksi->telepon_penerima ?></td>
							</tr>
							<tr>
								<td>Nama Barang</td>
								<td><?php echo $transaksi->nama_barang ?></td>
							</tr>
							<tr>
								<td>Berat</td>
								<td><?php echo $transaksi->berat ?></td>
							</tr>
							<tr>
								<td>Nama Pelanggan</td>
								<td><?php echo $transaksi->nama_pelanggan ?></td>
							</tr>
							<tr>
								<td>Nama Jenis</td>
								<td><?php echo $transaksi->nama_jenis ?></td>
							</tr>
							<tr>
								<td>Harga Per Kilo</td>
								<td><?php echo $transaksi->hargaperkilo ?></td>
							</tr>
							<tr>
								<td></td>
								<th><?php echo $transaksi->hargaperkilo*$transaksi->berat ?></th>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<a href="<?php 	echo site_url('user/logoutTransaction') ?>" class="btn btn-info btn-block" role="button">Selesai</a>
</section>
<?php $this->load->view('template/footerHome') ?>