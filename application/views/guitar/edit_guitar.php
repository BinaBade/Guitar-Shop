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
   <form  role="form" method="post" enctype="multipart/form-data">
   <fieldset>
    <div class="form-group">
      
                <div class="alert-danger">
                    <?php echo validation_errors();?>
                    <?php echo $this->session->flashdata('error');?>
                </div>
        
      
      <table>
        <tr><td>Color: </td><td><input type="text" name="color" class="form-control" value="<?php echo $posts->color?>"></td></tr>
        <tr><td>Price: </td><td><input type="text" name="price" class="form-control" value="<?php echo $posts->price?>"></td></tr>
        <tr><td>Dealer: </td><td><input type="text" name="dealer" class="form-control" value="<?php echo $posts->dealer?>"></td></tr>
        <tr><td>Purchase Date:</td><td><input type="text" name="purchaseDate" class="form-control" value="<?php echo $posts->purchaseDate?>"></td></tr>
        <tr><td>Delivery Date</td><td><input type="text" name="deliveryDate" class="form-control" value="<?php echo $posts->deliveryDate?>"></td></tr>
        <tr><td>Quantity</td><td><input type="text" name="quantity" class="form-control" value="<?php echo $posts->quantity?>"></td></tr>
        <tr> <td>Please upload your file:</td><td><br>current file: <img src="<?php echo base_url();?>uploads/guitar_images/<?php echo $posts->image;?>" width="200" height="160">;
        <input type="file" name="userfile"><br></td></tr>
        <tr><td></td><td><input type="submit" class="btn btn-primary" value="Submit"></td></tr>

      </table>
        
</fieldset>
      </form>
      </div></body></html> 