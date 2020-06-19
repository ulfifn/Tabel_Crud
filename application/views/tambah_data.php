<?php $this->load->view('komponen/header');

 ?>
 <?php echo "<h3>".$judul."</h3>"; ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form role="form" method="post" action="<?php echo base_url('crud/simpan')?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" name="id" class="form-control" placeholder="ID">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
              </div>
              <div class="card-body pad table-responsive">
              	<div class="col-md-2">
              		<td>
              			<button input type="submit" name="simpan" value="Simpan" class="btn btn-block btn-primary">Tambah</button>
              		</td>
              	</div>
              </div>
          </form>
      </div>
  </div>
</div>
</div>
</section>
</div>


<?php $this->load->view('komponen/footer');

 ?>








	ID :
	<>
	Nama :
	<input >

  <>
</form>
