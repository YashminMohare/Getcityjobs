<!DOCTYPE html>
<?php

require_once("database/config.php");
require_once("user_nav.php");

if (!isset($_SESSION["login_sess"])) {
    header("location:login.php");
}
$email = $_SESSION["login_email"];
$findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email='$email'");
if ($res = mysqli_fetch_array($findresult)) {

    $fname = $res['fname'];
    $lname = $res['lname'];
    $email = $res['email'];
    $gender = $res['gender'];
    $experience = $res['experience'];
    $qualification = $res['qualification'];
    $aqualification = $res['aqualification'];
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account2.css">
    <link rel="stylesheet" href="css/language.css">
    <script src="js/language.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <title>my account </title>
</head>

<body>
<?php include("Loader.php");?>

    <div class="container">
        <div class="loginformaccount">

            <?php
            if (isset($_GET['password_updated'])) {
                echo ' Password Updated';
            }
            if (isset($_GET['profile_updated'])) {
                echo 'Profile Updated ';
            }
            ?>

            <h2 class="profile">Welcome !&nbsp;<span style="color:rgb(16, 182, 16); font-size:27px; text-align:center;"><?php echo $fname; ?> &nbsp;<?php echo $lname ?></span></h2>
            <br>
            <hr>
            <br>
            <div class="textcontain">


                <div class="text">

                    <label>
                        First Name :
                    </label>
                    <span> <?php echo $fname; ?></span>
                </div>

                <div class="text"><label>
                        Last Name :</label>
                    <span><?php echo $lname; ?>
                </div>

                <div class="text">
                    <label>
                        Email :</label>
                    <span><?php echo $email; ?>
                </div>
                <div class="text">
                    <label>
                        Gender :</label>
                    <span><?php echo $gender; ?>

                </div>

                <div class="text">
                    <label> Experience :</label>
                    <span><?php echo $experience; ?>
                </div>

                <div class="text">
                    <label> Highest Qualification :</label>
                    <span><?php echo $qualification; ?>

                </div>
                <div class="text">
                    <label> Additional Qualification :</label>
                    <span><?php echo $aqualification; ?></span>

                </div>
            </div>
            <br>
            <div class="bottombutton">

                <div class="editbutton">
                    <a href="edit_profile.php"> <button class="edit_profile_btn">Edit Profile</button></a>
                </div>
                <div class="editbutton">
                    <a href="view_my_jobs.php"> <button class="view_your_job_btn">View Your Job</button></a>
                </div>

                <div class="editbutton">
                    <a href="change-password.php"> <button class="change_pass_btn">Change Password</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
require_once("footer.php");
?>

</html>