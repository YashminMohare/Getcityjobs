<?php
require_once("database/config.php");
$id=$_GET['id'];
$result=mysqli_query($dbc,"Delete from job Where id=$id");
if($result) {
    header("location:view_my_jobs.php");
}
else {
    echo 'something went wrong';
}
?>
