<?php $this->load->view('template/header') ?>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Tambah
    </div>
    <br>
	<form action="<?php echo base_url('admin/tambah'); ?>" method="post">
		<div class="form-group row">
			<label for="username" class="col-sm-2 col-form-label">username</label>
			<div class="col-sm-10">
				<input type="text" name="username" class="form-control" id="username" value="" placeholder="username">
				<?php echo form_error('username') ?>
			</div>
		</div>
		<div class="form-group row">
			<label for="password" class="col-sm-2 col-form-label">password</label>
			<div class="col-sm-10">
				<input type="text" name="password" class="form-control" id="password" value="" placeholder="password">
				<?php echo form_error('password') ?>
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="Tambah">
		</div>
	</form>
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('template/footer') ?>