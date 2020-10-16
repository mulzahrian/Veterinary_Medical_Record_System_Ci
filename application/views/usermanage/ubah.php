<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Rekam Medis
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $ubah['id']; ?>">

                        <!--div class="form-group">
                            <label for="id_peternak">ID Peternak</label>
                            <input type="text" name="id_peternak" class="form-control" id="id_peternak" value="<?= $id_peternak['id_peternak']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        <!--/div-->

                       
                      
                        

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $ubah['nama']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" readonly="" class="form-control" id="email" value="<?= $ubah['email']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="role_id">Level</label>
                            <input type="text" name="role_id" class="form-control" id="role_id" value="<?= $ubah['role_id']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="is_active">Aktivasi</label>
                            <input type="text" name="is_active" class="form-control" id="is_active" value="<?= $ubah['is_active']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                       


      
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>