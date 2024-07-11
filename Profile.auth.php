


<section class="profile_container">

<div class="profile_left shadow-sm">
    <div class="profile_left_header">
        <div class="profile_avater">
            <img src="Components/Uploads/<?php if(isset($loged_user_info)){echo $loged_user_info['File_name'];}else{echo 'profile.jpg'; }?>" alt="">

        </div>

        <div class="profile_right_content">
            <h1><?php if(isset($loged_user_info)){echo $loged_user_info['Full_name'];}?></h1>

            <p>Mobile : <?php if(isset($loged_user_info)){echo $loged_user_info['Mobile_number'];}?></p>
            <p>Email:<?php if(isset($loged_user_info)){echo $loged_user_info['Full_name'];}?></p>
            <p>Bring the world coloser togather</p>
            <h6>Studying : Computer Science Engineering</h6>
        </div>
    </div>
   



<div class="mt-3 shadow-sm p-2 rounded">

<div class="profile_button_action d-flex justify-content-between align-items-center">
<div class="profile_left_button">
<h5>Update Profile</h5>
<p class="text-sm">Update Your profile by clicking on arrow top button . after clicking just click on update again. </p>
</div>
<div class="profile_right_button">
    <form  method="post" enctype='multipart/form-data'>
<input type="file" hidden class="file_avater" name="update_avater_file" accept='image/*'/>
    <button type='button' name="update_file_profile" class="btn btn-outline-primary update_avater"><i class="fa fa-arrow-up"></i></button>

    </form>
    
</div>


</div>

<!-- first secton -->
<div class="profile_button_action shadow-sm mt-2 d-flex justify-content-between align-items-center">
<div class="profile_left_button">
<h5>Profile Activity</h5>
<p>Turn on or off your activity by inserting or count data </p>
</div>
<div class="profile_right_button">
    <button class="btn btn-outline-primary"><a class='text-decoration-none text-info' href="?action=active">


<?php

if(isset($loged_user_info)){
    if($loged_user_info['Activity']==1){
        echo "ON";
    }else{
        echo "OFF";
    }
}

?>

    </a></button>
</div>


</div>
<!-- last -->
<div class="profile_button_action shadow-sm mt-2 d-flex justify-content-between align-items-center">
<div class="profile_left_button">
<h5>Profile Activity</h5>
<p>Turn on or off your activity by inserting or count data </p>
</div>
<div class="profile_right_button">
    <button class="btn btn-outline-primary">On</button>
</div>


</div>



<!-- start -->

<div class="profile_button_action shadow-sm mt-2 d-flex justify-content-between align-items-center">
<div class="profile_left_button">
<h5>Profile Activity</h5>
<p>Turn on or off your activity by inserting or count data </p>
</div>
<div class="profile_right_button">
    <button class="btn btn-outline-primary">On</button>
</div>


</div>
<!-- end -->


<div class="profile_button_action shadow-sm mt-2 d-flex justify-content-between align-items-center">
<div class="profile_left_button">
<h5>Profile Activity</h5>
<p>Turn on or off your activity by inserting or count data </p>
</div>
<div class="profile_right_button">
    <button class="btn btn-outline-primary">On</button>
</div>


</div>


<div class="profile_button_action shadow-sm mt-2 d-flex justify-content-between align-items-center">
<div class="profile_left_button">
<h5>Profile Activity</h5>
<p>Turn on or off your activity by inserting or count data </p>
</div>
<div class="profile_right_button">
    <button class="btn btn-outline-primary">On</button>
</div>


</div>


</div>



</div>

<!-- second -->



<div class="profile_right shadow-sm">
<p class="d-flex shadow-lg text-info justify-content-around rounded p-2">Activity <i class="fa fa-code"></i></p>
    <p class="d-flex justify-content-around shadow-lg rounded p-2 text-success">Activity <i class="fa fa-car"></i></p>
<p class="d-flex shadow-lg text-info justify-content-around rounded p-2">Activity <i class="fa fa-code"></i></p>
    <p class="d-flex justify-content-around shadow-lg rounded p-2 text-success">Activity <i class="fa fa-car"></i></p>
</div>



</section>