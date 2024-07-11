<h1>View Global Statics</h1>
<?php 
$get_global_todos=$ssl->Get_global_cost_info($_GET['id']);


?>
<font>Submited by : <?php  if(isset($get_global_todos)){ echo $get_global_todos['Submited_by'];}else{echo "Couldn't Found anything";}?></font><br>
<font>Created Time : <?php  if(isset($get_global_todos)){ echo $get_global_todos['Created_at'];}else{echo "Couldn't Found anything";}?></font><br>
<p>Action : <?php  if(isset($get_global_todos)){if( $get_global_todos['Action']==4343){echo "Processing for getting approved by Admin";}else{echo "Approved";}}else{echo "Couldn't Found anything";}?></p>
<b class=' text-success fw-bold'>Total : <?php  if(isset($get_global_todos)){ echo $get_global_todos['Total'];}else{echo "Couldn't Found anything";}?></b>
<table class="table">
    <thead>
        <tr>
            <th>Products Name</th>
            <th>Price</th>


        </tr>

    </thead>
    <tbody>
        <tr>


        <td>
            <?php  if(isset($get_global_todos)){ echo $get_global_todos['Product_1'];}else{echo "Couldn't Found anything";}?>

        </td>

        <td>
            <?php  if(isset($get_global_todos)){ echo $get_global_todos['Price_1'];}else{echo "Couldn't Found anything";}?>

        </td>
        </tr>


        <tr>

       
<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Product_2'];}else{echo "Couldn't Found anything";}?>

</td>

<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Price_2'];}else{echo "Couldn't Found anything";}?>

</td>
</tr>




<tr>
    

       
<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Product_3'];}else{echo "Couldn't Found anything";}?>

</td>

<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Price_3'];}else{echo "Couldn't Found anything";}?>

</td>
</tr>



<tr>


<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Product_4'];}else{echo "Couldn't Found anything";}?>

</td>

<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Price_4'];}else{echo "Couldn't Found anything";}?>

</td>
</tr>



<tr>

       
<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Product_5'];}else{echo "Couldn't Found anything";}?>

</td>

<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Price_5'];}else{echo "Couldn't Found anything";}?>

</td>

</tr>
<tr>



<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Product_6'];}else{echo "Couldn't Found anything";}?>

</td>

<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Price_6'];}else{echo "Couldn't Found anything";}?>

</td>
</tr>

<tr>



<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Product_7'];}else{echo "Couldn't Found anything";}?>

</td>

<td>
    <?php  if(isset($get_global_todos)){ echo $get_global_todos['Price_7'];}else{echo "Couldn't Found anything";}?>

</td>

</tr>
    </tbody>

</table>