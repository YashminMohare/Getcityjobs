<?php

require_once("database/config.php");
require_once("about_con_nav.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>Preview About</title>
</head>

<body>
<?php include("Loader.php");?>

    <div class="wrapper">

        <div class="background-container">
            <div class="bg-1"></div>
            <div class="bg-2"></div>

        </div>
        <div class="about-container">

            <div class="image-container">
                <img src="img/aboutuspng.png" alt="contactusimg">

            </div>

            <div class="text-container">

                <h1>About us</h1>

                <p style="text-align: justify;">Welcome to our website ! We are a team of passionate individuals who have created this platform to help job seekers find employment opportunities and employers to hire talented individuals. Our team comprises students from <span style="color:#c01ddc;">Government Polytechnic College Balaghat MP </span>, including <span style="color:#c01ddc;">Himanshu Shrirang, Yashmin Mohare, Prateek Rangire, Kanchana Rahangdale, Muskan Lilhare, Vidhya Rahangdale, Ayush Jaitwar, and Yukti Basene.</span> a collective goal of bridging the gap between job seekers and employers, we have created a user-friendly platform that is easy to navigate and allows job seekers to explore various job opportunities across different sectors. We understand the challenges that job seekers face in the current job market and strive to provide a platform that makes the job search process efficient and effective.</p>

            </div>

        </div>

    </div>
    </div>

</body>
<?php 
 require_once("footer.php");
?>
</html>