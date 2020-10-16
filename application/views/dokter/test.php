<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html"></a>
          </li>
          <li class="breadcrumb-item active"></li>
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
       <th scope="col">ID Hewan</th>
       <th scope="col">Jenis Hewan</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Umur</th>
      <th scope="col">ID Peternak</th>
      <th scope="col">Nama</th>
      <th scope="col">Daerah</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($coba as $dr) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $dr['id_hewan'] ?></td>
      <td><?= $dr['jenis_hewan'] ?></td>
      <td><?= $dr['jenis_kelamin'] ?></td>
      <td><?= $dr['umur'] ?></td> 
      <td><?= $dr['id_peternak'] ?></td>
      <td><?= $dr['nama'] ?></td>
      <td><?= $dr['daerah'] ?></td>
      
    </tr>
    <?php $i++; ?>
    <?php endforeach ?>
    
  </tbody>
</table>


    <!-- end isi data-->


        <!-- card extensi foto dari boostrap dokumentasi -->




        <!-- card end -->
        


      </div>