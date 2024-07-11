
<?php 
$deposit= $ssl->Deposit();

?>

<div class="d-flex justify-content-between align-items-center">
<div class="shadow-lg p-3 chart_box_container rounded">
    <div class="chart_header d-flex align-items-center justify-content-around">
        <h3 class="p-3">Deposite</h3>
        <font>info</font>
    </div>

    <div class="chart_header d-flex align-items-center justify-content-around">
        <h3>Total</h3>
        <h3 class="fw-bold"><?php if(isset($deposit)){echo $deposit[0];} ?></h5>
    </div>

</div>


<!-- boxes -->

<div class="shadow-lg p-3 chart_box_container rounded">
    <div class="chart_header d-flex align-items-center justify-content-around">
    <h3 class="p-3">Rows</h3>
        <font>info</font>
    </div>

    <div class="chart_header d-flex align-items-center justify-content-around">
        <h3>Total</h3>
        <h3 class="fw-bold"><?php $rows= $ssl->Rows(); if(isset($rows)){ echo $rows;} ?></h5>
    </div>

</div>

<div class="shadow-lg p-3 chart_box_container rounded">
    <div class="chart_header d-flex align-items-center justify-content-around">
    <h3 class="p-3">Due</h3>
        <font>info</font>
    </div>

    <div class="chart_header d-flex align-items-center justify-content-around">
        <h3>Total</h3>
        <h3 class="fw-bold">Null</h5>
    </div>

</div>
</div>