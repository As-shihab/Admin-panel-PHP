


<table class="table bg-none">
    <h5>Users</h5>
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
        <tr><td><div class="user_profile">            <img src="Components/Uploads/<?php if(isset($loged_user_info)){echo $loged_user_info['File_name'];}else{echo 'profile.jpg'; }?>" alt=""></div></td>
            <td><?php echo $todo['Full_name'] ?></td>
            <td><?php echo $todo['Mobile_number']; ?></td>
            <td><?php echo $todo['Created_at']; ?></td>
            <td><?php echo $todo['Paid']; ?></td>
            <td><?php echo $todo['Due']; ?></td>
            <td><a href="?admin_action"><button class="btn btn-outline-info btn-sm">Edit</button></a> <a href="?delete_user=active&&id=<?php echo $todo['Id']; ?>"><button class="btn btn-sm btn-outline-danger">Delete</button></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>