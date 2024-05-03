<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page">
  <script>
    start_loader()
  </script>
  <style>
    body{
      background-image: url("<?php echo validate_image($_settings->info('cover')) ?>");
      background-size:100% 100%;
      background-repeat:no-repeat;
      backdrop-filter: contrast(1);
    }
   
  </style>
<!-- Button to toggle login box -->
<button id="toggleLoginBoxBtn" class="btn btn-primary btn-lg" style="position: absolute; top: 60px; left: 100ox; margin: 20px; background-color: #af3222; border-color: #af3222; font: open-sans;">PASOK NA MGA SUKI</button>

<!-- Login box (initially hidden) -->
<div id="loginBox" class="login-box" style="display: none;">
  <div class="card card-navy my-2" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(255, 255, 255, 0.7); border-radius: 15px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);">
    <div class="card-body">
      <!-- Close button -->
      <button id="closeLoginBoxBtn" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="login-box-msg" style="font-family: 'Arial', sans-serif; font-size: 1.2rem; color: #333;">Please enter your credentials</p>
      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" autofocus placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <a href="<?php //echo base_url ?>">Go to Website</a> -->
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
    // JavaScript to toggle visibility of login box
  document.getElementById('toggleLoginBoxBtn').addEventListener('click', function() {
    var loginBox = document.getElementById('loginBox');
    loginBox.style.display = 'block';
    document.getElementById('toggleLoginBoxBtn').style.display = 'none';
  });

  // JavaScript to close login box and show the toggle button again
  document.getElementById('closeLoginBoxBtn').addEventListener('click', function() {
    var loginBox = document.getElementById('loginBox');
    loginBox.style.display = 'none';
    document.getElementById('toggleLoginBoxBtn').style.display = 'block';
  });
</script>
</body>
</html>