<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Rekam Medis
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $rekam_medis['id']; ?>">

                        <!--div class="form-group">
                            <label for="id_peternak">ID Peternak</label>
                            <input type="text" name="id_peternak" class="form-control" id="id_peternak" value="<?= $id_peternak['id_peternak']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        <!--/div-->

                        <div class="form-group">
                            <label for="id_hewan">ID Hewan</label>
                            <input type="text" name="id_hewan" class="form-control" id="id_hewan" value="<?= $rekam_medis['id_hewan']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="jenis_hewan">Jenis Hewan</label>
                            <input type="text" name="jenis_hewan" class="form-control" id="jenis_hewan" value="<?= $rekam_medis['jenis_hewan']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?= $rekam_medis['jenis_kelamin']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur" value="<?= $rekam_medis['umur']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="id_peternak">ID Peternak</label>
                            <input type="text" name="id_peternak" class="form-control" id="id_peternak" value="<?= $rekam_medis['id_peternak']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="daerah">Daerah</label>
                            <input type="text" name="daerah" class="form-control" id="daerah" value="<?= $rekam_medis['daerah']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?= $rekam_medis['pekerjaan']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $rekam_medis['alamat']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="diagnosa">Diagnosa</label>
                            <input type="text" name="diagnosa" readonly="" class="form-control" id="diagnosa" value="<?= $rekam_medis['diagnosa']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="vaksin">Vaksin</label>
                            <input type="text" name="vaksin" readonly="" class="form-control" id="vaksin" value="<?= $rekam_medis['vaksin']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $rekam_medis['tahun']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $rekam_medis['nama']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                       


      
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>