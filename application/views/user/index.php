
    <div id="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html"><?= $title; ?></a>
          </li>
          <li class="breadcrumb-item active"><?= $title; ?></li>
        </ol>
        <h1><?= $title; ?></h1>
        <hr>
        <div class="row">
        <div class="col-lg-6">
          <?= $this->session->flashdata('message'); ?>
        </div>
      </div>
        <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
      <div class="col-md-4">
      <img src="<?= base_url('assets/img/profile/') .
      $db_user['gambar']; ?>" class="card-img" >
      </div>
      <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $db_user['nama']; ?></h5>
        <p class="card-text"><?= $db_user['email']; ?></p>
        <p class="card-text"><small class="text-muted">Di buat pada : <?= date('d F Y', $db_user['tanggal_pembuat']); ?></small></p>
      </div>
       </div>
      </div>
      </div>
      </div>
