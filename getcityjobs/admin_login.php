<?php
        require_once("database/config.php");
           /* paste below code --------------------------- */
if(isset($_SESSION['login_admin'])){
if($_SESSION['login_admin']=="1"){

header('Location:admin_home_page.php');
}
else{
echo "0";
}
}  
/*------------------------------------*/?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/all_form_type4.css">
    <link rel="stylesheet" type="text/css" href="css/user_nav2.css">
    <link rel="stylesheet" href="css/language.css">
    <script src="js/language.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>
<div style=" margin-top:20px;">
<a href="javascript:history.back()" style=" 
    background-color:rgb(16, 182, 16);
    color: #fff;
    padding: 10px 20px;
    margin:30px;
 
    border: none;
    border-radius: 5px;
    font-size: 11px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out; 
    text-decoration:none; color:#fff">Back</a>
</div>
<?php include("Loader.php");?>

    <div class="container">
        <h2>Admin Login</h2>

        <form method="post">
            <div class="input-name">
                <label>Admin ID</label>
                <input type="text" name="admin_id" placeholder="Enter Admin ID" class="text-name" required>
            </div>

            <div class="input-name">
                <label>Password</label>
                <input type="password" name="admin_pass" id="password" placeholder="Enter Password" class="text-name" required>
                <input type="checkbox" onclick="showPassword()" style=" margin-top: 35px; ">  Show Password

            </div>

            <div class="input-name">
                <button type="submit" name="login" class="button">Login</button>
            </div>
        </form>


        <?php


        // Check connection....
        //if connection was not created....
        if (!$dbc) {
            die("Connection failed: " . mysqli_connect_error());
        }

        //if connection was created....
        // Login form processing....

        if (isset($_POST['login'])) { //cheack - info. availabel or not with the help of isset function....
            $admin_id = $_POST['admin_id'];
            $admin_pass = $_POST['admin_pass'];

            if ($admin_id == 'himanshushrirang4' && $admin_pass == '123@123') { //Predefined Admin ID and Password matching....
              $_SESSION['login_admin']="1";  header("Location:admin_home_page.php"); //if match Admin ID and Password than access of mainpage....
                exit;
            } else { //Admin ID and Password not match...

                echo "<script>
                const errorBox = document.createElement('div');
                errorBox.classList.add('error-box');
                errorBox.innerHTML = '<p> ⚠️ Incorrect Login Information, Please Try Again</p>';
                document.body.appendChild(errorBox);
            </script>";
            }
        }
        ?>
    </div>
</body>
<script>
function showPassword() {
  var passwordInput = document.getElementById("password");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}
</script>
</html>