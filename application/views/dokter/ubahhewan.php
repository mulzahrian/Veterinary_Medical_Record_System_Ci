<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Hewan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        
                        <input type="hidden" name="id" value="<?= $id_hewan['id']; ?>">

                        <div class="form-group">
                            <label for="id_hewan">ID Hewan</label>
                            <input type="text" name="id_hewan" class="form-control" id="id_hewan" value="<?= $id_hewan['id_hewan']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>
                        <div class="form-group">
                            <label for="jenis_hewan">Jenis Hewan</label>
                            <input type="text" name="jenis_hewan" class="form-control" id="jenis_hewan" value="<?= $id_hewan['jenis_hewan']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?= $id_hewan['jenis_kelamin']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur" value="<?= $id_hewan['umur']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="id_peternak">ID Peternak</label>
                            <input type="text" name="id_peternak" class="form-control" id="id_peternak" value="<?= $id_hewan['id_peternak']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $id_hewan['nama']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="daerah">Daerah</label>
                            <input type="text" name="daerah" class="form-control" id="daerah" value="<?= $id_hewan['daerah']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?= $id_hewan['pekerjaan']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $id_hewan['alamat']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>
      
                        <button type="submit" name="ubahhewan" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>