<?php $this->load->view('template/header') ?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
			<div class="panel panel-default">
				<div class="panel-heading">
					Tambah Transaksi
				</div>
				<br>
				<?php echo form_open("") ?>
				
				<div class="form-group row">
					<label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
					<div class="col-sm-10">
						<input type="text" name="nama_barang" class="form-control" id="nama_barang" value="" placeholder="nama_barang">
						<?php echo form_error('nama_barang') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="deskripsi_barang" class="col-sm-2 col-form-label">Deskripsi Barang</label>
					<div class="col-sm-10">
						<input type="text" name="deskripsi_barang" class="form-control" id="deskripsi_barang" value="" placeholder="deskripsi_barang">
						<?php echo form_error('deskripsi_barang') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="berat" class="col-sm-2 col-form-label">Berat</label>
					<div class="col-sm-10">
						<input type="number" name="berat" class="form-control" id="berat" value="" placeholder="berat">
						<?php echo form_error('berat') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="col-sm-2"></label>
					<input type="submit" class="btn btn-primary" value="Tambah">
				</div>
				<?php echo form_close(); ?>
			</main>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#example').DataTable();
				} );
			</script>
<?php $this->load->view('template/footer') ?>