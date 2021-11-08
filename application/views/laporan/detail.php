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
<hr>
    <div class="col-md">

<div class="card">
                <div class="card-header">
                    Detail Data Rekam Medis
                </div>
                <div class="card-body">
                  <b><label>ID Peternak</label></b>
                    <p class="card-title"><?= $db_rekam_medis['id_peternak']; ?></p>
                    
                    <b><label>Nama</label></b>
                    <p class="card-title"><?= $db_rekam_medis['nama']; ?></p>

                    <b><label>Daerah</label></b>
                    <p class="card-title"><?= $db_rekam_medis['daerah']; ?></p>

                    <b><label>Pekerjaan</label></b>
                    <p class="card-title"><?= $db_rekam_medis['pekerjaan']; ?></p>


                    <b><label>Alamat</label></b>
                    <p class="card-title"><?= $db_rekam_medis['alamat']; ?></p>

                    <b><label>ID Hewan</label></b>
                    <p class="card-title"><?= $db_rekam_medis['id_hewan']; ?></p>

                    <b><label>Jenis Hewan</label></b>
                    <p class="card-title"><?= $db_rekam_medis['jenis_hewan']; ?></p>

                    <b><label>Jenis Kelamin</label></b>
                    <p class="card-title"><?= $db_rekam_medis['jenis_kelamin']; ?></p>

                    <b><label>Umur</label></b>
                    <p class="card-title"><?= $db_rekam_medis['umur']; ?></p>

                    <b><label>Diagnosa</label></b>
                    <p class="card-title"><?= $db_rekam_medis['diagnosa']; ?></p>

                    <b><label>Vaksin</label></b>
                    <p class="card-title"><?= $db_rekam_medis['vaksin']; ?></p>

                    <b><label>Tanggal</label></b>
                    <p class="card-title"><?= $db_rekam_medis['tanggal']; ?></p>

                    <b><label>Tahun</label></b>
                    <p class="csard-title"><?= $db_rekam_medis['tahun']; ?></p>
                    
                    <a href="<?= base_url(); ?>laporan" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"></i>Kembali</a>
                </div>
            </div>

      </div>
