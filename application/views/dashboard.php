 <?php foreach($img as $i):?>
    <img src="<?php echo base_url();?>uploads/user_images/<?php echo $i->image;?>" class="img-circle" width="200" height="160">;
    
    
      
        <ul>
           <li>First Name: <?php echo $i->firstname;?></li>
           <li>Last Name: <?php echo $i->lastname;?></li>
           <li>Date of Birth: <?php echo $i->date;?></li>
           <li>Email: <?php echo $i->email;?></li> 
           <li>Gender: <?php echo $i->gender;?></li> 
        </ul>
    <?php endforeach;?>
 <a href="<?php echo base_url();?>index.php/user/logout" style="margin-left:75px;">LogOut</a><br>