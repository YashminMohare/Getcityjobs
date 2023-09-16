<!DOCTYPE html>
<?php require_once("database/config.php");

/**/


if (isset($_SESSION['login_sess'])) {
    if ($_SESSION['login_sess'] == "1") {

        $_SESSION['email'] = $email;
        header('Location:home_page.php');
    } else {
        echo "0";
    }
} /**/ ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
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

    <div class="col">
        <?php
        if (isset($_POST['signup'])) {
            extract($_POST);
            if (strlen($fname) < 3) {
                $error[] = 'please enter more than 3 characters in first name';
            }
            if (strlen($fname) > 20) {
                $error[] = 'please enter less than 20 characters in first name';
            }
            if (strlen($lname) < 3) {
                $error[] = 'please enter more than 3 characters in Last name';
            }
            if (strlen($lname) > 20) {
                $error[] = 'please enter less than 20 characters in  last name';
            }
            // if(strlen($recruitername)<3) 
            // {
            //     $error[]= 'please enter more than 3 characters in User name';
            // }
            // if(strlen($recruitername)>20) 
            // {
            //     $error[]= 'please enter less than 20 characters in User name';
            // }
            if (strlen($email) > 50) {
                $error[] = 'Email : max lenght is 50';
            }
            if ($passwordConfirm == '') {
                $error[] = 'please confirm the password';
            }
            if ($password != $passwordConfirm) {
                $error[] = 'Password do not Match';
            }
            if (strlen($password) < 5) {
                $error[] = 'The password is 6 characters long';
            }
            if (strlen($password) > 20) {
                $error[] = 'password : Max lenght 20 characters not allowed';
            }
            $sql = " select * from users where ( email='$email');";
            $res = mysqli_query($dbc, $sql);
            if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                // if($recruitername==$row['recruitername']) 
                // {
                //     $error[] = 'recruitername already Exists.';
                // }
                if ($email == $row['email']) {
                    $error[] = 'Email already Exists';
                }
            }
            if (!isset($error)) {
                $date = date('Y-m-d');
                $options = array("cost" => 4);
                $password = password_hash($password, PASSWORD_BCRYPT, $options);
                $result = mysqli_query($dbc, "INSERT INTO users values('','$fname','$lname','$email','$gender','$experience','$qualification','$aqualification','$password','$date')");
                if ($result) {
                    $done = 2;
                } else {
                    $error[] = 'Failed : Somethimg went Wrong';
                }
            }
        }
        ?>
        <div class="container">
            <div class="col">
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<p class ="errmsg" style="display: flex;
                        justify-content: center;
            align-items: center;
            background: red;
            padding: 5px 8px;
            width: 100%;
            border-radius: 4px;
            color: blanchedalmond; margin:5px 10px;">&#x26A0;' . $error . '</p>';
                    }
                }
                ?>
            </div>




            <?php if (isset($done)) {
                header("location:login.php");
            } else { ?>
                <h2>Sign-up </h2>

                <!-- <hr class ="hr-design"> -->

                <div class="form-container">
                    <form method="post">
                        <div class="input-name">
                            <label for="fname">First Name*</label>
                            <input type="text" name="fname" placeholder="Enter Your First Name" value="<?php if (isset($error)) {
                                                                                                            echo $fname;
                                                                                                        } ?>" class="name" required>
                        </div>
                        <div class="input-name">
                            <label for="lname">Last Name*</label>
                            <input type="text" name="lname" placeholder="Enter Your Last Name" value="<?php if (isset($error)) {
                                                                                                            echo $lname;
                                                                                                        } ?>" class="name" required>
                        </div>
                        <div class="input-name">
                            <label for="email">Email*</label>
                            <input type="email" name="email" placeholder="Enter Your Email Address" value="<?php if (isset($error)) {
                                                                                                            echo $email;
                                                                                                        } ?>" class="text-name" required>
                        </div>
                        <div class="input-name">
                            <label>Gender*</label>
                            <input type="radio" name="gender" value="Male" class="radio-button" required> Male
                            <input type="radio" name="gender" value="female" class="radio-button" required> Female
                            <input type="radio" name="gender" value="other" class="radio-button" required> Other
                        </div>
                        <div class="input-name">
                            <label>Experience</label>
                            <input type="text" name="experience" placeholder="How much Experience you have *for jobseeker*" value="<?php if (isset($error)) {
                                                                                                                                        echo $experience;
                                                                                                                                    } ?>" class="name" >
                        </div>
                        <div class="input-name">
                            <label>Highest Qualification</label>
                            <input type="text" name="qualification" placeholder="Enter Your Highest Qualification *for jobseeker*" value="<?php if (isset($error)) {
                                                                                                                                                echo $qualification;
                                                                                                                                            } ?>" class="name">
                        </div>
                        <div class="input-name">
                            <label>Additional Qualification</label>
                            <input type="text" name="aqualification" placeholder="Enter Your Additional Qualification *for jobseeker*" value="<?php if (isset($error)) {
                                                                                                                                                    echo $aqualification;
                                                                                                                                                } ?>" class="name">
                        </div>
                        <div class="input-name">
                            <label for="password">Password*</label>
                            <input type="password" name="password" id="password" placeholder="Enter Your Password" class="text-name">
                            <input type="checkbox" style=" margin-top: 25px; " id="showPassword"> Show password
                        </div>

                        <div class="input-name">
                            <label for="passwordConfirm">Confirm Password*</label>
                            <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Your Password" class="text-name">
                            <input type="checkbox" style=" margin-top: 25px; "id="showPasswordConfirm"> Show password
                        </div>

                        <div class="input-name">
                            <button type="submit" name="signup" class="button">Sign-up</button>
                        </div>
                        <div class="loginlink">
                            <div>
                                <p> Have an Account ?</p>
                            </div>

                            <div> <a href="login.php">Login</a></div>
                        </div>
                    <?php } ?>
                    </form>
                </div>
        </div>

<script>
    const passwordInput = document.getElementById('password');
const passwordConfirmInput = document.getElementById('passwordConfirm');

const showPasswordCheckbox = document.getElementById('showPassword');
const showPasswordConfirmCheckbox = document.getElementById('showPasswordConfirm');

showPasswordCheckbox.addEventListener('change', function() {
  if (showPasswordCheckbox.checked) {
    passwordInput.type = 'text';
  } else {
    passwordInput.type = 'password';
  }
});

showPasswordConfirmCheckbox.addEventListener('change', function() {
  if (showPasswordConfirmCheckbox.checked) {
    passwordConfirmInput.type = 'text';
  } else {
    passwordConfirmInput.type = 'password';
  }
});

</script>
</body>
<?php
require_once("footer.php");
?>

</html>