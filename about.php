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
                    <a class="nav-link active" href="#">About</a>
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
    <!-- About section starts here -->
    <div class="container-fluid about-section">
        <h2>About me</h2>
        <p>Software Developer with a passion for building innovative and user-friendly software applications. Expertise in Python, Django, and React. Proven ability to deliver high-quality software on time and within budget. Expertise in Agile development methodologies and best practices. Strong problem-solving and analytical skills. Ability to work independently and as part of a team to deliver high-impact projects. I am always looking for new challenges and opportunities to learn and grow.
            I have over 5 years of experience in software development, and I have worked on a variety of projects, from small websites to large-scale enterprise applications. I have a deep understanding of the software development lifecycle, and I am proficient in all aspects of software development, from requirements gathering to design, development, testing, and deployment.
            I am also a strong advocate for Agile development methodologies. I believe that Agile is the best way to develop software because it allows teams to be more responsive to change and to deliver working software to users quickly and efficiently.
            I am passionate about using technology to solve real-world problems. I am always looking for new ways to use technology to make people's lives easier and more efficient. I am also a strong believer in open source software, and I am actively involved in the open source community.
            I am a highly motivated and results-oriented individual with a strong work ethic. I am also a team player and I am always willing to go the extra mile to help my team succeed.
            I am confident that I have the skills and experience necessary to be a valuable asset to your team. I am eager to learn and grow, and I am excited about the opportunity to contribute to your company's success.
        </p>
    </div>


<!-- About sectio ends here -->

</body>
</html>