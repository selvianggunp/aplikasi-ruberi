<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $judul; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('sb-admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('sb-admin/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/user_in'); ?>">

        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
       <img src="<?= base_url('assets/logo_ruberi.png'); ?>"  width="47" height="53" >
        <div class="sidebar-brand-text mx-3">RUBERI</div>

      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
 <!-- Nav Item - home userhome -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userhome'); ?>">
          <i class="fas fa-home"></i>
          <span>Beranda</span></a>
      </li>
      <!-- Nav Item - pendaftaran -->
      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('Pendaftaran/pj'); ?>">
         <i class="fas fa-users"></i>
          <span>Pendaftaran Siswa Baru</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- End Akun -->
             <!-- Nav Item - User Information -->
            <li class="nav-item dropdown " >
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bantuan</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('userhome/cpb'); ?>">
                  <i class="fas fa-align-justify fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cara Pendaftaran Bimbel
                </a>
                <a class="dropdown-item" href="<?= base_url('userhome/cpspp'); ?>">
                 <i class="fas fa-align-justify fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cara Pembayaran SPP
                </a>
                 <a class="dropdown-item" href="<?= base_url('userhome/tentang_kami'); ?>">
                 <i class="fas fa-school fa-sm fa-fw mr-2 text-gray-400"></i>
                  Tentang kami
                </a>
              </div>
            </li>
              
                <!-- Akun -->
           <div class="topbar-divider d-none d-sm-block"></div>

             <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              
                <img class="img-profile" width="100" src="<?= base_url('assets/foto_user/'); ?><?= $data_user['photo']; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="card-body">
                  <div> <h5 class="card-title text-success left" ><?= $data_user['level']; ?></h5>
                  <p class="card-text mt-1"><?= $data_user['username']; ?></p></div>
                 
                  <p class="card-text"><?= $data_user['email']; ?></p>

                </div>
                

              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('userhome/edit_akun/'); ?><?= $data_user['kd_user']; ?>">
                  <i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Akun
                </a>
                <a class="dropdown-item" href="<?= base_url('userhome/ganti_password');  ?>">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i> 
                  Ganti Password
                </a>
                <a class="dropdown-item" href="<?= base_url('auth/logout');  ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
               
              </div>
            </li>
            <!-- End Akun -->
            

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <!-- Page Heading -->
        
            <div class="col-md-6">
                <div class="card">
                  <div class="card-header" align="center">
                   Edit Akun
                  </div>
                  <div class="card-body">

                   <form action="" method="POST" enctype="multipart/form-data">
                    <!------------------------------ PEMBAYARAN -------------------------------------->
                    <br>
                    <div class="text-center" >
                      <img width="100" src="<?= base_url('assets/foto_user/') . $data_user['photo'];  ?> ">
                    </div>
                    
                    <div class="form-group">
                      <label for="kd_user">Upload photo akun</label>
                      <input type="file" class="form-control form-control-user" id="photo" name="photo">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="kd_user" name="kd_user" value="<?= $akun_saya['kd_user']; ?>" readonly hidden>
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control form-control-user" name="username" value="<?= $akun_saya['username']; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= $akun_saya['email']; ?>" required>
                    </div>
                    
                      <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">SIMPAN</button>
                   </form>
                  </div>
                </div>
              </div>
      

          <!-- Content Row --> 
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
</div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Rumah Belajar Mekarsari <?= date('yy'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('sb-admin/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('sb-admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('sb-admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('sb-admin/'); ?>js/sb-admin-2.min.js"></script>


</body>

</html>
