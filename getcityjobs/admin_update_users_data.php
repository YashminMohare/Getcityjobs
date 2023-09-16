<?php
include("database/config.php");

@$user_id = $_POST['id'];
@$first_name = $_POST['fname'];
@$last_name = $_POST['lname'];
@$email_address = $_POST['email'];
@$gender = $_POST['gender'];
@$experience = $_POST['experience'];
@$qualification = $_POST['qualification'];
@$aqualification = $_POST['aqualification'];
@$signup_date = $_POST['date'];

$sql_query="UPDATE users SET id='$user_id', fname ='$first_name', lname ='$last_name',email='$email_address', gender = '$gender',experience ='$experience',qualification ='$qualification',aqualification ='$aqualification ',date ='$signup_date' WHERE id='$user_id'";


$result = mysqli_query($dbc, $sql_query);

if($result)
{
    header("Location: admin_manage_users.php");
}
else{
    echo "Failed to Updated User Details" . mysqli_error($dbc);
}

mysqli_close($dbc);


?>

