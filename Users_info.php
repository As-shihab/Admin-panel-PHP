<table class="table bg-none">
    <thead>
        <tr><th>
            Profile
        </th>
            <th>Name</th>
            <th>Mobile Number</th>
            <th>Since</th>
            <th>Paid</th>
            <th>Due</th>
            <th>Action</th>
        </tr>
        
    </thead>
    <tbody>
        <?php 
while( $todo= mysqli_fetch_assoc($all_users)){



        
        ?>
        <tr><td><div class="user_profile">            <img src="Components/Uploads/<?php if(isset($todo) > 0){echo $todo['File_name'];} else{echo 'profile.jpg'; }?>" alt=""></div></td>
            <td><?php echo $todo['Full_name'] ?></td>
            <td><?php echo $todo['Mobile_number']; ?></td>
            <td><?php echo $todo['Created_at']; ?></td>
            <td><?php echo $todo['Paid']; ?></td>
            <td><?php echo $todo['Due']; ?></td>
            <td><button class="btn btn-outline-info btn-sm"><i class="fa fa-user"></i></button><button class="btn btn-sm btn-outline-primary"><i class="fa fa-sms"></i></button></td>
        </tr>
        <?php } ?>
    </tbody>
</table>