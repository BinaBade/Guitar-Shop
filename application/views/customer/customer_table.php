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
          <!-- Ending of adding sub menus to assigning things-->
     <li><a href="<?php echo base_url();?>index.php/user/logout">Log Out</a></li>
       <li><a href="<?php echo base_url();?>index.php/user/register"><i class="fa fa-home fa-2x"></i>register</a></li>
       <li> <a href="<?php echo base_url();?>index.php/user/login"><i class="fa fa-envelope fa-2x"></i> login</a> </li>
        </ul>
      </nav>
    </header>
  
     </div> <!-- Closing of the gallery class -->
 
  </div> <!-- Closing of the main div tag right after the body tag -->
  <p>&nbsp;</p>
  <div class="content">
 <table>
          <?php foreach($posts as $c):?>
        <tr>
          <td>
       
            <b>Name: <?php echo $c->name;?></b><br>
            email: <?php echo $c->email;?><br>
            Guitar id: <?php echo $c->guitar_id;?><br>
            Price: <?php echo $c->price;?><br>
            
            
            <a href="<?php echo base_url();?>index.php/customer/edit/<?php echo $c->id;?>">edit</a>
            <a href="<?php echo base_url();?>index.php/customer/delete/<?php echo $c->id;?>"onclick="return confirm('are you sure')">delete</a>
            <hr>
          </td>
        </tr>
        <?php endforeach;?>
      </table>
       
    </div>
        
    
    
  
  
</body>
</html>