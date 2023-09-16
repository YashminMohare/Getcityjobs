<?php require_once("database/config.php");
include("admin_all_nav.php");

// ..........................................

if (!isset($_SESSION['login_admin'])) {

    header('Location:admin_login.php');
}

// ..........................................


?>


<?php
$user_id = $_GET['id']; //super globel variable 

$sql_query = "SELECT * FROM users WHERE id = {$user_id}";
$result = mysqli_query($dbc, $sql_query) or die("Query Unsuccessful");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/all_form_type4.css">
            <title>Document</title>
        </head>

        <body>
        <?php include("Loader.php");?>

            <div class="container">
                <h2>Update Users Details</h2>
                <div class="form-container">
                    <form method="POST" action="admin_update_users_data.php">

                        <div class="input-name">
                            <label>User ID*</label>
                            <input type="text"  value="<?php echo $row['id']; ?>" name="id" class="name" readonly>
                        </div>

                        <div class="input-name">
                            <label>First Name*</label>
                            <input type="text" placeholder="Enter User's First Name" value="<?php echo $row['fname']; ?>" name="fname" class="name" required>
                        </div>

                        <div class="input-name">
                            <label>Last Name*</label>
                            <input type="text" placeholder="Enter User's Last Name" value="<?php echo $row['lname']; ?>" name="lname" class="name" required>
                        </div>

                        <div class="input-name">
                            <label>Email*</label>
                            <input type="email" value="<?php echo $row['email']; ?>" name="email" class="name" readonly>
                        </div>

                        <div class="input-name">
                            <label>Gender*</label>
                            <input type="radio" required name="gender" value="Male" <?php if ($row['gender'] == 'Male') {
                                                                                echo 'checked';
                                                                            } ?>> Male &ThinSpace;
                            <input type="radio" required name="gender" value="Female" <?php if ($row['gender'] == 'Female') {
                                                                                    echo 'checked';
                                                                                } ?>> Female &ThinSpace;
                            <input type="radio" required name="gender" value="Other" <?php if ($row['gender'] == 'Other') {
                                                                                echo 'checked';
                                                                            } ?>> Other
                        </div>



                        <div class="input-name">
                            <label>Experience</label>
                            <input type="text" placeholder="Enter User's Experience" value="<?php echo $row['experience']; ?>" name="experience" class="name">
                        </div>

                        <div class="input-name">
                            <label>Qualification</label>
                            <input type="text" placeholder="Enter User's Qualification" value="<?php echo $row['qualification']; ?>" name="qualification" class="name">
                        </div>

                        <div class="input-name">
                            <label>Additional Qualification</label>
                            <input type="text" placeholder="Enter User's Additional Qualification" value="<?php echo $row['aqualification']; ?>" name="aqualification" class="name">
                        </div>

                        <div class="input-name">
                            <label>Signup Date*</label>
                            <input type="date" value="<?php echo $row['date']; ?>" name="date" class="name" readonly>
                        </div>

                        <div class="editbutton">
                            <button type="submit" name="submit" class="button" onclick="return confirm('Are you sure want to update the details of <?php echo $row['fname']; ?> ?')"> Done</button>
                        </div>

                    </form>
                </div>
            </div>
    <?php
    }
}
    ?>
    </div>
        </body>

        </html>