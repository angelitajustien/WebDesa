<?php $this->load->view('template/headerHome') ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
			<div class="panel panel-default">
				<div class="panel-heading">
				</div>
				<br>
				<?php echo form_open("") ?>
				<div class="form-group row">
					<label for="id_jenis" class="col-sm-2 col-form-label">Jenis</label>
					<div class="col-sm-10">
						<?php $levelUser = $this->session->userdata('levelUser');
						if ($levelUser['level'] == 3) { ?>
						<select name="id_jenis" class="form-control">
							<?php foreach ($jenis as $key => $value): ?>
								<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
							<?php endforeach ?>
						</select>
					<?php } else { ?>
						<select name="id_jenis" class="form-control">
								<option value="2">Reguler</option>
						</select>
					<?php } ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="id_pelanggan" class="col-sm-2 col-form-label">Pelanggan</label>
					<div class="col-sm-10">
						<select name="id_pelanggan" class="form-control">
							<?php foreach ($pelanggan as $key => $value): ?>
								<option value="<?php echo $value->id_pelanggan ?>"><?php echo $value->Nama ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="alamat_rinci" class="col-sm-2 col-form-label">Alamat Rinci</label>
					<div class="col-sm-10">
						<input type="text" name="alamat_rinci" class="form-control" id="alamat_rinci" value="" placeholder="Alamat Rinci">
						<?php echo form_error('alamat_rinci') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="penerima" class="col-sm-2 col-form-label">Penerima</label>
					<div class="col-sm-10">
						<input type="text" name="penerima" class="form-control" id="penerima" value="" placeholder="Penerima">
						<?php echo form_error('penerima') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="telepon_penerima" class="col-sm-2 col-form-label">Telepon Penerima</label>
					<div class="col-sm-10">
						<input type="number" name="telepon_penerima" class="form-control" id="telepon_penerima" value="" placeholder="Telepon Penerima">
						<?php echo form_error('telepon_penerima') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="col-sm-2"></label>
					<input type="submit" class="btn btn-primary" value="Tambah">
				</div>
				<?php echo form_close(); ?>
			</main>
<?php $this->load->view('template/footerHome') ?>