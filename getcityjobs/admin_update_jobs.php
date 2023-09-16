<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widlabel=device-widlabel, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all_form_type4.css">
</head>

<body>
<?php include("Loader.php");?>


    <?php require_once("database/config.php"); 
    include("admin_all_nav.php");

// ..........................................

if(!isset($_SESSION['login_admin'])){

    header('Location:admin_login.php');
    
    }
    
// ..........................................

    ?>


    <?php
    $job_id = $_GET['id']; //super globel variable 

    $sql =  "SELECT * FROM job WHERE id = {$job_id} ";
    $result = mysqli_query($dbc, $sql) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {

    ?>
            <div class="container">
                <h2>Update Job Records</h2>
                <form method="POST" action="admin_update_jobs_data.php">

                    <div class="input-name">

                        <label>Job ID*</label>
                        <input type="text" value="<?php echo $row['id']; ?>" name="iid" class="name" readonly>

                    </div>
                    <div class="input-name">
                        <label>Job Title*</label>
                        <input type="text" value="<?php echo $row['jobtitle']; ?>" name="jobtitle" placeholder="Enter Job Title" class="name">

                    </div>
                    <div class="input-name">

                        <label>Required Qualification / Skills*</label>
                        <input type="text" value="<?php echo $row['qualification']; ?>" name="qualification" placeholder="Enter Required Qualification For Job " class="name">

                    </div>
                    <div class="input-name">

                        <label>Salary Per Month in &#8377;*</label>
                        <input type="number" value="<?php echo $row['salary']; ?>" name="salary" placeholder="Enter Salary For This Job" class="name">

                    </div>
                    <div class="input-name">

                        <label>Exact Job Location in Balaghat*</label>
                        <input type="text" value="<?php echo $row['joblocation']; ?>" name="joblocation" placeholder="Enter Exact Job Location in Balaghat" class="name">

                    </div>

                    <div class="input-name">

                        <label>Job Timing*</label>
                        <input type="text" value="<?php echo $row['jobtiming']; ?>" name="jobtiming" placeholder="Enter Job Timing " class="name">

                    </div>


                    <div class="input-name">
                        <label>Job Type*</label>
        
                            <input type="radio" name="jobtype" required value="full-time" <?php if ($row['jobtype'] == 'full-time') echo 'checked';
                                                                                 echo 'checked'; ?>> Full-time
                                         &ThinSpace; &ThinSpace;
                            <input type="radio" name="jobtype" required value="part-time" <?php if ($row['jobtype'] == 'part-time') echo 'checked';
                                                                                 echo 'checked'; ?>> Part-time
                        </label>
                    </div>




                    <div class="input-name">

                        <label>Recruiter Name*</label>
                        <input type="text" value="<?php echo $row['recruitername']; ?>" name="recruitername" placeholder=" Enter Recruiter Name" class="name" required>

                    </div>
                    <div class="input-name">

                        <label>Mobile Number</label>
                        <input type="text" value="<?php echo $row['mobno']; ?>" name="mobno" placeholder=" Enter Recruiter's Mobile Number" class="name" minlength="10" maxlength="10">

                    </div>
                    <div class="input-name">

                        <label>Whatsapp Number</label>
                        <input type="text" value="<?php echo $row['wpno']; ?>" name="wpno" placeholder=" Enter Recruiter's Whatsaap Number" class="name" minlength="10" maxlength="10">

                    </div>
                    <div class="input-name">

                        <label>Email*</label>
                        <input type="email" value="<?php echo $row['email']; ?>" name="email" class="name" placeholder="Enter Email Address Of Recruiter" readonly>

                    </div>
                    <div class="input-name">

                        <label>Job Description</label>
                        <input type="text" name="jobdescription" value="<?php echo $row['jobdescription']; ?>" class="name" placeholder=" Write Descrption For This Job "></input>

                    </div>
                    <div class="input-name">

                        <label>About Your Company / Shop / Business</label>
                        <input type="text" name="aboutcompany" value="<?php echo $row['aboutcompany']; ?>" class="name" placeholder="Write About Company / Shop / Business"></input>

                    </div>
                    <div class="input-name">

                        <label>Worker Require*</label>
                        <input type="number" name="workerrequire" value="<?php echo $row['workerrequire']; ?>" class="name" placeholder="Enter Worker Requirenment " required>

                    </div>
                    <div class="input-name">

                        <label>joining date</label>
                        <input type="date" value="<?php echo $row['joiningdate']; ?>" name="joiningdate" class="name" placeholder="Enter Joining Date">

                    </div>
                    <div class="input-name">

                        <label>Posting date*</label>
                        <input type="date" value="<?php echo $row['postingdate']; ?>" name="postingdate" class="name" placeholder="Enter Posting Date">

                    </div>

                    <div class="input-name">
                        <button type="submit" name="submit" class="button">Done</button>
                    </div>
                </form>
            </div>
    <?php
        }
    }
    ?>
    </div>
</body>

</html>