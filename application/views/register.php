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
    <script >
          function validaion() {
            if(document.register-form.Fname.value == " "){
              document.getElementById('error').innerHTML = "please enter a username";// body...
          }
          var x = document.forms["myform"]["password"].value;
          var y = document.forms["myform"]["cpassword"].value;
          if(x!=y){
              document.getElementById('error').innerHTML = "password doesnot match";
              return false;
          }
      }
      </script>
  </head>
  <body>
    <div id="bg">
  <img src="" alt="">
<div class="login">
  <h2>Register Page</h2>
  <div class="login-top">
      <form id="myform" method="post" enctype="multipart/form-data">
          <?php echo validation_errors();?>
        <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name" required />
                        </div>

                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" required />
                        </div>
        </div>
        <br><input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" required />
        <br><input type="password" id="password" name="password" value="" class="form-control input-lg" placeholder="Password"  required/>
        <br><input type="password" id="cpassword" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" required />
        </div>
          <br><label style="font-size: 20px; color: white">Birth Date:</label>
          <div class="row">
            
                <select class = "form-control input-lg" name="month">
              <option value="01">Jan</option>
              <option value="02">Feb</option>
              <option value="03">Mar</option>
              <option value="04">Apr</option>
              <option value="05">May</option>
              <option value="06">Jun</option>
              <option value="07">Jul</option>
              <option value="08">Aug</option>
              <option value="09">Sep</option>
              <option value="10">Oct</option>
              <option value="11">Nov</option>
              <option value="12">Dec</option>
              </select>
                    
                <select class = "form-control input-lg" name="day">
             <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>

              </select>
            
           
                <select class = "form-control input-lg" name="year">
                  <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>

              </select>
          </div>
          
          <br><b style="color: black">Please upload the image:</b>
        <input type="file" name="userfile"  required >
            <br><label style="color: black"> Gender : </label>
           <label class="radio-inline" style="color:black; font-size: 15px"> <input type="radio" name="gender" value="Male" id="male"> Male</label>
           <label class="radio-inline" style="color: black;"><input type="radio" name="gender" value="Female" id="female"> Female</label> 
           <br>
           <input type="checkbox" name="terms" value="terms"> 
           <a href="" > I accept terms and condition</a>

          <br> <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit">
      </form>
      </div>
      </div>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?> assets/js/bootstrap.min.js"></script>
  </body>
</html>