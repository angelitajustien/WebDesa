<?php $this->load->view('template/header') ?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
			<div class="panel panel-default">
				<div class="row">
					<h1>Transaksi Berhasil</h1>
					<div class="col-md-6">
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
								<td>Jenis</td>
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
		</div>
	</section>
</section>
<?php $this->load->view('template/footer') ?>