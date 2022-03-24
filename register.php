<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dinda CV Registrasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/css/regis.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>
<body>
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>

    <input type="text" name="username" placeholder="Username" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password2" placeholder="Retype password" />
    <div class="input_field select_option">
    <select name="plan" id="plan" class="form-control">
                  <option value="">Plan</option>
                  <option value="1">Free</option>
                  <option value="2">Premium</option>
                </select>
    </div class="select_arrow">
    <div class="input_field select_option" id="pay">
      <select name="pay" id="pay" class="form-control">
                  <option>Pembayaran</option>
                  <option>OVO</option>
                  <option>Dana</option>
                </select>
    </div>
    <input type="submit" name="signup_submit" value="Sign me up" />
  </div>

  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>

    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>

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