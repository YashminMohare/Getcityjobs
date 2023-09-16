<?php
include("database/config.php");

$job_id = $_POST['iid'];
$job_title = $_POST['jobtitle'];
$job_qualification = $_POST['qualification'];
$job_salary = $_POST['salary'];
$job_location = $_POST['joblocation'];
$job_timing = $_POST['jobtiming'];
$job_type = $_POST['jobtype'];
$recruiter_name = $_POST['recruitername'];
$mobno = $_POST['mobno'];
$wpno = $_POST['wpno'];
$email = $_POST['email'];
$job_discription = $_POST['jobdescription'];
$about_company = $_POST['aboutcompany'];
$worker_require = $_POST['workerrequire'];
$posting_date = $_POST['postingdate'];
$joining_date = $_POST['joiningdate'];

$sql_query="UPDATE job SET id='$job_id', jobtitle ='$job_title', qualification ='$job_qualification' ,  salary ='$job_salary',joblocation = '$job_location',jobtiming ='$job_timing',jobtype ='$job_type',recruitername ='$recruiter_name',mobno ='$mobno ',wpno ='$wpno ',email ='$email ',jobdescription ='$job_discription',aboutcompany='$about_company',workerrequire ='$worker_require', postingdate='$posting_date', joiningdate='$joining_date' WHERE id='$job_id'";


$result = mysqli_query($dbc, $sql_query);

if($result)
{
    echo "Record Updated Successfully";
    header("Location: admin_manage_jobs.php");
}
else{
    echo "Failed to Updated Record:" . mysqli_error($dbc);
}

mysqli_close($dbc);


?>

