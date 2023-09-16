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
  <link rel="stylesheet" href="css/contactus1.css">
  <title>Preview About</title>
</head>

<body>
  <?php include("Loader.php"); ?>

  <div class="wrapper">

    <div class="background-container">
      <div class="bg-1"></div>
      <div class="bg-2"></div>

    </div>
    <div class="about-container">

      <div class="image-container">
        <img style="margin-bottom: 150px;" src="img/contactuspng.png" alt="contactusimg">

      </div>

      <div class="text-container">
        <style>
          .blin {
            animation: blinker .8s linear infinite;
          }

          @keyframes blinker {
            50% {
              opacity: 0;
            }
          }
        </style>
        <h1>Contact us</h1>

        <p style="text-align: justify;"><span style="color:green;">Thank you </span>for visiting our website. We value your feedback and suggestions on how we can improve our platform to better serve you. If you have any questions, comments, or concerns, please do not hesitate to contact us and if you are facing any problem related to signup, login or creating your account, then you can immediately call or whatsapp message or email us and our team will solve your problem immediately and if you want, we can create your account as well. Will give Also, if you are facing any problem in any stage, then we will try our best to solve it. Thank you for choosing our website for your job search and hiring needs. </p>
        
        <br>
        <div style="margin-top:20px;">
          <p>
            
            <i class='bx bx-phone-call bx-tada'></i> Call :<a href="tel:+919301634942" style="text-decoration:none" target="_blank" class="blink"></i>9301634942</a>
            
            <br>
            
            <i class='bx bx-message bx-tada'></i> Text Message :<a href="sms:+919301634942" style="text-decoration:none" target="_blank" class="blink"> 9301634942</a>
            
            <br>
            
            <i class='bx bxl-whatsapp bx-tada'></i> Whatsapp Message :<a href="https://wa.me/919301634942" style="text-decoration:none" target="_blank" class="blink"> 9301634942</a>
            
            <br>

            <i class='bx bx-envelope bx-tada'></i> Emai : <a style="text-decoration:none" href="yashminmohare123@gmail.com" target="_blank" class="blink">yashminmohare123@gamil.com</i></a>
            
            <br>

            
        </div>


        <!-- <div class="text-container">

                    <a href="https://www.instagram.com" target="_blank"><i class='bx bx-envelope bx-tada' ></i></a>


                    <a href="https://www.facebook.com" target="_blank"><i class='bx bxl-facebook-circle'></i></a>


                    <a href="https://www.twitter.com" target="_blank"><i class='bx bxl-twitter'></i></i></a>
                </div> -->

      </div>

    </div>
  </div>

</body>
<?php
require_once("footer.php");
?>

</html>