<?php $this->load->view('template/header') ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Pelanggan
    </div>
    <br>
    <div>
        <table class="table">
            <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
            <tr><td>Jenis Kelamin</td><td><?php echo $JenisKelamin; ?></td></tr>
            <tr><td>Alamat</td><td><?php echo $Alamat; ?></td></tr>
            <tr><td>No Hp</td><td><?php echo $NoHp; ?></td></tr>
            <tr><td>Email</td><td><?php echo $Email; ?></td></tr>
            <tr><td>Username</td><td><?php echo $Username; ?></td></tr>
            <tr><td>Password</td><td><?php echo $Password; ?></td></tr>
        </table>
        <div class="text-right">
            <tr><td></td><td><a href="<?php echo base_url('pelanggan') ?>" class="btn btn-danger">Cancel</a></td></tr>
        </div>
    </div>
  </div>
</div>
<!--main content end-->
<?php $this->load->view('template/footer'); ?>