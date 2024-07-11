<?php
class sslcontrols{

private $conn;

// database connection
public function __construct()
{

   $this->conn=mysqli_connect('sql212.infinityfree.com' ,'if0_35816336', 'l9nZWfB79X' ,'if0_35816336_ssbcontrols');

   if(!$this->conn){
    die('Somthing went wrong with DB');
   }



 

}
//    creat_account function
public function c_account($data)
{
    
$full_name= $data['full_name'];
$mobile_number= $data['mobile_number'];
$password_data= $data['password'];
$time_data= date('d-m-y');
$query_c= "INSERT INTO `users`(`Id`, `Full_name`, `Mobile_number`, `Password`, `Created_at`, `File_name`) VALUES (null,'$full_name','$mobile_number','$password_data', '$time_data','Profile.jpg')";

// $query_v = "SELECT * FROM `users` WHERE `Mobile_number`= '$mobile_number'";
// $res=mysqli_query($this->conn, $query_v);
// $result= mysqli_fetch_assoc($res);

if(!empty($mobile_number) && !empty($password_data)){



$query_v="SELECT * FROM `users` WHERE `Mobile_number`= '$mobile_number' && `Password`='$password_data'";
$res= mysqli_query($this->conn, $query_v);
$ac_chack= mysqli_num_rows($res);

if($ac_chack > 0){
    return 'Account Already Exist Try to login';
}else{
    if(mysqli_query($this->conn, $query_c)){
        return "Account Created Successfully";
    }
}




    


}else{
    return "Fill the input field";
}


}


public function Login($data){

    $mobile_number= $data['mobile_number'];
    $password_data= $data['password'];
    $query_v="SELECT * FROM `users` WHERE `Mobile_number`= '$mobile_number' && `Password`='$password_data'";




$res= mysqli_query($this->conn, $query_v);
$ac_chack= mysqli_num_rows($res);

if($ac_chack > 0){
  
$result= mysqli_fetch_assoc($res);

$_SESSION['UserNumber']=$result['Mobile_number'];


}else{
    
    return 'Account not found';
}


}
public function Logout(){
    unset($_SESSION['UserNumber']);
unset($_SESSION['Admin_detum']);
}
public function Users_info(){

    $query="SELECT * FROM `users`";
    $res= mysqli_query($this->conn, $query);
   
    return $res;

}
public function Sent_sms($data){
    $time_data= date('h:m:s');
    $sms_info= $data['sms_info'];

$sms_sender= $this->loged_user();
 $sms_sender_name=$sms_sender['Full_name'];

    $query="INSERT INTO `sms_team`(`Id`, `Text_info`, `Created_at`, `Full_name`) VALUES (null,'$sms_info','$time_data' ,'$sms_sender_name')";

    if(mysqli_query($this->conn, $query)){
        return "Text sent Successfully";
    }
    else{
        return "somthing went wrong";
    }
    
    print($sms_info);

}

// admin login



// end login
public function Get_all_sms()
{
    $query = "SELECT * FROM `sms_team` ORDER BY id DESC";

    if(mysqli_query($this->conn, $query)){
        return mysqli_query($this->conn, $query);
    }
}
public function Update_profile_picture($data){
    $file_name= $_FILES['update_avater_file']['name'];
    $file_tmp=$_FILES['update_avater_file']['tmp_name'];
    
    if(isset($_SESSION['UserNumber'])){
        $user_number= $_SESSION['UserNumber'];
    }

    $query="UPDATE `users` SET `File_name`='$file_name' WHERE `Mobile_number`='$user_number'";

    if(mysqli_query($this->conn, $query)){
       $upload_info= move_uploaded_file($file_tmp, 'Components/Uploads/'.$file_name);
       if($upload_info){
        return "Profile Updated Successfully";
       }else{
        return "Somthing went error to update";
       }
    }else {
        return "Somthing went error";
    }
}


public function loged_user(){
    if(isset($_SESSION['UserNumber'])){
        $loged_user_id= $_SESSION['UserNumber'];

        $query ="SELECT * FROM `users` WHERE `Mobile_number`='$loged_user_id'";
        $res=mysqli_query($this->conn, $query);
        $result= mysqli_fetch_assoc($res);
    
        return $result;
    }



}
public function Activity_active(){
    $loged_user_id= $_SESSION['UserNumber'];
    $root_activity_code= $this->loged_user();
    $root_code=$root_activity_code['Activity'];

   if(isset($root_code)){
    if($root_code==1){
        $active_info=0;

    }elseif($root_code==0){
        $active_info=1;
    }
   }
    
    $query="UPDATE `users` SET `Activity`='$active_info' WHERE `Mobile_number`='$loged_user_id'";
    if(mysqli_query($this->conn, $query)){


    if($active_info===1){
        return 'Your Account now activated';
    }else{
        return "Your Account Hasbeen deactivated";
    }
        

    }
}
public function Submit_products($data){

  

//    product_prices


$product_1=$data['product_1'];

if(empty($data['price_1'])){
    $price_1=0;
}else{
    $price_1=$data['price_1'];
}

$product_2=$data['product_2'];
if(empty($data['price_2'])){
    $price_2=0;
}else{
    $price_2=$data['price_2'];
}

$product_3=$data['product_3'];
if(empty($data['price_3'])){
    $price_3=0;
}else{
    $price_3=$data['price_3'];
}

$product_4=$data['product_4'];
if(empty($data['price_4'])){
    $price_4=0;
}else{
    $price_4=$data['price_4'];
}

$product_5=$data['product_5'];
if(empty($data['price_5'])){
    $price_5=0;
}else{
    $price_5=$data['price_5'];
}

$product_6=$data['product_6'];
if(empty($data['price_6'])){
    $price_6=0;
}else{
    $price_6=$data['price_6'];
}

$product_7=$data['product_7'];
if(empty($data['price_7'])){
    $price_7=0;
}else{
    $price_7=$data['price_7'];
}



// extra somthing
// mobile or others

$submit_author= $this->loged_user();
$submited_by=$submit_author['Full_name'];
$mobile_number=$submit_author['Mobile_number'];
$user_img= $submit_author['File_name'];

$Inserted_time=date('d-m-y');



if(!empty($price_1)){
    // $total;
    // switch($total){
    //     case empty($price_1):
    //         $price_1=0;
    //         break;
    //         case empty($price_2):
    //             $price_2=0;
    //             break;
    //             case empty($price_3):
    //                 $price_3=0;
    //                 break;
    //                 case empty($price_4):
    //                     $price_4=0;
    //                     break;
    //                     case empty($price_5):
    //                         $price_5=0;
    //                         break;
    //                         case empty($price_6):
    //                             $price_6=0;
    //                             break;
    //                             case empty($price_7):
    //                                 $price_7=0;
    //                                 break;
    // }
 
    $total= $price_1+$price_3+$price_2+$price_4+$price_5+$price_6+$price_7;

    $query="INSERT INTO `global_cost_info`(`Id`, `Product_1`, `Product_2`, `Product_3`, `Product_4`, `Product_5`, `Product_6`, `Product_7`, `Price_1`, `Price_2`, `Price_3`, `Price_4`, `Price_5`, `Price_6`, `Price_7`, `Created_at`, `Submited_by`, `Mobile_number`, `Action`,`Total`, `Img_submit_by`) VALUES (null,'$product_1','$product_2','$product_3','$product_4','$product_5','$product_6','$product_7','$price_1','$price_2','$price_3','$price_4','$price_5','$price_6','$price_7','$Inserted_time','$submited_by','$mobile_number','4343', '$total', '$user_img')";

    if(mysqli_query($this->conn, $query)){
        return "Products information Inserted successfully";
    }else{
        return "Somthing went wrong!";
    }
}else{
    return "Fill the products and it's fields";
}



}
public function Global_cost()
{
    $query="SELECT * FROM `global_cost_info` ORDER BY Id DESC";
      $result=mysqli_query($this->conn, $query);
   
      return $result;

}


public function Get_global_cost_info($id){ 
    $todos_number=$id;
$query="SELECT * FROM `global_cost_info` WHERE `Id`='$todos_number'";
$res=mysqli_query($this->conn, $query);
$result=mysqli_fetch_assoc($res);

if($result){
    return $result;

}else{
    return "Somthing Went Error";
}

}              
// public function Root_login($data){
//     $admin_name=$data['admin_number'];
//     $admin_pass=$data['admin_password'];

//     $query_find_data= "SELECT * FROM `admin_login` WHERE `admin_number`='$admin_name' && `admin_pass`='$admin_pass'";
//     $res= mysqli_query($this->conn, $query);
//     $result= mysqli_num_rows($res);
//     if($result > 0){
//     print('Foind admin');
//     }else{
//         print('not foind');
//     }
// }    





public function Global_admin($data){
    $admin_number=$data['admin_number'];
    $admin_pass=$data['admin_password'];
    $query="SELECT * FROM `admin_login` WHERE `Admin_number`='$admin_number' && `Admin_pass`='$admin_pass'";
    $res=mysqli_query($this->conn, $query);
    $result= mysqli_num_rows($res);
    $sesson_admin= mysqli_fetch_assoc($res);

    if($result){
$_SESSION['Admin_detum']=$sesson_admin['Admin_name'];

        return 'Welcome to admin section';
    }else{
        return 'Admin not found';
    }
}
public function Deposit(){
    $query="SELECT SUM(`Total`) FROM `global_cost_info`";
    $res=mysqli_query($this->conn,$query);
    $result = mysqli_fetch_row($res);
    return $result;
}public function Rows(){
    $query="SELECT * FROM `global_cost_info`";
    $res = mysqli_query($this->conn, $query);
    $result=mysqli_num_rows($res);
    return $result;
}
public function Post_del($id){
    $query= "DELETE FROM `global_cost_info` WHERE `Id`='$id'";
    $res=mysqli_query($this->conn, $query);
    if($res){
        return "Post Deleted successfully";
    }
}
public function Delete_user_admin($id){
 $query="DELETE FROM `users` WHERE `Id`=$id";
if(mysqli_query($this->conn, $query)){
    return "User " .$id. " Hasbeen Deleted";
}else{
    return "somthing went to delete";
}
}

public function Post_update_status($data){
    $query="UPDATE `global_cost_info` SET `Action`='$data'";
    if(mysqli_query($this->conn, $query)){
  return "Updated successfully";
    }
}

}



?>
