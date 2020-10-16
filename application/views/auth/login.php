

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <?= $this->session->flashdata('message'); ?>
      <div class="card-body">
        <form class="user" method="post" action="<?= base_url(); ?>auth">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="email" name="email" class="form-control" value="<?= set_value('email'); ?>"  >
              <label for="inputEmail">Email address</label>
              <small class="text-danger"><?= form_error('email'); ?></small>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" >
              <label for="inputPassword">Password</label>
              <small class="text-danger"><?= form_error('password'); ?></small>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= base_url(); ?>auth/registration">Daftarkan Akun</a>
          
        </div>
      </div>
    </div>
  </div>

   