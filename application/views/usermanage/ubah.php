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
                       
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $ubah['nama']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" readonly="" class="form-control" id="email" value="<?= $ubah['email']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="role_id">Level</label>
                            <input type="text" name="role_id" class="form-control" id="role_id" value="<?= $ubah['role_id']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="is_active">Aktivasi</label>
                            <input type="text" name="is_active" class="form-control" id="is_active" value="<?= $ubah['is_active']; ?>">
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
