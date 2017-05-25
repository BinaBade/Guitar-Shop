<!DOCTYPE HTML>
<html>
<head>
<title>Guitar Online Shop</title>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/login_style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<!--Google Fonts-->
<link href="<?php echo base_url();?>assets/css/googlefont.css"rel='stylesheet' type='text/css'media="all">
<link href='<?php echo base_url();?>assets/css/google_font.css' rel='stylesheet' type='text/css' media="all">
<!--Google Fonts-->
 <script>
          function validateForm() {
            var x = document.forms["myForm"]["username"].value;
            if(x == null|| x == ""){
              alert("Please enter the username");
              return false;// body...
            }
             var x = document.forms["myForm"]["password"].value;
            if(x == null|| x == ""){
              alert("Please enter the password");
              return false;// body...
            }
          }
      </script>
</head>
<body>
<div id="bg">
  <img src="" alt="">
<div class="login">
  <h2>Login Page</h2>
  <div class="login-top">
    
    <form id="form1" name="form 1" method="post" onsubmit="validateForm()" action="<?php echo base_url();?>index.php/User/login">
          <div class="username">
         <b>Username:</b><br>
          <input type="text" class="form-control" name="Username" placeholder="Username">
          </div>

          <div class="password">
            <b>Password:</b><br>
            <input type="password" class="form-control" name="Password" placeholder="Password">
          </div>

          <div class="re">
           <input name="remember" type="checkbox" value="Remember Me"> Remember Me

            <a href="" class="pull-right lin"><u>Forget Password</u></a>

          </div>

          <div class="submit">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
          </div>
        </form>
    
  </div> <!-- closing of login-top -->
  <div class="login-bottom">
    
  </div> <!-- Closing of login-bottom -->
</div>  <!-- End of login class -->
</div>
</body>
</html>