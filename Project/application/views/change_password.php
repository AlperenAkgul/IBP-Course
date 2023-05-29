<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Change Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/AdminLTE-3.2.0/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>

<!-- Image by <a href="https://pixabay.com/users/ninocare-3266770/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=1655783">Nino Carè</a> from <a href="https://pixabay.com//?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=1655783">Pixabay</a> -->

<body class="hold-transition login-page" style="background-image: url('<?= base_url() ?>/assets/AdminLTE-3.2.0/books.jpg');">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a class="h1">Change Password</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Please enter your new password.</p>
        <form action="<?= base_url() ?>login/changepassword/<?= $this->session->session_data['id'] ?>" method="post">
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="New Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="new_pass" class="form-control" placeholder="Confirm Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Change password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>