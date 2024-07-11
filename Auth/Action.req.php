<?php
$ssl= new sslcontrols();
if(isset($_SESSION['UserNumber'])){
    if(isset($_POST['admin_login'])){
   $admin_login_info=  $ssl->Global_admin($_POST);
    }
  }
  
  
  if(isset($_POST['c_account'])){
   $account_status= $ssl->c_account($_POST);
  }if(isset($_POST['login_ac'])){
    $login_info= $ssl->Login($_POST);
  }
  if(isset($_SESSION['UserNumber'])){
   
  }
  if(isset($_GET['logout'])){
  if($_GET['logout']=='sessonoff'){
    $ssl->Logout();
  }
  
  }
  // sent sms
  
  if(isset($_POST['sent_sms'])){
  $sms_popup= $ssl->Sent_sms($_POST);
  }
  
  // users_info
  $all_users= $ssl->Users_info();
  
  
  if(isset($_POST['update_file_profile'])){
    $update_profile_info=$ssl->Update_profile_picture($_POST);
   
  }
  $loged_user_info= $ssl->loged_user();
  
  if(isset($_GET['action'])){
    if($_GET['action']==='active'){
  $activation_info=$ssl->Activity_active();
  
    }
  }
  
  if(isset($_POST['submit_products'])){
  $product_submit_info= $ssl->Submit_products($_POST);
  }
  // global_cost
  $global_cost= $ssl->Global_cost();
  
  if(isset($_GET['admin_post_del'])){
    if($_GET['admin_post_del']=='del'){
  $admin_post_del= $ssl->Post_del($_GET['id']);
  
    }else{
      print('somthing went error');
    }

  

  }
  if(isset($_GET['delete_user'])){
    $user_delete_admin= $ssl->Delete_user_admin($_GET['id']);
   }

   if(isset($_GET['action_approve'])){
    $data= "7878";
$status_update_post= $ssl->Post_update_status($data);
   }