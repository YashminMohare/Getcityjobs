<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new_table1.css">
    
    <title>view my jobs</title>
</head>

<body>

<?php include("Loader.php");?>

    <div class="container" style="display:flex;
    flex-direction: column; justify-content:center; align-items:center;">

        <h1>
            My Posted J<span style="color:blueviolet">O</span>BS
        </h1>
        <table style=" margin-left: 700px; ">
            <tr>
                <th>Job Title</th>
                <th>Required Qualification</th>
                <th>Salary Per Month in &#8377;</th>
                <th>Email</th>
                <th>Recruiter Name</th> 
                <th>Job Type</th>
                <th>full Job Location</th>
                <th>Job Timing</th>
                <th>Job Description</th>
                <th>About Company</th>
                <th>Worker Require</th>
                <th>Joining Date</th>
                <th>Posting Date</th>
                <th>Contact Number</th>
                <th>Whatsapp Number</th>
                <th>Update Post</th>
                <th>Delete Post</th>

            </tr>

            <?php
            require_once("database/config.php");
            require_once("user_nav.php");

            $email = $_SESSION["login_email"];
            $findresult = mysqli_query($dbc, "SELECT * FROM job WHERE email='$email'");

            if (mysqli_num_rows($findresult) > 0) {
                while ($res = mysqli_fetch_array($findresult)) {
                   
                    echo '<td>' . $res['jobtitle'] . '</td>';
                    echo '<td>' . $res['qualification'] . '</td>';
                    echo '<td>' . $res['salary'] . '</td>';
                    
                    echo '<td>'.  $res['email'] . '</td>';
                    echo '<td>'.  $res['recruitername'] . '</td>';
                    echo '<td>' . $res['jobtype'] . '</td>';
                    echo '<td>' . $res['joblocation'] . '</td>';
                    echo '<td>' . $res['jobtiming'] . '</td>';
                    echo '<td>' . $res['jobdescription'] . '</td>';
                    echo '<td>' . $res['aboutcompany'] . '</td>';
                    echo '<td>' . $res['workerrequire'] . '</td>';
                    echo '<td>' . $res['joiningdate'] . '</td>';
                    echo '<td>' . $res['postingdate'] . '</td>';

                    echo '<td style="color:blue;"><i class="bx bx-phone-call">'.  $res['mobno'] . '</td>';
                    echo '<td style="color:#00cb1a;"><i class="bx bxl-whatsapp" style="color:#00cb1a;">'.  $res['wpno'] . '</td>';

                    echo "<td><a href=\"edit_jobs.php?id=$res[id]\"><input type='submit' value='Update job' class='button2'></a>";
                    echo "<td><a href=\"delete_jobs.php?id=$res[id]\" onclick=\"return confirm('are you sure want to delete?')\"><input type='submit' value='Delete job' class='button3'></a>";

                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="13">No job posts found.</td></tr>';
            }

            ?>
        </table>
    </div>
</body>
<?php 
 require_once("footer.php");
?>
</html>
