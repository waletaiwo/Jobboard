

<!-- Newsletter Start -->

<section class="news-bg">
  <div class="container">
  <div class="news-header">
        <h6>Subscribe now</h6>
        <h2>Get All New Job Notification</h2>
    </div>
    <div class="news-form">
        <form class="form">
            <input type="email" placeholder="Enter Your Email Address">
            <i class='bx bx-envelope'></i>
            <button>Subscribe</button>
        </form>
    </div>
  </div>
</section>

<!-- Newsletter End -->

<!-- Footer Start -->
<!-- <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-widget">
            <h4 class="footer-widget-title">For Employers</h4>
                  <ul class="footer-menu">
                    <li><a href="#">Explore Candidates</a></li>
                    <li><a href="#">Job Pricing</a></li>
                    <li><a href="#">Submit Job</a></li>
                    <li><a href="#">Shortlisted</a></li>
                    
                  </ul>
            </div>
            <div class="footer-widget">
                  <h4 class="footer-widget-title">For Candidates</h4>
                  <ul class="footer-menu">
                    <li><a href="#">Explore All Jobs</a></li>
                    <li><a href="#">Browse Categories</a></li>
                    <li><a href="#">Saved Jobs</a></li>
                  
                  </ul>
            </div>
            <div class="footer-widget">
                  <h4 class="footer-widget-title">About Company</h4>
                  <ul class="footer-menu">
                    <li><a href="#">Who We're?</a></li>
                    <li><a href="#">Our Mission</a></li>
                    <li><a href="#">Our team</a></li>
                    <li><a href="#">Packages</a></li>
                  </ul>
            </div>
            <div class="footer-widget">
                  <h4 class="footer-widget-title">Helpful Topics</h4>
                  <ul class="footer-menu">
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ's Page</a></li>
                    <li><a href="#">Privacy</a></li>
                  </ul>
            </div>
        </div>
    </div>
</footer> -->

<!-- Footer End -->

<!-- Login Modal -->
<div class="modal-container" id="modal">
        <div class="modal">
            <button class="close-btn" id="modal-close">
            <i class="bx bx-x"></i> 
            </button>
            
            <div class="modal-content">
                   <div class="modal-header">
                   <h2>Login</h2>
                   </div>
                    <form action="registration.php" method="POST" class="modal-form">
                        <div class="form-control">
                            <label for="name">Username</label>
                            <input type="text" id="name" name="username" placeholder="Username" class="form-input">
                        </div>
                        
                        <div class="form-control">
                            <label for="name">Password</label>
                            <input type="password" id="password" name="pwd" placeholder="Password" class="form-input">
                        </div>
                        <div class="form-control">
                        <div class="form-check">
                          <div>
                            <input type="checkbox">
                            <span >Remember me</span>
                          </div>
                          <div>
                            <a href="#">Lost Your Password?</a>
                          </div>
                        </div>
                        </div>

                        <div class="form-control">
                          <button type="submit" value="submit" name="login" class="login-btn">Login</button>
                        </div>

                        <div class="form-control">
                          <p class="text-center">Not a member? <a href="registration.php">Register</a></p>
                        </div>
  
                    </form>
                </div>
        </div>
    </div>
    <!-- Login Modal End -->

<script src="script.js"></script>
</body>
</html>