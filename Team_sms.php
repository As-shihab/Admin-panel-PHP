
<?php
$get_all_sms= $ssl->Get_all_sms();

?>



<section class="team_sms">

<div class="header fw-bold text-secondary"><i class="fa fa-sms text-primary"></i> Chat with Team</div>

<div class="sms_container">
 


<?php
while($get_all_sms_fetch=mysqli_fetch_assoc($get_all_sms)){
    

?>
<div class="shadow-sm content_sms">
    <div class="sms_head"><?php if(isset($get_all_sms_fetch)){ echo $get_all_sms_fetch['Full_name'];}?><span><?php if(isset($get_all_sms_fetch)){ echo "  ". $get_all_sms_fetch['Created_at'];}?></span></div>
   
    <p><?php if(isset($get_all_sms_fetch)){ echo $get_all_sms_fetch['Text_info'];}?></p>
</div>

<?php }?>

</div>
    
    <div class="sms_sentber">
    <form method="post">
        <input type="text" name="sms_info" placeholder="Type to massage" class="form-control">
        <button class="btn btn-sm btn-secondary"> <i class="fa fa-code"></i></button>
        
        <button type="submit" name="sent_sms" class="btn btn-primary "><i class="fa fa-arrow-right"></i></button>
        </form>

    </div>
  





</section>