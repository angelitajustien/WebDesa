<?php $this->load->view('template/header') ?>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Data Karyawan
    </div>
    <div class="panel-heading">
    	<a href="<?php echo base_url('karyawan/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>
    </div>
    <br>
	<!-- File Header -->
	<table id="example" class="table table-striped table-bordered" width="100%" >
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Pendidikan</th>
				<th>Jenis Kelamin</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['id_karyawan'] ?></td>
					<td><?php echo $value['Nama'] ?></td>
					<td><?php echo $value['Pendidikan'] ?></td>
					<td><?php echo $value['JenisKelamin'] ?></td>
					<td><?php echo $value['image']?></td>
					<td>
						<!-- --AKSI-- -->
						 <a href="<?php echo base_url('karyawan/read/'.$value['id_karyawan']) ?>" class="btn btn-sm btn-info">Read</a>
						<a href="<?php echo base_url('karyawan/ubah/'.$value['id_karyawan']) ?>" class="btn btn-sm btn-success">Update</a>
						<a href="<?php echo base_url('karyawan/hapus/'.$value['id_karyawan']) ?>" class="btn btn-sm btn-danger">Delete</a>
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