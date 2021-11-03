
    <div id="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"></li>
        </ol>
        <h1><?= $title; ?></h1>
        <hr>
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
     <div class="col-md">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
       <th scope="col">Nama Peternak</th>
       <th scope="col">Pekerjaan</th>
      <th scope="col">ID Hewan</th>
      <th scope="col">Jenis Hewan</th>
      <th scope="col">Diagnosa</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($db_rekam_medis as $dr) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $dr['nama'] ?></td>
      <td><?= $dr['pekerjaan'] ?></td>
      <td><?= $dr['id_hewan'] ?></td>
      <td><?= $dr['jenis_hewan'] ?></td> 
      <td><?= $dr['diagnosa'] ?></td>
      <td>
        <a href="<?= base_url(); ?>report/detail/<?= $dr['id']; ?>"
                        class="btn btn-primary btn-sm float-center"><i class="fas fa-eye"></i></a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach ?>
  </tbody>
</table>
      </div>
