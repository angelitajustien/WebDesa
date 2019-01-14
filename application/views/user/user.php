<?php $this->load->view('template/header') ?>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     User
    </div>
    <div class="panel-heading">
    	<?php $levelUser = $this->session->userdata('levelUser');
         if ($levelUser['level'] == 1) { ?>
    	<a href="<?php echo base_url('user/registerKaryawan') ?>" class="btn btn-primary mb-3">Tambah Karyawan</a>
    	<a href="<?php echo base_url('user/registerAdmin') ?>" class="btn btn-primary mb-3">Tambah Admin</a>
    	<?php } ?>
    </div>
    <br>
	<!-- File Header -->
	<table id="example" class="table table-striped table-bordered" width="100%" >
		<thead>
			<tr>
				<th>ID</th>
				<?php $levelUser = $this->session->userdata('levelUser');
         		if ($levelUser['level'] == 1) { ?>
				<th>Level</th>
				<?php } ?>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kode Pos</th>
				<th>Email</th>
				<th>No Telepon</th>
				<th>Tanggal Registrasi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['user_id'] ?></td>
					<?php $levelUser = $this->session->userdata('levelUser');
         			if ($levelUser['level'] == 1) { ?>
					<td><?php echo $value['level'] ?></td>
					<?php } ?>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['alamat']?></td>
					<td><?php echo $value['kodepos']?></td>
					<td><?php echo $value['email']?></td>
					<td><?php echo $value['noTelepon']?></td>
					<td><?php echo $value['register_date']?></td>
					<td>
					<a href="<?php echo base_url('user/hapus/'.$value['user_id']) ?>" class="btn btn-sm btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<!-- File Footer -->
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable({
			dom: 'Bfrtip',
			buttons: ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
		});
	} );
</script>
<?php $this->load->view('template/footer') ?>