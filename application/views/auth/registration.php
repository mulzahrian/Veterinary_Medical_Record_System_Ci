

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrasi Akun Anda</div>
      <div class="card-body">
        <form class="user" method="post" action="<?= base_url(); ?>auth/registration">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" autofocus="autofocus" value="<?= set_value('nama'); ?>">
                  <label for="firstName">Nama Lengkap</label>
                  <small class="text-danger"><?= form_error('nama'); ?></small>
                  
                </div>
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="email" name="email" class="form-control" value="<?= set_value('email'); ?>" >
              <label for="inputEmail">Alamat Email</label>
              <small class="text-danger"><?= form_error('email'); ?></small>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password1" name="password1" class="form-control">
                  <label for="inputPassword">Password</label>
                  <small class="text-danger"><?= form_error('password1'); ?></small>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password2" name="password2" class="form-control">
                  <label for="confirmPassword">Konfirmasi password</label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= base_url(); ?>auth">Login</a>
         
        </div>
      </div>
    </div>
  </div>


