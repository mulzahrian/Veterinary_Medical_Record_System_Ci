<script src=<?php echo base_url(); ?>assets/ajax.js></script>
<div id="content-wrapper">

      <div class="container-fluid">
            
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>


        <h1><?= $title; ?></h1>
        <hr>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>

      <?php endif; ?>

    <div class="col-md-8">

       <div class="card">
                <div class="card-header">
                    Form Rekam Medis
                </div>
                <div class="card-body">
        <form action="" method="post">
                  <div class="form-group">


        <div class="form-group">
           <b><label>Jenis Hewan</label></b>
        <input type="text" list="data_hewan" class="form-control" id="id_hewan" name="id_hewan"  placeholder=" Hewan" onkeyup="isi_otomatis()" >
         </div>

         <div class="form-group">
          <b><label>Jenis Hewan</label></b>
        <input type="text" class="form-control" id="jenis_hewan" name="jenis_hewan" readonly=""  placeholder=" Jenis Hewan"  >
         </div>

         <div class="form-group">
          <b><label>Jenis Kelamin</label></b>
        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" readonly=""  placeholder=" Jenis Kelamin"  >
         </div>

         <div class="form-group">
          <b><label>Umur</label></b>
        <input type="text" class="form-control" id="umur" name="umur" readonly="" placeholder=" Umur"  >
         </div>

        <div class="form-group">
          <b><label>ID peternak</label></b>
        <input type="text" list="data_hewan" class="form-control" id="id_peternak" name="id_peternak" readonly=""  placeholder="ID Peternak"  >
         </div>

         <div class="form-group">
          <b><label>Nama</label></b>
        <input type="text" class="form-control" id="nama" name="nama" readonly=""  placeholder=" Nama ">
         </div>

          <div class="form-group">
            <b><label>Daerah</label></b>
        <input type="text" class="form-control" id="daerah" name="daerah" readonly=""  placeholder=" Daerah" >
         </div>

         <div class="form-group">
          <b><label>Pekerjaan</label></b>
        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" readonly=""  placeholder=" Pekerjaan" >
         </div>

         <div class="form-group">
          <b><label>No Telpon</label></b>
        <input type="text" class="form-control" id="no_telpon" name="no_telpon" readonly=""  placeholder="No Telpon" >
         </div>
         
         <div class="form-group">
          <b><label>Alamat</label></b>
        <input type="text" class="form-control" id="alamat" name="alamat" readonly=""  placeholder=" Alamat" >
         </div>

         <div class="form-group">
          <b><label>Diagnos Penyakit</label></b>
        <input type="text" class="form-control" id="diagnosa" name="diagnosa"   placeholder=" Diagnosa"  >
         </div>

         <div class="form-group">
          <b><label>Jenis Vaksin</label></b>
        <input type="text" class="form-control" id="vaksin" name="vaksin"  placeholder=" vaksin"  >
         </div>

         <div class="form-group">
          <b><label>Tanggal</label></b>
        <input type="text" class="form-control" id="tanggal" name="tanggal"  placeholder="Tanggal"  >
         </div>

         <div class="form-group">
                            <b><label for="Tahun">Tahun</label></b>
                            <select class="form-control" id="tahun" name="tahun">
                                <option value="2017" >2017</option>
                                <option value="2018" >2018</option>
                                <option value="2019">2019</option>
                                
                            </select>
                        </div>

                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Record Data</button>
                    </form>
                </div>
            </div>
</div>
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">

                           function isi_otomatis() {
                                    var id_hewan = $("#id_hewan").val();
                                    $.ajax({
                                        url: "<?php echo base_url() ?>index.php/Medis/form_penjualan_autocomplit",
                                        type: "GET",
                                        data: "id_hewan=" + id_hewan,
                                        success: function (data) {
                                            var json = data,
                                                    obj = JSON.parse(json);
                                            $("#jenis_hewan").val(obj.jenis_hewan);
                                           

                                        }
                                    });
                                }
</script>
