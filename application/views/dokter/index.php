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
<?= $this->session->flashdata('message'); ?>
      <div class="row mt-3">
        <div class="col-md-6">
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPeternakModal">Tambah data Baru</a>
        </div>
    </div>
    <!-- end tambah data-->

    <!-- form search -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Peternak.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
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
      <th scope="col">ID Peternak</th>
      <th scope="col">Nama</th>
      <th scope="col">Daerah</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($id_peternak as $ip) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $ip['id_peternak'] ?></td>
      <td><?= $ip['nama'] ?></td>
      <td><?= $ip['daerah'] ?></td>
      <td><?= $ip['pekerjaan'] ?></td>
      <td><?= $ip['alamat'] ?></td>
      <td>

        <a href="<?= base_url(); ?>dokter/hapus/<?= $ip['id']; ?>"
        class="btn btn-danger btn-sm float-center tombol-hapus"><i class=" fas fa-trash"></i></a>

        <a href="<?= base_url(); ?>dokter/ubah/<?= $ip['id']; ?>"
        class="btn btn-warning btn-sm float-center"><i class=" fas fa-pen"></i></a>

        <a href="<?= base_url(); ?>dokter/test/<?= $ip['id_peternak']; ?>"
        class="btn btn-info btn-sm float-center"><i class="fas fa-hippo"></i></a>


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
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->



<!--pop up form-->

<div class="modal fade" id="newPeternakModal" tabindex="-1" role="dialog" aria-labelledby="newPeternakModallabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newPeternakModallabel">Tambah Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('dokter'); ?>" method="post">
      <div class="modal-body">

        <!-- sub menu input -->

        <div class="form-group">
        <input type="text" class="form-control" id="id_peternak" name="id_peternak" placeholder=" Peternak ID">
         </div>

         <div class="form-group">
        <input type="text" class="form-control" id="nama" name="nama" placeholder=" Nama">
         </div>


          <div class="form-group">
          <select class="form-control" name="daerah" id="daerah" placeholder=" Nama" >
          <option value="Daerah">Daerah</option>
          <option value="Kec.Bunga Raya">Kec.Bunga Raya</option>
          <option value="Kec.Dayun">Kec.Dayun</option>
          <option value="Kec.Kandis">Kec.Kandis</option>
          <option value="Kec.Kerinci Kanan">Kec.Kerinci Kanan</option>
          <option value="Kec.Koto Gasip">Kec.Koto Gasip</option>
          <option value="Kec.Siak">Kec.Siak</option>
          <option value="Kec.Sabak Auh">Kec.Sabak Auh</option>
          <option value="Kec.Tualang">Kec.Tualang</option>
          <option value="Kec.Minas">Kec.Minas</option>
          <option value="Kec.Sungai Apit">Kec.Sungai Apit</option>
          <option value="Kec.Pusako">Kec.Pusako</option>
          <option value="Kec.Lubuk Dalam">Kec.Lubuk Dalam</option>
          <option value="Kec.Sungai Mandau">Kec.Sungai Mandau</option>
          <option value="Kec.Mempura">Kec.Mempura</option>
         </div>

         <div class="form-group">
        <input type="hidden" class="form-control" >
         </div>


         <div class="form-group">
        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder=" Pekerjaan">
         </div>

         <div class="form-group">
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder=" Alamat">
         </div>




        <!-- end of submenu input -->

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

      