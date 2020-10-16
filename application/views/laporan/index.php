<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html"><?= $title; ?></a>
          </li>
          <li class="breadcrumb-item active"><?= $title; ?></li>
        </ol>

        <!-- Page Content -->
        <h1><?= $title; ?></h1>
        <hr>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>

      <?php endif; ?>

      <!--tambah data mahasiswa-->

    <!-- end tambah data-->

    <!-- form search -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Hewan.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>

            </form>

        </div>
        <hr>

  <div>

    <a href="<?= base_url(); ?>laporan/excel" class="btn btn-success"><i class="fa fa-clipboard"></i>  Excel File</a>
    </div>
    </div>

    </div>

<hr>
    <!-- end form search -->

    <!-- isi data-->
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
       

      
      <a href="<?= base_url(); ?>laporan/hapus/<?= $dr['id']; ?>"
                        class="btn btn-danger btn-sm float-center tombol-hapus"><i class="fas fa-trash-alt"></i></a>
        <a href="<?= base_url(); ?>laporan/detail/<?= $dr['id']; ?>"
                        class="btn btn-primary btn-sm float-center"><i class="fas fa-eye"></i></a>

        <a href="<?= base_url(); ?>laporan/ubah/<?= $dr['id']; ?>"
        class="btn btn-warning btn-sm float-center"><i class=" fas fa-pen"></i></a>

        <a href="<?= base_url(); ?>laporan/pdf/<?= $dr['id']; ?>"
        class="btn btn-info btn-sm float-center"><i class=" fas fa-print"></i></a>

       

        
        

      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach ?>
    
  </tbody>
</table>


    <!-- end isi data-->


        <!-- card extensi foto dari boostrap dokumentasi -->




        <!-- card end -->
        


      </div>