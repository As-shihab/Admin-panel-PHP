<header class="shadow-sm">
    <h1 class="text-primary">SSB Controls</h1>
    <ul>
      <li><a href="?Profile_auth">Profile</a></li>
      <li><a href="?admin_login">Admin</a></li>
      <li><a href="#">Product</a></li>
      <li><a href="#">Files</a></li>
    </ul>
    <ul class="d-flex justify-content-center align-items-center">
      <p class="p-1 text-secondary"> <?php if(isset($_SESSION['Admin_detum'])){echo "Welcome ". $_SESSION['Admin_detum'];} ?></p>
      <?php
if(isset($_SESSION['UserNumber'])){


?>


      <div class="profile">
      <img src="Components/Uploads/<?php if(isset($loged_user_info)){echo $loged_user_info['File_name'];}else{echo 'profile.jpg'; }?>" alt="Upload pic">      </div>
    
   

      <?php }
      
      else{

     
      ?>
          <button class="btn btn-primary login_btn">Login</button>
<?php } ?>
  
     
    </ul>
  </header>