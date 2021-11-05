<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Vaksin
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $vaksin['id']; ?>">
                        <div class="form-group">
                            <label for="vaksin">Vaksin</label>
                            <input type="text" name="vaksin" class="form-control" id="vaksin" value="<?= $vaksin['vaksin']; ?>">
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
