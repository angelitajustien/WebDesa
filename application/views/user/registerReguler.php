<?php $this->load->view('template/headerHome'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php echo form_open_multipart('user/registerReguler'); ?>
<div class="card">
		<div class="card-header" style="background-color: #b600ff;color:white">Register Pelanggan Reguler</div>
</div>
<?php echo validation_errors() ?>
<div class="form-group row">
	<label for="Nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
	<div class="col-sm-10">
		<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
		<?php echo form_error('nama') ?> <!-- menampilkan error saat rule Nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="Email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
	<input type="text" name="email" class="form-control" placeholder="Email">
		<?php echo form_error('email') ?> <!-- menampilkan error saat rule JenisKelamin gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="noTelepon" class="col-sm-2 col-form-label">No Telepon</label>
	<div class="col-sm-10">
	<input type="number" name="noTelepon" class="form-control" placeholder="No Telepon">
		<?php echo form_error('noTelepon') ?> <!-- menampilkan error saat rule JenisKelamin gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
	<div class="col-sm-10">
	<input type="text" name="alamat" class="form-control" placeholder="Alamat">
		<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule Alamat gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="Kode Pos" class="col-sm-2 col-form-label">Kode Pos</label>
	<div class="col-sm-10">
	<input type="number" name="kodepos" class="form-control" placeholder="Kode Pos">
		<?php echo form_error('kodepos') ?> <!-- menampilkan error saat rule NoHp gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="Username" class="col-sm-2 col-form-label">Username</label>
	<div class="col-sm-10">
		<input type="text" name="username" class="form-control" placeholder="Username">
		<?php echo form_error('username') ?> <!-- menampilkan error saat rule Email gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="Password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-sm-10">
		<input type="text" name="password" class="form-control" placeholder="Password">
		<?php echo form_error('password') ?> <!-- menampilkan error saat rule Username gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="Password" class="col-sm-2 col-form-label">Ulangi Password</label>
	<div class="col-sm-10">
	<input type="text" name="password2" class="form-control" placeholder="Konfirmasi Password">
		<?php echo form_error('password2') ?> <!-- menampilkan error saat rule Password gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="col-sm-2"></label>
	<input type="submit" class="btn btn-primary" value="Tambah">
	<a href="<?php 	echo site_url('user/logoutTransaction') ?>" class="btn btn-danger">Cancel</a>
</div>
</form>
<!-- load footer -->


</main>
<?php $this->load->view('template/footerHome'); ?>