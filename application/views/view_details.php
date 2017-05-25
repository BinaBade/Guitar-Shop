<html>
<head>
  <title>Guitar Online Shop</title>
  <meta name="description" content="Guitar" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
  <style type="text/css">
  .fj{
    border: none;
    padding: 10px 10px;
  }
  </style>
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr-1.5.min.js"></script>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          
          
        </div> <!-- Closing of the logo_text id tag -->
      </div> <!-- Closing of the logo id tag -->
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="<?php echo base_url();?>index.php">Home</a></li>
          
  

           

                   </li> <!-- Ending of adding sub menus to adding things -->
      <li><a href="<?php echo base_url();?>index.php/guitar/add">Purchase Details</a></li>
      <li><a href="<?php echo base_url();?>index.php/customer/add">Selling Details</a></li>
        
      <li><a href="<?php echo base_url();?>index.php/welcome/view_detail">View Details</a></li>
   
      <li><a href="<?php echo base_url();?>index.php/guitar/about">About Us</a></li> 
        <li><a href="<?php echo base_url();?>index.php/user/register"><i class="fa fa-home fa-2x"></i>register</a></li>
       <li> <a href="<?php echo base_url();?>index.php/user/login"><i class="fa fa-envelope fa-2x"></i> login</a> </li>
          <!-- Ending of adding sub menus to assigning things-->
     <li><a href="<?php echo base_url();?>index.php/user/logout">Log Out</a></li>
        </ul>
      </nav>
    </header>
  
     </div> <!-- Closing of the gallery class -->
 
  </div> <!-- Closing of the main div tag right after the body tag -->
  <p>&nbsp;</p>
  <div class="content" ><label style="font-size:50px; color:white; padding-left: 400px">View selling detail</font></label>
<a href="<?php echo base_url();?>index.php/customer/display"><Button class="fj">Show</Button></a><br/>
<label style="font-size:50px; color:white; padding-left: 400px">View purchase detail</label>
<a href="<?php echo base_url();?>index.php/guitar/display"><Button class="fj">Show</Button></a>
  </div>
        
    
    
  
  
</body>
</html>