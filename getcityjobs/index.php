<?php
include("database/config.php");
include("nav_for_index.php");

if(isset($_SESSION['login_sess'])){
   if($_SESSION['login_sess']=="1"){
   
   header('Location:home_page.php');
   }
   else{
   echo "0";
   }
   }

?>
<!DOCTYPE html>
<html>

<head>
   <title>index page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/index1.css">
   <script src="js/dark_togg.js"></script>

</head>

<body>
<?php include("Loader.php");?>
   <section>
      <div class="left">
         <h2 class="h2-for-welcome">" Location : Balaghat 481001 "</h2>

         <h1 id="heading"><span class="typing"></span><span class="backspace"></span><span class="blink">|</span></h1>
         <script>
            var typingElement = document.querySelector('.typing');
            var backspaceElement = document.querySelector('.backspace');
            var heading = document.getElementById("heading");
            var text = ["A Platform for Post jobs in Your City !", "A Platform for Get jobs in Your City !", "Easy to USE & Absolutely FREE !"];
            var words, lastWord, i = 0,
               j = 0,
               isBackspacing = false;
            var currentTextIndex = 0;

            function typeEffect() {
               if (currentTextIndex >= text.length) {
                  currentTextIndex = 0;
               }
               words = text[currentTextIndex].split("");
               lastWord = words[words.length - 1];
               if (i < words.length - 1 && !isBackspacing) {
                  typingElement.innerHTML += words[i];
                  i++;
                  setTimeout(typeEffect, 5000 / 200); // 2000ms for 30 wpm
               } else if (i === words.length - 1 && !isBackspacing) {
                  typingElement.innerHTML += words[i];
                  i++;


                  setTimeout(typeEffect, 5000 / 60);
               } else if (j < lastWord.length && isBackspacing) {
                  backspaceElement.innerHTML += lastWord.charAt(j);
                  typingElement.innerHTML = typingElement.innerHTML.substring(0, typingElement.innerHTML.length - 1);
                  j++;
                  setTimeout(typeEffect, 5000 / 30); // 2000ms for 30 wpm
               } else if (j === lastWord.length && isBackspacing) {
                  isBackspacing = false;
                  currentTextIndex++;
                  if (currentTextIndex >= text.length) {
                     currentTextIndex = 0;
                  }
                  typingElement.innerHTML = "";
                  backspaceElement.innerHTML = "";
                  i = 0;
                  j = 0;
                  setTimeout(typeEffect, 80);
               } else {
                  isBackspacing = true;
                  setTimeout(typeEffect, 2000);
               }
            }

            setTimeout(function() {
               typeEffect();
            });
         </script>
         <br><br>
         <p style="text-align: justify;" class="p_color">"Get the biggest and smallest private jobs based on your skills and post your job details for hiring in<b> Balaghat City</b>, Absolutely free of cost." So what is the delay ! Register Now... </p>


         <!-- <div style>
        <a href="view_jobs.php"> <button  class="view-jobs-design"> <b> View Jobs </b></button></a>//link on navbar.php
        <a href="post_jobs.php"><button   class="post-jobs-design"><b> Post Jobs</b></button></a>
         
      </div> -->
      </div>
      <div class="right">
         <img src="img/mainjpg.png" class="img-big">
      </div>
   </section>
</body>
<?php 
 require_once("footer.php");
?>
</html>