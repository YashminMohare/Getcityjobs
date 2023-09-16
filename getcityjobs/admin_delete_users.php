<?php
require_once("database/config.php");
error_reporting(0);

$user_id=$_GET['id'];
$sql="DELETE FROM users WHERE id = '$user_id'";


$data1=mysqli_query($dbc,$sql);

if($data1){
    echo "Record Updated Successfully";
    header("Location: admin_manage_users.php");

}
else
{
    echo "Failed to Updated Record:" . mysqli_error($dbc);
}
?>