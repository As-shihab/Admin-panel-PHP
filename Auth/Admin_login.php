

<?php
if(!isset($_SESSION['Admin_detum'])){


?>
<form class="p-5 shadow-lg rounded" method="post">


<h1>Admin Login</h1>
<div class="mb-2">
    <label class="pb-2" for="inputs">Mobile Number</label>
    <input class="form-control" type="number" name="admin_number" placeholder="Type to number">

</div>
<div class="mb-2">
    <label class="pb-2" for="inputs">Mobile Number</label>
    <input class="form-control" type="password" name="admin_password" placeholder="Type to Password">

</div>

<div class="mt-2">
  <input type="submit" value="submit" name="admin_login" class="btn btn-primary">
</div>
</form>
<?php } ?>