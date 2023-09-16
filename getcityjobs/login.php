<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/all_form_type4.css">
    <link rel="stylesheet" href="css/user_nav2.css">
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


        <?php
        require_once("database/config.php");
       
      


        if (isset($_SESSION['login_sess'])) {
            if ($_SESSION['login_sess'] == "1") {
                header('Location:home_page.php');
            } else {
                echo "0";
            }
        }


        if (isset($_GET['loginerror'])) {
            $loginerror = $_GET['loginerror'];
        }
        if (!empty($loginerror)) {
            $error = 'Invalid login credentials please Try again..';
            echo '<p class ="errmsg" style="display: flex;
        justify-content: center;
        align-items: center;
        background: red;
        padding: 5px 8px;
        width: 100%;
        border-radius: 4px;
        color: blanchedalmond; margin:5px 10px;">' . $error . '</p>';
        }
        ?>
        <h2>Login</h2>

        <div class="form-container">
            <form action="login_process.php" method="POST">
                <div class="input-name">
                    <label> Email</label>
                    <input type="email" placeholder="Enter Your Email id "name="login_var" value="<?php if (!empty($loginerror)) {
                                                                    echo $loginerror;
                                                                } ?>" class="text-name">
                </div>
                <div class="input-name">
                    <label>Password</label>
                    <input type="password" id="password" placeholder="Enter Your Password " name="password" class="text-name">
                    <input type="checkbox" onclick="showPassword()" style=" margin-top: 35px; ">  Show Password
                </div>
                <div class="input-name">
                    <button type="submit" name="sublogin" class="button" >Login</button>
                </div>
                <div class="loginlink">
                    <a href="forgot-password.php">Forget Password ?</a>
                </div>
                <br>
                <div class="loginlink">
                    <p>Don't Have any account ?</p>
                    <a href="signup.php">Sign-up</a>
                </div>
            </form>

        </div>
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

<?php 
 require_once("footer.php");
?>
</html>

