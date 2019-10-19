<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?=$title?></title>
  <link href="<?=base_url('assets/sb/')?>css/sb-admin-2.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat akun baru!</h1>
              </div>
              <form method="post" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="nama_depan" name="nama_depan"  placeholder="Nama Depan">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                  <div class="text-center">
                    <span id="username_result"></span>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <div class="text-center">
                      <span  class="text-center" id="password_length"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="confirm_password" name="confirm_password" placeholder="Ulangi Password">
                    <div class="text-center">
                      <span  class="text-center" id="password_result"></span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="submit" value= "register">Daftar</button>
                <hr>
              </form>
              <hr>
              <div class="text-center">
              </div>
              <div class="text-center">
                <a class="small" href="<?=base_url()?>">Sudah Punya akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/sb/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/sb/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/sb/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('assets/sb/')?>js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#username').keyup(function(){
      var username = $('#username').val();
      if(username != ''){
        $.ajax({
          url: "<?php echo base_url(); ?>login/check_username",
          method: "POST",
          data: {username:username},
          success: function(data){
            $('#username_result').html(data);
          }
        });
      }
    });
  });
  $(document).ready(function(){
    $('#confirm_password,#password').keyup(function(){
      var confirm_password = $('#confirm_password').val();
      var password = $('#password').val();
      if(confirm_password != '' && password !=''){
        $.ajax({
          url: "<?php echo base_url(); ?>login/check_password",
          method: "POST",
          data: {confirm_password:confirm_password, password:password},
          success: function(data){
            $('#password_result').html(data);
          }
        });
      }
    });
    $('#password').keyup(function(){
      var password = $('#password').val();
      if(confirm_password != '' && password !=''){
        $.ajax({
          url: "<?php echo base_url(); ?>login/check_password_panjang",
          method: "POST",
          data: {password:password},
          success: function(data){
            $('#password_length').html(data);
          }
        });
      }
    });
  });
</script>
</body>
</html>
