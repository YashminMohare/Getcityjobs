<?php require_once("database/config.php");


if (!isset($_SESSION["login_sess"])) {
    header("location:login.php");
}
$email = $_SESSION["login_email"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/all_form_type4.css">
    <link rel="stylesheet" href="css/user_nav2.css">
    <link rel="stylesheet" href="css/language.css">
    <script src="js/language.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>

<body>
<?php include("Loader.php");?>
<div style=" margin-top:20px;">

<a href="javascript:history.back()" style=" 
    background-color:rgb(16, 182, 16);
    color: #fff;
    padding: 10px 20px; 
    margin:10px;
    margin-top:10px;
    border: none;
    border-radius: 5px;
    font-size: 11px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out; 
    text-decoration:none; color:#fff">Back</a>

    <button style=" 
    background-color: #8338e4;
    color: #fff;
    padding: 10px 20px;
    margin:10px;
    margin-top:10px;
    border: none;
    border-radius: 5px;
    font-size: 11px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out; 
    "><a href="home_page.php" style="text-decoration:none; color:#fff">HOME</a></button>

</div>
    <div class="container">
        <div class="col">
            <form action="" method="POST">
                <h2 style="text-align:center;">Change Password</h2>
                <?php
                if (isset($_POST['change_password'])) {
                    $currentPassword = $_POST['currentPassword'];
                    $password = $_POST['password'];
                    $passwordConfirm = $_POST['passwordConfirm'];
                    $sql = "SELECT password from users where email='$email'";
                    $res = mysqli_query($dbc, $sql);
                    $row = mysqli_fetch_assoc($res);
                    if (password_verify($currentPassword, $row['password'])) {
                        if ($passwordConfirm == '') {
                            $error[] = 'Please confirm the password.';
                        }
                        if ($password != $passwordConfirm) {
                            $error[] = 'Passwords do not match.';
                        }
                        if (strlen($password) < 5) {
                            $error[] = 'The password is 6 characters long.';
                        }
                        if (strlen($password) > 20) {
                            $error[] = 'Password: Max length 20 Characters Not allowed';
                        }
                        if (!isset($error)) {
                            $options = array("cost" => 4);
                            $password = password_hash($password, PASSWORD_BCRYPT, $options);
                            $result = mysqli_query($dbc, "UPDATE users SET password='$password' WHERE email='$email'");
                            if ($result) {
                                header("location:account.php?password_updated=1");
                            } else {
                                $error[] = 'Something went wrong';
                            }
                        }
                    } else {
                        $error[] = 'Current password does not match.';
                    }
                }
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<p class="errmsg" style="display: flex;
        justify-content: center;
        align-items: center;
        background: red;
        padding: 5px 8px;
        width: 100%;
        border-radius: 4px;
        color: blanchedalmond; margin:5px 10px;">' . $error . '</p>';
                    }
                }
                ?>
                <form action="" method="post">

                    <!-- <p><a href="logout.php"> <span style="color:red; float:right;">Logout</span></a></p>
    <div class="input-name">
     -->
                    <div class="input-name">
                        <label>Current Password </label>
                        <input type="password" placeholder="Enter Your Current Password" name="currentPassword" class="text-name" id="current-password">
                        <input type="checkbox" onclick="showPassword('current-password')" style=" margin-top: 25px; "> Show Password
                    </div>
                    <div class="input-name">
                        <label>New Password </label>
                        <input type="password" placeholder="Enter Your New Password" name="password" class="text-name" id="new-password">
                        <input type="checkbox" onclick="showPassword('new-password')" style=" margin-top: 25px; "> Show Password
                    </div>
                    <div class="input-name">
                        <label>Confirm New Password</label>
                        <input type="password" placeholder="Enter Your New Password Again" name="passwordConfirm" class="text-name" id="confirm-password">
                        <input type="checkbox" onclick="showPassword('confirm-password')" style=" margin-top: 25px; "> Show Password
                    </div>
                    <div class="input-name">
                        <button name="change_password" class="button">Change Password</button>
                    </div>
                </form>
        </div>
    </div>
    </div>
    <script>
        function showPassword(inputId) {
            var x = document.getElementById(inputId);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
<?php
require_once("footer.php");
?>

</html>