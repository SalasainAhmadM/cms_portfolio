<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>

<body class="hold-transition login-page" style="background-color: #cbb390">
  <script>
    start_loader()
  </script>
  <style>
    .card-primary.card-outline {
      border-top: transparent;
    }

    body {
      background-color: #cbb390;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
  </style>
  <div class="login-box" style="background-color: #4f0b16">
    <div class="card card-outline card-primary" style="background-color: transparent">
      <div class="card-body">

        <form id="login-frm" action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Admin">
            <div class="input-group-append">
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
            </div>
          </div>


          <div class="">
            <button type="submit" class="btn" style="text-align:center;background-color:aqua; border-color: #363e45;">
              LOGIN</button>
          </div>
      </div>
      </form>


    </div>
  </div>
  </div>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function () {
      end_loader();
    })
  </script>
</body>

</html>