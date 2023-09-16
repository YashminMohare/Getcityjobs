<!DOCTYPE html>
<?php
require_once("database/config.php");
//  do no apply this file - require_once("user_nav.php");

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
    $oldfname = $res['fname'];
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all_form_type4.css">
    <link rel="stylesheet" href="css/user_nav2.css">
    <link rel="stylesheet" href="css/language.css">
    <script src="js/language.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <title>my account </title>
</head>

<body>
<?php include("Loader.php");?>

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
    <?php
    if (isset($_POST['update_user'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $experience = $_POST['experience'];
        $qualification = $_POST['qualification'];
        $aqualification = $_POST['aqualification'];
        $sql = "SELECT * from users where fname='$fname'";
        $res = mysqli_query($dbc, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($oldfname != $fname) {
                if ($fname == $row['fname']) {
                    $error[] = ' name already Exist. Create Unique name';
                }
            }
        }
        if (!isset($error)) {
            $result = mysqli_query($dbc, "UPDATE users SET fname='$fname',lname='$lname',gender='$gender',experience='$experience',qualification='$qualification',aqualification='$aqualification' WHERE email='$email'");
            if ($result) {
                header("location:account.php?profile_updated=1");
            } else {
                $error[] = 'Somethings Went Wrong';
            }
        }
    }
    ?>
    <div class="container">
        <h2>Edit Your Profile</h2>
        <div class="form-container">
            <form method="POST" action="">

                <div class="input-name">
                    <label for="fname">First Name*</label>
                    <input type="text" placeholder="Enter Your First Name" value="<?php echo $fname; ?>" name="fname" class="name" required>
                </div>
                <div class="input-name">
                    <label for="lname">Last Name*</label>
                    <input type="text" placeholder="Enter Your Last Name" value="<?php echo $lname; ?>" name="lname" class="name"  required>
                </div>

                <div class="input-name">
                    <label>Email*</label>
                    <input type="email" placeholder="Enter Your Last Name" value="<?php echo $email; ?>" name="email" class="name" readonly>
                </div>

                <div class="input-name">
                    <label>Gender*</label>
                    <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?> required> Male &ThinSpace;
                    <!-- <label for="male">Male</label> -->
                    <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?> required> Female &ThickSpace;
                    <!-- <label for="female">Female</label> -->
                    <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?> required> Other
                    <!-- <label for="other">Other</label> -->
                </div>

                <div class="input-name">
                    <label>Experience</label>
                    <input type="text" placeholder="How much Experience you have *for jobseeker*" value="<?php echo $experience; ?>" name="experience" class="name">
                </div>

                <div class="input-name">

                    <label>Highest Qualification</label>
                    <input type="text" placeholder="Enter Your Highest Qualification *for jobseeker*" value="<?php echo $qualification; ?>" name="qualification" class="name">
                </div>
                <div class="input-name">

                    <label>Additional Qualification</label>
                    <input type="text"  placeholder="Enter Your Additional Qualification *for jobseeker*"  value="<?php echo $aqualification; ?>" name="aqualification" class="name">
                </div>

                <div class="input-name">
                    <button name="update_user" class="button" onclick="return confirm('Are you sure you want to update your job post? ')" >Update Profile</button>
                </div>
            </form>
        </div>
    </div>

</body>
<?php 
 require_once("footer.php");
?>
</html>