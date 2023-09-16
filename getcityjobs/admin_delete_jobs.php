<?php
require_once("database/config.php"); //for connction to server
error_reporting(0); // for disable error reporting 

$job_id =$_GET['id'];
$sql_query="DELETE FROM job WHERE id = '$job_id'";


$data=mysqli_query($dbc,$sql_query);

if($data){

    header("location:admin_manage_jobs.php?echo 'Post Deleted'=1");
  }
  else
  {
      $error[]='Somethings Went Wrong';
  }
  ?>