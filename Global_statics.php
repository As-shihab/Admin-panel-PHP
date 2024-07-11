<h1>Global statics</h1>

<br>
<p>Every new cost global cost genarally below here!</p>

<table class='table'>
    <thead>
        <tr>

  
        <th>Submited author</th>
        <th>Hint</th>
        <th>Date</th>
        <th>Total</th>
        <th>Action</th>      </tr>
    </thead>
    <tbody>
        <?php while($global_cost_todos=mysqli_fetch_assoc($global_cost)){
            
        ?>

        <tr>
<td class='fw-bold cursor-pointer'style="cursor:pointer;">
<a style="text-decoration:none;" href="?global_cost_info=view&&id=<?php if(isset($global_cost_todos)){ echo $global_cost_todos['Id'];} ?>"><?php if(isset($global_cost_todos)){ echo $global_cost_todos['Submited_by'];} ?></a>

</td>

<td>
<?php if(isset($global_cost_todos)){ echo $global_cost_todos['Product_1'];} ?>
...
</td> 
<td>
<?php if(isset($global_cost_todos)){ echo $global_cost_todos['Created_at'];} ?>
</td>
<td>
<?php if(isset($global_cost_todos)){ echo $global_cost_todos['Total'];} ?>
</td> 
<td class=' user-select-none text-white <?php if(isset($global_cost_todos)){
    if($global_cost_todos['Action']==7878){
        echo 'bg-success';
    }else
    {
        echo "bg-secondary";
    }
} ?> p-1 rounded text-center '>
<?php if(isset($global_cost_todos)){

if($global_cost_todos['Action']==7878){
    echo 'Approved';
}else
{
echo "Pending";
}
} ?>
</td> 


        </tr>
        <?php }?>
    </tbody>
</table>