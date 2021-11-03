
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
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tahun</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Data Hewan 2019</td>
      <td>
        <a href="<?= base_url(); ?>report/satu" class="btn btn-warning btn-sm float-center"><i class="fas fa-calendar"></i> 2019</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Data Hewan 2018</td>
      <td><a href="<?= base_url(); ?>report/dua" class="btn btn-warning btn-sm float-center"><i class="fas fa-calendar"></i> 2018</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Data Hewan 2017</td>
     <td><a href="<?= base_url(); ?>report/tiga" class="btn btn-warning btn-sm float-center"><i class="fas fa-calendar"></i> 2017</a></td>
    </tr>
  </tbody>
</table>
      </div>
