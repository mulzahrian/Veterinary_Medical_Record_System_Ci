

    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html"><?= $title; ?></a>
          </li>
          <li class="breadcrumb-item active"><?= $title; ?></li>
        </ol>

        <!-- Page Content -->
        <h1><?= $title; ?></h1>
        <hr>
<a href="<?= base_url(); ?>auth/registration" class="btn btn-primary">Bikin Akun Baru</a>
        <!-- isi data -->


  <div class="col-md">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <!--th scope="col">Password</th-->
      <th scope="col">Level </th>
      <th scope="col">Aktifasi</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($usermanage as $ih) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $ih['nama'] ?></td>
      <td><?= $ih['email'] ?></td>
      <!--td><?= $ih['password'] ?></td-->
      <td><?= $ih['role_id'] ?></td>
      <td><?= $ih['is_active'] ?></td>
      
      <td>
        
        <a href="<?= base_url(); ?>usermanage/hapus/<?= $ih['id']; ?>"
        class="btn btn-danger btn-sm float-center"><i class="fas fa-trash"></i></a>
        <a href="<?= base_url(); ?>usermanage/ubah/<?= $ih['id']; ?>"
        class="btn btn-warning btn-sm float-center"><i class=" fas fa-pen"></i></a>
        

      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach ?>
    
  </tbody>
</table>

<!-- isi data-->

       
        


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      