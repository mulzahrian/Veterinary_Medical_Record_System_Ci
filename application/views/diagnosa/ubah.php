<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Diagnosa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $diagnosa['id']; ?>">

                        <!--div class="form-group">
                            <label for="id_peternak">ID Peternak</label>
                            <input type="text" name="id_peternak" class="form-control" id="id_peternak" value="<?= $id_peternak['id_peternak']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        <!--/div-->
                        

                       
                      
                        

                        <div class="form-group">
                            <label for="diagnosa">Vaksin</label>
                            <input type="text" name="diagnosa" class="form-control" id="diagnosa" value="<?= $diagnosa['diagnosa']; ?>">
                            <!--small class="form-text text-danger"><?= form_error('jenis_hewan'); ?></small-->
                        </div>

                       

                        
                       


      
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>