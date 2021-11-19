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
            <div class="col-md-8">
              <?= form_open_multipart('user/edit'); ?>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" value="<?= $db_user['email']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $db_user['nama']; ?>">
                   <small class="text-danger"><?= form_error('nama'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                            <div class="col-sm-2">Picture</div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('assets/img/profile/') . $db_user['gambar']; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                            <label class="custom-file-label" for="gambar">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </div>
            </form>
      </div>
