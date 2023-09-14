
<?php include "inc/header.php"; ?>
<!-- REGISTRATION AND LOGIN FORM START -->
echo $user;

<section class="reg">
    <div class="container">
      <div class="reg-container">
        <div class="reg-form-one">
        <form  action="login.php" method="POST" class="login-form">
                      <div class="form-control">
                            <?php if (isset($_SESSION['success'])): ?>
                              <p class="success-msg"><?php echo $_SESSION['success']; ?></p>
                              <?php unset($_SESSION['success']); ?>
                            <?php elseif (isset($_SESSION['errors'])): ?>
                              <?php foreach ($_SESSION['errors'] as $error): ?>
                                  <p class="error-msg"><?php echo $error; ?></p>
                              <?php endforeach; ?>
                              <?php unset($_SESSION['errors']); ?>
                          <?php endif; ?>
                        </div>
                        <div class="form-control">
                            <label for="name">Username <span>*</span></label>
                            <input type="text" id="name" name="username" placeholder="Username" class="form-input">
                        </div>
                        
                        <div class="form-control">
                            <label for="name">Password <span>*</span></label>
                            <input type="password" id="password" name="pwd" placeholder="Password" class="form-input">
                        </div>
                        <div class="form-control">
                        <div class="form-check">
                          <div>
                            <input type="checkbox">
                            <span for="">Remember me</span>
                          </div>
                          <div>
                            <a href="#">Lost Your Password?</a>
                          </div>
                        </div>
                        </div>

                        <div class="form-control">
                          <button type="submit" name="login" value="submit" class="login-btn">Login</button>
                        </div>
                    </form>
        </div>
        <div class="reg-form-two">
        <form  action="registration.php" method="POST" class="register-form">
          <div class="form-control">
              <?php if (isset($_SESSION['success'])): ?>
                <p class="success-msg"><?php echo $_SESSION['success']; ?></p>
                <?php unset($_SESSION['success']); ?>
              <?php elseif (isset($_SESSION['errors'])): ?>
                <?php foreach ($_SESSION['errors'] as $error): ?>
                    <p class="error-msg"><?php echo $error; ?></p>
                <?php endforeach; ?>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>
          </div>
          <div class="form-control">
                <label for="name">Username <span>*</span></label>
                <input type="text" id="name" name="username" placeholder="username" class="form-input">
          </div>  
            <div class="form-control">
                <label for="name">Email<span>*</span></label>
                <input type="text" id="email" name="email" placeholder="Email" class="form-input">
            </div>   
            <div class="form-control-outer">
            <div class="form-control">
                <label for="name">Password <span>*</span></label>
                <input type="password" id="password" name="pwd" placeholder="Password" class="form-input">
            </div>
            <div class="form-control">
                <label for="name">Confirm Password <span>*</span></label>
                <input type="password" id="password" name="confirmpwd" placeholder="Confirm Password" class="form-input">
            </div>
            </div>     
            <div class="form-control">
                <p>By registering your details, you agree with our Terms & Conditions, and Privacy and Cookie Policy.</p>
            </div>
            <div class="form-control">
             
            </div>
            <div class="form-control">
              <button type="submit" value="submit" name="submit" class="login-btn">Create An Account</button>
            </div>  
            
        </form>
                   
        </div>
    
      </div>
    </div>
</section>

<!-- REGISTRATION AND LOGIN FORM END -->

<?php include "inc/footer.php"; ?>

<!-- <?php
              // if (isset($errors)) {
              //     foreach ($errors as $error) {
              //         echo "<p class='error-msg'>$error</p>";
              //     }
              // }
              ?>    -->
