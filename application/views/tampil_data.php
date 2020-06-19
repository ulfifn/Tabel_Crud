<?php $this->load->view('komponen/header');

 ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Client</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ID</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Client</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
           
              <thead>
                  <tr>
                      <th>ID </th>
                      <th >Nama </th>
                  </tr>
              </thead>
              <?php
              foreach ($isi as $k0 => $v0) {
                ?>

              <tbody>
                  <tr>
                  <td><?php echo $v0['id'] ?></td>
                  <td><?php echo $v0['nama'] ?></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php echo "ubah/".$v0["id"] ?>">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo "hapus/".$v0["id"] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
              </tbody>
              <?php } ?>
              
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <div class="row">
      <div class="col-12">
        <div class="btn float-right">
          <td>
            <a href='<?php echo "tambah/"?>'><button type="button" class="btn btn-block btn-primary"><i class="fas fa-lg fa-plus"></i> Tambah</button></a>
          </td>
        </div>
      </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->

<table>
  
    
  

</table>

<?php $this->load->view('komponen/footer');

 ?>