

    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Menu</a>
          </li>
          <li class="breadcrumb-item active"><?= $title; ?></li>
        </ol>

        <!-- Page Content -->
        <h1><?= $title; ?></h1>

        <hr>
        
        <!-- isi data -->

        <div class="row">
  <div class="col-lg-6">
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">
        ','
      </div>'); ?>

      <?= $this->session->flashdata('message'); ?>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Menu Baru</a>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Menu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($menu as $m) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $m['menu'] ?></td>
      <td>
        <a href="" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">hapus</a>

      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach ?>
    
  </tbody>
</table>



    </div>


    </div>

  <!-- isi data-->


       
        


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      
<!-- modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModallabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModallabel">Tambah Menu Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu'); ?>" method="post">
      <div class="modal-body">

        <div class="form-group">
        <input type="text" class="form-control" id="menu" name="menu" placeholder=" Menu name">
         </div>

        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
