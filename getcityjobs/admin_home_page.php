<!DOCTYPE html>
<?php include("database/config.php");
include("admin_nav.php");
// ......................................

if(!isset($_SESSION['login_admin'])){

header('Location:admin_login.php');

} 
// .......................................

?>
<html>

<head>
   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/admin_home_page1.css">
   
   <script src="js/dark_togg.js"></script>


</head>

<body>
<?php include("Loader.php");?>

   <section style="margin-left: 105px;">
      <div class="left">
         
               <h1 id="heading"><span class="typing"></span><span class="backspace"></span><span class="blink">|</span>
               </h1>
               <script>
                  var typingElement = document.querySelector('.typing');
                  var backspaceElement = document.querySelector('.backspace');
                  var heading = document.getElementById("heading");
                  var text = ["NOW ! you can make any CHANGES in this Website.", "You can EDIT & DELETE User's Account !", "Also You can EDIT & DELETE the Job Post !"];
                  var words, lastWord, i = 0, j = 0, isBackspacing = false;
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
                        setTimeout(typeEffect, 5000 / 200); // 5000ms for 30 wpm
                     } else if (i === words.length - 1 && !isBackspacing) {
                        typingElement.innerHTML += words[i];
                        i++;


                        setTimeout(typeEffect, 5000 / 60);
                     } else if (j < lastWord.length && isBackspacing) {
                        backspaceElement.innerHTML += lastWord.charAt(j);
                        typingElement.innerHTML = typingElement.innerHTML.substring(0, typingElement.innerHTML.length - 1);
                        j++;
                        setTimeout(typeEffect, 5000 / 30); // 5000ms for 30 wpm
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

                  setTimeout(function () {
                     typeEffect();
                  });
               </script>

               <p style="text-align: justify; color: rgb(107, 109, 108);" >The admin user is able to handle their account and job posts, but they cannot change the user's ID.
                  The admin should understand their responsibilities and only do necessary actions, avoiding any
                  unnecessary changes.</p>
               
      </div>
      <div style="margin-right: 75px;" class="right">
         <img src="img/adminpagepng.png" class="img-big">
      </div>
   </section>

</body>

</html>