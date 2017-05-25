<html>
<head>
  <title>Guitar Online Shop</title>
  <meta name="description" content="Guitar" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
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
 
  </div>  <div class="purchase">

  <form method="post" align="center" enctype="multipart/form-data">
        <fieldset>
         <!--  <p style="color:white; font-size:20px; padding-left:50px; padding-right:10px">Guitar id:<input type="text" name="area_id" placeholder="Enter the guitar id" style="color:black; background-color:white" > </p><br/> -->
          <p style="color:white; font-size:20px; padding-left:50px; padding-right:10px">Price:<input type="text" name="price" placeholder="Enter the price" style="color:black; background-color:white" > </p><br/>
          <p style="color:white; font-size:20px; padding-left:50px; padding-right:10px">Color<input type="text" name="color" placeholder="Enter the color" style="color:black; background-color:white" > </p><br/>
          <p style="color:white; font-size:20px; padding-left:50px; padding-right:10px">Image<input type="file" name="userfile" placeholder="Enter the image" style="color:black; background-color:white" > </p><br/>
          <p style="color:white; font-size:20px; padding-left:50px; padding-right:10px">Dealer<input type="text" name="dealer" placeholder="Enter the dealer name" style="color:black; background-color:white" > </p><br/>
          <p style="color:white; font-size:20px; padding-left:50px; padding-right:10px">Quantity<input type="text" name="quantity" placeholder="Enter the dealer name" style="color:black; background-color:white" > </p><br/>

          <p style="color:white; font-size:20px; padding-left:50px; padding-right:10px">Purchase date:<input type="date" name="purchaseDate" placeholder="Enter the  purchase date" style="color:black; background-color:white" > </p> <br/>
          <p style="color:white; font-size:20px; padding-left:50px; padding-right:10px">Delivery date:<input type="date" name="deliveryDate" placeholder="Enter the delivery date" style="color:black; background-color:white" > </p><br/>
                    <p style="padding-left:20px; font-size:30px"><input type="submit" value="ADD" name="submit" style="color:black; font-size:18px; text-decoration:underline"/></p>
           
                </fieldset>
      </form> 
</div></body></html>        
    
    