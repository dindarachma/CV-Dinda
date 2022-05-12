<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Registrasi Page</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm rounded text-light" style="background-color: #212529">
            <form action="" method="POST">
              <div class="text-center">
                <!-- alert untuk success -->
                <!-- <?php if(isset($success)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Registrasi Berhasil</strong> Silahkan <a href="login.php">Login</a>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                alert untuk error
                <?php if(isset($error)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Email Sudah Terdaftar </strong><a href="login.php">Login</a>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?> -->
                <h1 class="text-light">Registrasi</h1>
                <p>Silahkan Daftar dengan Email Anda!</p>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>

               <div class="mb-3" class="input_field select_option" >
                <label for="plan" class="form-label">Plan</label>
                 <select name="plan" id="plan" class="form-control">
                  <option value="">Plan</option>
                  <option value="1">Free</option>
                  <option value="2">Premium</option>
                </select>
               </div>

               <div class="mb-3" class="input_field select_option" id="pay">
                <label for="pay" class="form-label">Pembayaran</label>
                  <select name="pay" id="pay" class="form-control">
                    <option>Pembayaran</option>
                    <option>OVO</option>
                    <option>Dana</option>
                </select>
              </div>

              <button type="submit" class="btn btn-info" name="register">Register</button>
            </form>
            <div align="center">
              <p>Sudah Punya Akun?</p>
              <a href="login.php"><button class="btn btn-danger">Login</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
    <script src="assets/js/main.js"></script>
<script>
  $(document).ready(function() {
  $("#pay").hide();

  $("#plan").change(function(){
    var _this = $(this);
    if (_this.val() == 2){
      $("#pay").show();

    }else{
      $("#pay").hide();
    }
  });
 });
</script>
  </body>
</html>