<!DOCTYPE html>
<?php
require_once("database/config.php");
include("admin_all_nav.php");

$result = mysqli_query($dbc, "SELECT * FROM job ORDER by recruitername DESC");

// ..........................................

if(!isset($_SESSION['login_admin'])){

    header('Location:admin_login.php');
    
    }
    
// ..........................................

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_jobs</title>
    <link rel="stylesheet" href="css/new_table1.css">

    <div>
    </div>
</head>

<body>
<?php include("Loader.php");?>

    <h1>Manage J<span style="color:blueviolet">O</span>BS Details</h1>

    <table style=" margin-left: 97px;">
        <tr>
            <th>Post ID</th>
            <th>Job Title</th>
            <th>Required Qualification</th>
            <th>Salary Per Month in &#8377;</th>
            <th>Job location</th>
            <th>Job Timing</th>
            <th>Job type</th>
            <th>Recruiter Name</th>
            <th>Email</th>
            <th>Job description</th>
            <th>About Company</th>
            <th>Worker Require</th>
            <th>Posting Date</th>
            <th>Joining Date</th>
            <th>Apply With Contact Number</th>
            <th>Apply With Whatsapp Number</th>
            <th>Apply With Custom Email</th>
            <th>Save Post</th>
            <th>Update Post</th>
            <th>Delete Post</th>

        </tr>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $res['id'] . '</td>';
            echo '<td>' . $res['jobtitle'] . '</td>';
            echo '<td>' . $res['qualification'] . '</td>';
            echo '<td>' . $res['salary'] . '</td>';
            echo '<td>' . $res['joblocation'] . '</td>';
            echo '<td>' . $res['jobtiming'] . '</td>';
            echo '<td>' . $res['jobtype'] . '</td>';
            echo '<td>' . $res['recruitername'] . '</td>';
            echo '<td>' . $res['email'] . '</td>';
            echo '<td>' . $res['jobdescription'] . '</td>';
            echo '<td>' . $res['aboutcompany'] . '</td>';
            echo '<td>' . $res['workerrequire'] . '</td>';
            echo '<td>' . $res['postingdate'] . '</td>';
            echo '<td>' . $res['joiningdate'] . '</td>';

            echo '<td><a href="tel:' . $res['mobno'] . '" target="_blank" class="button2" style=" text-decoration:none;">call</a></td>';
            echo '<td><a href="https://wa.me/' . $res['wpno'] . ' "target="_blank" class="button2" style=" text-decoration:none;">WhatsApp</a></td>';

            echo "<td>  <a href=\"https://mail.google.com/mail\"  target='_blank'>   <input type='submit' value='Email' class='button2' ></a>"; //for apply with email
            echo "<td>   <input type='submit' value='Save' class='button1' readonly></a>"; //for save job button 


            
            echo "<td> <a href =\"admin_update_jobs.php?id=$res[id]\" ><input type='submit' value='Update' class='button1' on></a></td> ";// for edit
            
            echo "<td> <a href=\"admin_delete_jobs.php?id=$res[id]\" onclick=\"return confirm('Are you sure want to delete this job post ?')\"><input type='submit' value='Delete'class='button3'></a></td>";//for delete
        }
        ?>

    </table>


</body>

</html>