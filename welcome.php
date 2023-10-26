<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: register_login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style2.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Lizz</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                  </li>
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li> -->
                  
                </ul>
                <div class="d-flex" role="search">
                    <p>
                        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
                    </p>
                </div>
              </div>
            </div>
          </nav>
    </div>

    <!-- landing section starts here -->

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <h3 class="my-5">Your mail is <?php echo htmlspecialchars($_SESSION["email"]); ?></h3>

    <div class="container-fluid landingpage">
        <div class="lefttext">
            <h2>Eliza Portfolio</h2>
            <h3>Welcome to my portfolio</h3>
            <button class="btn btn-primary">Learn more</button>
        </div>
        <div class="rightimage">
            <img src="images/liz.jpg" alt="" width="600" height="400">
        </div>
    </div>

    <!-- Landing section ends here -->

    

    <!-- Portfolio statistics starts here -->
    <div class="container">
        <div class="row statistics">

            <div class="col-6 col-md-6 col-lg-6">
                <h2>My statistics</h2>
                <table class="table table-hover">
                    <thead>
                        <th>Sn</th>
                        <th>Project name</th>
                        <th>Client</th>
                        <th>Year of design</th>
                        <th>Rating</th>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Eliza Web</td>
                            <td>Junior JSS</td>
                            <td>2023</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Eliza Web</td>
                            <td>Junior JSS</td>
                            <td>2023</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Eliza Web</td>
                            <td>Junior JSS</td>
                            <td>2023</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Eliza Web</td>
                            <td>Junior JSS</td>
                            <td>2023</td>
                            <td>5</td>
                        </tr>
                    </tbody>
        
                </table>
            </div>
        </div>
    </div>
    

    <!-- Footer section starts -->

    <footer class="footer">
        <div class="row">
            <div class="col">
                <a href="#">Eliza</a>
            </div>
            <div class="col socials">
                <h3>Follow me on social media</h3>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col">3</div>
        </div>
        <hr>
        <p class="copyright">&copy; All rights reserved | Eliza | <script>document.write(/\d{4}/.exec(Date())[0])</script></p>
    </footer>
    <!-- Footer section ends -->

</body>
</html>