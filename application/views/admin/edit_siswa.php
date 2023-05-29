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
 <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

       <!-- Nav Item - Data jenis Pendaftaran -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/data_jenis_pendaftaran'); ?>">
          <i class="fas fa-folder"></i>
          <span >Data Jenis Pendaftaran</span></a>
      </li>

      <!-- Nav Item - Data jenis SPP -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/data_jenis_SPP'); ?>">
          <i class="fas fa-folder"></i>
          <span >Data Jenis SPP</span></a>
      </li>

       <!-- Nav Item - Data User -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/data_user'); ?>">
         <i class="fas fa-folder"></i>
          <span >Data User</span></a>
      </li>

      <!-- Nav Item - data siswa -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin/data_siswa'); ?>">
       <i class="far fa-folder-open"></i>
          <span >Data Siswa</span></a>
      </li>

      <!-- Nav Item - data transaksi pendaftaran siswa -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/data_transaksi_pendaftaran'); ?>">
         <i class="fas fa-folder"></i>
           <span>Data Transaksi Pendaftaran</span>          
        </a>
      </li>

      <!-- Nav Item - Data Transaksi SPP -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/data_transaksi_SPP'); ?>">
         <i class="fas fa-folder"></i>
          <span>Data Transaksi SPP</span></a>
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
                <a class="dropdown-item" href="<?= base_url('admin/edit_akun/'); ?><?= $data_user['kd_user']; ?>">
                  <i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Akun
                </a>
                <a class="dropdown-item" href="<?= base_url('admin/ganti_password');  ?>">
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
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
           <div class="container">
              <div class="row mt-3">
                <div class="col-md">
                  <div class="card">
                    <div class="card-header" align="center">
                      Edit Data Siswa
                    </div>
                    <div class="card-body">
                     <form action="" method="POST">

                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="kd_siswa">Kode Siswa</label>
                       <input type="text" name="kd_siswa" class="form-control form-control-user" value="<?= $siswa['kd_siswa']; ?>" readonly>
                      </div>
                      <div class="form-group col-md-9">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control form-control-user" value="<?= $siswa['nama_lengkap']; ?>" required>
                      </div>        
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" class="form-control form-control-user" >
                        <?php $jk = array('Perempuan','Laki-Laki');?>
                         <?php  for ($no=0; $no<2; $no++) { ?>
                         <?php if ($jk[$no] == $siswa['jk']) {echo "<option value='".$jk[$no] ."' selected>".$jk[$no]."</option>"; ?>
                         <?php }else { echo "<option value=".$jk[$no].">".$jk[$no]."</option>";} ?>
                        <?php  } ?>  
                      </select>
                      </div>
                      <div class="form-group col-md-3">
                      <label>Agama</label>
                      <select name="agama" class="form-control form-control-user" id="agama">
                      <?php $agama = array('Islam','Protestan','Katolik','Hindu','Buddha','Konghucu');?>
                         <?php  for ($no=0; $no<6; $no++) { ?>
                         <?php if ($agama[$no] == $siswa['agama']) {echo "<option value='".$agama[$no] ."' selected>".$agama[$no]."</option>"; ?>
                         <?php }else { echo "<option value=".$agama[$no].">".$agama[$no]."</option>";} ?>
                       <?php  } ?>  
                    </select> 
                      </div>
                      <div class="form-group col-md-3">
                      <label>Kota Lahir</label>
                      <input type="text" name="tempat_lahir" class="form-control form-control-user" value="<?= $siswa['tempat_lahir']; ?>" required>
                      </div>
                      <div class="form-group col-md-3">
                      <label>Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control form-control-user" value="<?= $siswa['tgl_lahir']; ?>" required>
                      </div>
                     </div>

                      <div class="form-row">
                        <div class="form-group col-md-1">
                          <label>Jenjang</label>
                          <input type="text" name="jenjang" class="form-control form-control-user" value="<?= $siswa['jenjang']; ?>" required>
                        </div>
                        <div class="form-group col-md-1">
                          <label>Kelas</label>
                          <input type="text" name="kelas" class="form-control form-control-user" value="<?= $siswa['kelas']; ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Sekolah</label>
                          <input type="text" name="sekolah" class="form-control form-control-user"  value="<?= $siswa['sekolah']; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Alamat Rumah</label>
                          <input type="text" name="alamat" class="form-control form-control-user"  value="<?= $siswa['alamat']; ?>" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Nama Ibu</label>
                          <input type="text" name="nama_ibu" class="form-control form-control-user"  value="<?= $siswa['nama_ibu']; ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Telp/Hp Ibu</label>
                          <input type="text" name="telp_ibu" class="form-control form-control-user"  value="<?= $siswa['telp_ibu']; ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Pekerjaan Ibu</label>
                          <input type="text" name="pekerjaan_ibu" class="form-control form-control-user"  value="<?= $siswa['pekerjaan_ibu']; ?>" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Nama Ayah</label>
                          <input type="text" name="nama_ayah" class="form-control form-control-user"  value="<?= $siswa['nama_ayah']; ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Telp/Hp Ayah</label>
                          <input type="text" name="telp_ayah" class="form-control form-control-user"  value="<?= $siswa['telp_ayah']; ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Pekerjaan Ayah</label>
                          <input type="text" name="pekerjaan_ayah" class="form-control form-control-user"  value="<?= $siswa['pekerjaan_ayah']; ?>"  required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                           <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">SIMPAN</button>
                        </div>
                      </div>
              </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- Content Row --> 
        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Rumah Belajar Mekarsari  <?= date('yy'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('sb-admin/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('sb-admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('sb-admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('sb-admin/'); ?>js/sb-admin-2.min.js"></script>


</body>

</html>
