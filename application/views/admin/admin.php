<?php $this->load->view('template/header') ?>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Admin
    </div>
    <br>
	<a href="<?php echo base_url('admin/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap" width="100%">
		<thead>
			<tr>
				<?php foreach ($getData[0] as $key => $value): ?>
					<th><?= $key ?></th>
				<?php endforeach ?>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<?php foreach ($value as $k => $v): ?>
						<td><?= $v ?></td>
					<?php endforeach ?>
					<td>
						<a href="<?php echo base_url('admin/ubah/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('admin/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>

			
		</tbody>
	</table>
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable({
			dom: 'Bfrtip',
			buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
		});
	} );
</script>
<?php $this->load->view('template/footer') ?>