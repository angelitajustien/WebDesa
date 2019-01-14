<?php $this->load->view('template/header') ?>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Pelanggan
    </div>
    <br>
	<a href="<?php echo base_url('pelanggan/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table id="example" class="table table-striped table-bordered" width="100%" >
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>ID</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['id_pelanggan'] ?></td>
					<td><?php echo $value['Nama'] ?></td>
					<td><?php echo $value['JenisKelamin'] ?></td>
					<td><?php echo $value['image']?></td>
					<td>
						<!-- --AKSI-- -->
<!-- 						<a href="<?php echo base_url('pelanggan/read/'.$value['id_pelanggan']) ?>" class="btn btn-sm btn-info">Read</a> -->
						<a href="<?php echo base_url('pelanggan/ubah/'.$value['id_pelanggan']) ?>" class="btn btn-sm btn-success">Update</a>
						<a href="<?php echo base_url('pelanggan/hapus/'.$value['id_pelanggan']) ?>" class="btn btn-sm btn-danger">Delete</a>
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