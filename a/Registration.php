<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('templates/header1.php');
include_once('link.php');
?>


<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1 class="purple-text" >Your information</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">gender:</label>
    <div class="col-sm-6">
      <input type="text" name="gender" class="form-control" id="gender" placeholder="Enter your gender ">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn  waves-effect waves-light purple white-text">Submit</button>
    </div>
  </div>
</form>
<?php include('templates/footer.php');
 ?>