<!-- Start your project here-->
<div style="height: 100vh">
        <div class="flex-center flex-column">
           <!-- Default form login -->
<!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>
  <?php 
  ?>
  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
  <?php 
        if (isset($_SESSION['error']) && count($_SESSION['error']) > 0): ?>
        <div class="alert <?php echo $_SESSION['error']['clase']; ?> alert-dismissible" role="alert">

        <strong><?php echo $_SESSION['error']['titulo']; ?></strong> <?php echo $_SESSION['error']['mensaje']; ?>
         </div>
        <?php $_SESSION['error'] = array(); ?>
        <?php endif ?>

    <!-- Form -->
    <form class="text-center" style="color: #757575;" method='post' action='dologin.php'>

      <!-- Email -->
      <div class="md-form">
        <input type="email" id="Email" name='email' class="form-control">
        <label for="Email">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="Password" name='password' class="form-control">
        <label for="Password">Password</label>
      </div>



      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

      <!-- Register -->
      <p>Not a member?
        <a href="signup.php">Register</a>
      </p>
      <?php 

$actual_link = 'http://'.$_SERVER['HTTP_HOST'];
echo $actual_link;
        ?>

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->

        </div>

    
    </div>

