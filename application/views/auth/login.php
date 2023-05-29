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
  <link href="<?=base_url("sb-admin/"); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url("sb-admin/"); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url("sb-admin/"); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head> 


<body class="bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?= base_url('assets/logo_ruberi.png'); ?>" height= "106" widht="116">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>

                 <?= $this->session->flashdata('message'); ?>

                  <form class="user" action="<?= base_url('auth'); ?>" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Ketik E-mailmu..." value="<?= set_value('email'); ?>">
                       <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Ketik passwordmu...">
                       <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-warning btn-user btn-block">Login</button>
                    </form>

                  <hr>
                   
                  <div class="text-center">
                    <p>Belum punya akun ruberi? klik <a class="" href="<?= base_url('auth/daftar');?>"> buat akun!</a></p>
                    <p><a class="" href="<?= base_url('auth/lupa_password');?>">Lupa Password? </a></p> <br>

                    <p><a class="" href="<?= base_url('Home');?>"> <- kembali ke beranda</a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url("sb-admin/"); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url("sb-admin/"); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url("sb-admin/"); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url("sb-admin/"); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
