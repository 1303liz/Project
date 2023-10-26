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
                            <a class="nav-link " aria-current="page" href="welcome.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">Services</a>
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
            <!-- Services Section -->
            <div class="container mt-5">
                <h2>Services</h2>
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="card bg-success">
                            <!-- <img src="service-image-1.jpg" class="card-img-top" alt="Service 1"> -->
                            <div class="card-body ">
                                <h5 class="card-title">Web Development (Django)</h5>
                                <p class="card-text">I offer comprehensive web development services, 
                                    encompassing a wide spectrum of skills and technologies. With a strong background 
                                    in front-end and back-end development, I specialize in creating responsive and user-friendly 
                                    websites and web applications. My services include database management, user interface design,
                                    and ensuring websites adhere to web standards and current industry trends. 
                                    I take pride in delivering exceptional 
                                    online experiences and custom web solutions that meet the unique needs of my clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card bg-warning">
                            <!-- <img src="service-image-2.jpg" class="card-img-top" alt="Service 2"> -->
                            <div class="card-body">
                                <h5 class="card-title">Mobile development</h5>
                                <p class="card-text ">As a mobile app developer, I specialize in creating cross-platform mobile applications using 
                                    Flutter. With a deep understanding of this versatile framework, I develop high-quality, 
                                    native-like applications for both iOS and Android. My expertise includes UI/UX design, 
                                    app development, and maintenance, ensuring that your app is visually appealing, performs seamlessly, 
                                    and delivers a great user experience. I'm dedicated 
                                    to turning your app ideas into reality and providing solutions that stand out in today's 
                                    competitive mobile landscape</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card bg-primary">
                            <!-- <img src="service-image-3.jpg" class="card-img-top" alt="Service 3"> -->
                            <div class="card-body">
                                <h5 class="card-title">Problem-solving</h5>
                                <p class="card-text">I offer professional C programming problem-solving services. 
                                    With a deep understanding of the C language, I can help you tackle complex programming challenges, 
                                    debug code, and optimize algorithms. Whether you're a student seeking assistance with assignments or a 
                                    developer facing coding hurdles, I provide effective solutions that enhance code efficiency and clarity. 
                                    Count on my expertise to guide you through 
                                    C programming challenges and to deliver reliable and efficient solutions
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>