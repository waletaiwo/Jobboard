
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicon cdn link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>JobLab</title>
</head>
<body>
    <!-- Nav Start -->
    <nav>   
          <div id="navigation" class="navbar">
            <i class="bx bx-menu"></i>
            <div class="nav-logo"><a href="index.php">JobLab</a></div>
             
            <div class="nav-links-wrapper">
              <div class="nav-menu-close-btn">
                <i class="bx bx-x"></i>
              </div>
              <ul class="nav-link">
                <li>
                  <a href="index.php">Home</a>
                </li>

                <li>
                 <a href="create.php">Post Job</a>
                </li>
                <li>
                 <a href="about.php">About Us</a>
                </li>
                <li>   
                  <a href="contact.php">Contact</a> 
                </li>
                <li>
                  <a href="registration.php">Register</a>
                </li>
              </ul>
            </div>
            <div>        
               <a id="modal-open" class="sign-in">Sign In</a>
             </div>
            
           </div>
</nav>
<?php displayMessage(); ?>



<!-- End Navigation -->