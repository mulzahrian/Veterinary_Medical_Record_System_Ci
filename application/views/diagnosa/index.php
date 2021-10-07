<div id="content-wrapper">

      <div class="container-fluid">
            
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Diagnosa</a>
          </li>
          <li class="breadcrumb-item active"><?= $title; ?></li>
        </ol>

        <h1><?= $title; ?></h1>
<div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Hewan.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <hr>

        <div class="row">
  <div class="col-lg-6">
    <?= form_error('diagnosa', '<div class="alert alert-danger" role="alert">
        ','
      </div>'); ?>

      <?= $this->session->flashdata('message'); ?>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDiagnosaModal">Tambah Menu Baru</a>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Diagnosa</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($diagnosa as $d) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $d['diagnosa'] ?></td>
      <td>
        <a href="<?= base_url(); ?>diagnosa/ubah/<?= $d['id']; ?>"
        class="btn btn-warning btn-sm float-center"><i class=" fas fa-pen"></i></a>
        <a href="<?= base_url(); ?>diagnosa/hapus/<?= $d['id']; ?>"
                        class="btn btn-danger btn-sm float-center tombol-hapus"><i class="fas fa-trash-alt"></i></a>

      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach ?>
    
  </tbody>
</table>
    </div>
    </div>
            
      </div>
<div class="modal fade" id="newDiagnosaModal" tabindex="-1" role="dialog" aria-labelledby="newDiagnosaModallabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newDiagnosaModallabel">Tambah Menu Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('diagnosa'); ?>" method="post">
      <div class="modal-body">

        <div class="form-group">
        <input type="text" class="form-control" id="diagnosa" name="diagnosa" placeholder="Diagnosa Penyakit">
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Diagnosa</button>
      </div>
      </form>
    </div>
  </div>
</div>
