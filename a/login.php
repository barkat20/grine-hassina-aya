
<?php
include('templates/header1.php'); 
include_once('link.php');

?>
<section class="container section" id="services">
        <div class="row">
            <div class="col s12 l12">
                <h2 class="purple-text text-darken-4">Login</h2>
                 <div class="col s12" id="sign-in">
                  
<form class="form-horizontal" method="POST" action="login_code.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class=" input-field col-sm-6">
      <i class="material-icons prefix ">email</i>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="input-field col-sm-6"> 
      <i class="material-icons prefix ">lock</i>
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn  waves-effect waves-light purple white-text">Login</button>
    </div>
  </div>
</form>

                </div>
            </div>
            
            </div>
  
        </div>
  
    </section>

<?php include('templates/footer.php');
 ?>
