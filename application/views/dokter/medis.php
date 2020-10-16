<script src=<?php echo base_url(); ?>assets/ajax.js></script>




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
   
    <!-- end form search -->

    <!-- isi data-->
    <div class="col-md-8">

       <div class="card">
                <div class="card-header">
                    Form Rekam Medis
                </div>
                <div class="card-body">
        <form action="" method="post">
                  


        <!--div class="form-group">
            <b><label>Nama</label></b>
            <?php echo form_open('dokter/cari') ?>
        <input type="text" list="data_hewan" class="form-control" id="nama" name="nama"        onkeyup="isi_otomatis1()" placeholder=" Masukkan nama peternak" >
        
         </div-->


         <!--div class="form-group">
          <label>Cari ID Hewan</label>
          <input type="text" name="id_hewan2"  id="id_hewan2" onkeyup="isi_otomatis2()" class="form-control" placeholder="cari id" >
          </div-->

          <!--div class="form-group">
        <b><label>ID Hewan</label></b>
          <select type="" name="id_hewan" id="id_hewan" onkeyup="isi_otomatis1()" class="form-control">
          <option value="" >Select ID Hewan</option>
          <?php foreach ($id_hewan as $ih) : ?>
          <option value="<?= $ih['id_hewan']; ?>"><?= $ih['id_hewan']; ?></option>
          <?php endforeach; ?>
          </select>
          </div-->

          <!-- COBA -->

          

          <div class="form-group">
          <label>ID Hewan</label>
          <?php echo cmb_dinamis('id_hewan','db_hewan','id_hewan','id_hewan',null,"id='id_hewan' onChange='isi_otomatis1()'") ?>
            </div>

          <!-- END OF COBA -->

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" readonly=""  placeholder="Nama Peternak">
            </div>


          <div class="form-group">
            <label>Jenis Hewan</label>
            <input type="text" name="jenis_hewan" id="jenis_hewan" class="form-control" readonly=""  placeholder="Jenis Hewan">
            </div>


            <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" readonly=""  placeholder="Jenis Kelamin">
            </div>

            <div class="form-group">
            <label>Umur</label>
            <input type="text" name="umur" id="umur" class="form-control" readonly=""  placeholder="Umur">
            </div>

            <div class="form-group">
            <label>ID Peternak</label>
            <input type="text" name="id_peternak" id="id_peternak" class="form-control" readonly=""  placeholder="ID Peternak">
            </div>

            

            <div class="form-group">
            <label>Daerah</label>
            <input type="text" name="daerah" id="daerah" class="form-control" readonly=""  placeholder="Daerah">
            </div>

            <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" readonly=""  placeholder="Pekerjaan">
            </div>


            <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" readonly=""  placeholder="Alamat">
            </div>

          <!--text area-->
          <div class="form-group">
            <label for="gejala">Gejala Klinis</label>
            <textarea class="form-control" id="gejala" name="gejala" rows="3"></textarea>
          </div>

          <!--end text area-->

              <hr>

          <div class="form-group">
            <label>Diagnosa</label>
          <select type="" name="diagnosa" id="diagnosa" class="form-control">
          <option value="" >Select Data Diagnosa</option>
          <?php foreach ($diagnosa as $d) : ?>
          <option value="<?= $d['diagnosa']; ?>"><?= $d['diagnosa']; ?></option>
          <?php endforeach; ?>
          </select>
          </div>
          

          <!--colapese-->

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Jika Diagnosa Lebih Dari Satu Pilih ini</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <div class="form-group">
          <label>Diagnosa 2</label>
          <select type="" name="diagnosa1" id="diagnosa1" class="form-control">
          <option value="" >Select Data Diagnosa</option>
          <?php foreach ($diagnosa as $d) : ?>
          <option value="<?= $d['diagnosa']; ?>"><?= $d['diagnosa']; ?></option>
          <?php endforeach; ?>
          </select>
          </div>
      </div>

      </div>
    </div>
  </div>
</div>

          <!--end colapese-->


          <div class="form-group">
            <label>Vaksin</label>
          <select type="" name="vaksin" id="vaksin" class="form-control">
          <option value="" >Select Data Vaksin</option>
          <?php foreach ($vaksin as $v) : ?>
          <option value="<?= $v['vaksin']; ?>"><?= $v['vaksin']; ?></option>
          <?php endforeach; ?>
          </select>
          </div>
<!--colapes vaksin-->

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multivaksin" role="button" aria-expanded="false" aria-controls="multivaksin">Jika Vaksin Lebih Dari Satu Pilih ini</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multivaksin">
      <div class="card card-body">
        <div class="form-group">
            <label>Vaksin</label>
          <select type="" name="vaksin1" id="vaksin1" class="form-control">
          <option value="" >Select Data Vaksin</option>
          <?php foreach ($vaksin as $v) : ?>
          <option value="<?= $v['vaksin']; ?>"><?= $v['vaksin']; ?></option>
          <?php endforeach; ?>
          </select>
          </div>

      
      </div>
    </div>
  </div>
</div>


<!--end colapese vaksin -->

          <div class="form-group">
          <label for="Tanggal"> Tanggal Pemeriksaan </label>
          <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Pilih Tanggal Pemeriksaan">
         </div>

          <!--div class="form-group">
            <label>Tanggal Pemeriksaan</label>
            <input type="text" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal Pemeriksaan">
            </div-->


          <div class="form-group">
              <label for="tahun">Tahun</label>
              <select class="form-control" name="tahun" id="tahun">
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                </select>

               </div>






         

         

         


        

                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Record Data</button>
                    </form>
                </div>
            </div>

    

    <!-- end isi data-->


        <!-- card extensi foto dari boostrap dokumentasi -->




        <!-- card end -->
        




<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">


                           
                                function isi_otomatis1() {
                                    var id_hewan = $("#id_hewan").val();
                                    $.ajax({
                                        url: "<?php echo base_url() ?>index.php/Dokter/form_penjualan1_autocomplit",
                                        type: "GET",
                                        data: "id_hewan=" + id_hewan,
                                        success: function (data) {
                                            var json = data,
                                                    obj = JSON.parse(json);
                                            $("#jenis_hewan").val(obj.jenis_hewan);
                                            $("#jenis_kelamin").val(obj.jenis_kelamin);
                                            $("#umur").val(obj.umur);
                                            $("#id_peternak").val(obj.id_peternak);
                                            $("#nama").val(obj.nama);
                                            $("#daerah").val(obj.daerah);
                                            $("#pekerjaan").val(obj.pekerjaan);
                                            $("#no_telpon").val(obj.no_telpon);
                                            $("#alamat").val(obj.alamat);
                                            
                                            

                                        }
                                    });
                                }

                                //FUNCTION 2

                                 function isi_otomatis2() {
                                    var id_hewan2 = $("#id_hewan2").val();
                                    $.ajax({
                                        url: "<?php echo base_url() ?>index.php/Dokter/form_penjualan2_autocomplit",
                                        type: "GET",
                                        data: "id_hewan2=" + id_hewan2,
                                        success: function (data) {
                                            var json = data,
                                                    obj = JSON.parse(json);
                                            $("id_hewan").val(obj.id_hewan);
    
                                            
                                            

                                        }
                                    });
                                }
</script>
