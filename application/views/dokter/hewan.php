<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
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
<?= $this->session->flashdata('message'); ?>
      <div class="row mt-3">
        <div class="col-md-6">
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newHewanModal">Tambah data Baru</a>
        </div>
    </div>
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
      <th scope="col">ID Hewan</th>
      <th scope="col">Jenis Hewan</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Umur</th>
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
    <?php foreach($id_hewan as $ih) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $ih['id_hewan'] ?></td>
      <td><?= $ih['jenis_hewan'] ?></td>
      <td><?= $ih['jenis_kelamin'] ?></td>
      <td><?= $ih['umur'] ?></td>
      <td><?= $ih['id_peternak'] ?></td>
      <td><?= $ih['nama'] ?></td>
      <td><?= $ih['daerah'] ?></td>
      <td><?= $ih['pekerjaan'] ?></td>
      <td><?= $ih['alamat'] ?></td>
      <td>
        
        <a href="<?= base_url(); ?>dokter/hapus_hewan/<?= $ih['id']; ?>"
        class="btn btn-danger btn-sm float-center tombol-hapus"><i class=" fas fa-trash"></i></a>
        
        <a href="<?= base_url(); ?>dokter/ubahhewan/<?= $ih['id']; ?>"
        class="btn btn-warning btn-sm float-center"><i class=" fas fa-pen"></i></a>
        
        <a href="<?= base_url(); ?>dokter/animtest/<?= $ih['id_hewan']; ?>"
        class="btn btn-info btn-sm float-center"><i class=" fas fa-pen"></i></a>
        

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
<script src=<?php echo base_url(); ?>assets/ajax.js></script>
<div class="modal fade" id="newHewanModal" tabindex="-1" role="dialog" aria-labelledby="newHewanModallabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newHewanModallabel">Tambah Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('dokter/hewan'); ?>" method="post">
      <div class="modal-body">

        <!-- sub menu input -->

        <div class="form-group">
        <input type="text" list="data_hewan" class="form-control" id="id_peternak" name="id_peternak"  placeholder=" Peternak" onkeyup="isi_otomatis()" >
         </div>

         <div class="form-group">
        <input type="text" class="form-control" id="nama" name="nama" readonly="" placeholder=" Nama ">
         </div>


          <div class="form-group">
        <input type="text" class="form-control" id="daerah" name="daerah"readonly="" placeholder=" Daerah" >
         </div>


         <div class="form-group">
        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" readonly="" placeholder=" Pekerjaan" >
         </div>

         <div class="form-group">
        <input type="text" class="form-control" id="alamat" name="alamat" readonly="" placeholder=" Alamat" >
         </div>

         <div class="form-group">
        <input type="text" class="form-control" id="id_hewan" name="id_hewan" placeholder=" ID Hewan" >
         </div>

         <!--div class="form-group">
        <input type="text" class="form-control" id="id_hewan2" name="id_hewan2" placeholder=" *Confirm ID Hewan" >
         </div-->

         <div class="form-group">
        <select class="form-control" name="jenis_hewan" id="jenis_hewan">
                <option value="Jenis Hewan">Jenis Hewan</option>
                <option value="Sapi">Sapi</option>
                <option value="Kambing">Kambing</option>
                </select>
         </div>



         <div class="form-group">
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                <option value="Jenis Kelamin">Jenis Kelamin</option>
                <option value="Jantan">Jantan</option>
                <option value="Betina">Betina</option>
                </select>
         </div>



         <div class="form-group">
        <input type="text" class="form-control" id="umur" name="umur" placeholder=" Umur"  >
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


<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
                           function isi_otomatis() {
                                    var id_peternak = $("#id_peternak").val();
                                    $.ajax({
                                        url: "<?php echo base_url() ?>index.php/Dokter/form_penjualan_autocomplit",
                                        type: "GET",
                                        data: "id_peternak=" + id_peternak,
                                        success: function (data) {
                                            var json = data,
                                                    obj = JSON.parse(json);
                                            $("#nama").val(obj.nama);
                                            $("#daerah").val(obj.daerah);
                                            $("#no_telpon").val(obj.no_telpon);
                                            $("#pekerjaan").val(obj.pekerjaan);
                                            $("#alamat").val(obj.alamat);

                                        }
                                    });
                                }
</script>
      