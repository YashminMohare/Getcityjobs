<!DOCTYPE html>
<?php
require_once("database/config.php");
// do not add include this require_once("user_nav.php");

$jobid=$_GET['id'];
$email = $_SESSION["login_email"];
$findresult = mysqli_query($dbc, "SELECT * FROM job WHERE id='$jobid'");
if ($res = mysqli_fetch_array($findresult)) {
    $jobtitle = $res['jobtitle'];
    $qualification = $res['qualification'];
    $salary = $res['salary'];
    $mobno = $res['mobno'];
    $wpno = $res['wpno'];
    $email = $res['email'];
    $joblocation = $res['joblocation'];
    $jobtype = $res['jobtype'];
    $recruitername = $res['recruitername'];
    $jobtiming = $res['jobtiming'];
    $jobdescription = $res['jobdescription'];
    $aboutcompany = $res['aboutcompany'];
    $workerrequire = $res['workerrequire'];
    $joiningdate = $res['joiningdate'];
    $postingdate = $res['postingdate'];
    $id=$res['id'];
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
    "><a href="home_page.php" style="text-decoration:none; color:#fff" >HOME</a></button>

    <?php
    if (isset($_POST['update_job'])) {
        $jobtitle = $_POST['jobtitle'];
        $qualification = $_POST['qualification'];
        $salary = $_POST['salary'];
        $mobno = $_POST['mobno'];
        $wpno = $_POST['wpno'];
        $email = $_POST['email'];
        $jobtype = $_POST['jobtype'];
        $recruitername = $_POST['recruitername'];
        $joblocation = $_POST['joblocation'];
        $jobtiming = $_POST['jobtiming'];
        $jobdescription = $_POST['jobdescription'];
        $aboutcompany = $_POST['aboutcompany'];
        $workerrequire = $_POST['workerrequire'];
        $joiningdate = $_POST['joiningdate'];
        $postingdate = $_POST['postingdate'];
       



        $sql = "SELECT * from job where jobtitle='$jobtitle'";
        $res = mysqli_query($dbc, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
        }
        if (!isset($error)) {
            $result = mysqli_query($dbc, "UPDATE job SET jobtitle='$jobtitle',  qualification='$qualification',mobno='$mobno',wpno='$wpno',salary='$salary',jobtype='$jobtype',joblocation='$joblocation',jobtiming='$jobtiming',recruitername='$recruitername', jobdescription='$jobdescription',aboutcompany='$aboutcompany',workerrequire='$workerrequire',postingdate='$postingdate',joiningdate='$joiningdate' WHERE id='$jobid'");
            if ($result) {
                header("location:view_my_jobs.php?profile_updated=1");
            } else {
                $error[] = 'Somethings Went Wrong';
            }
        }
    }
    ?>
    <div class="container">
        <h2>Edit Your Job</h2>
        <div class="form-container">
            <form method="POST" action="">

                <div class="input-name">
                    <label>Job Title*</label>
                    <input type="text" value="<?php echo $jobtitle; ?>" name="jobtitle" class="name" placeholder="Enter Your Job Title" required>
                </div>

                <div class="input-name">
                    <label>Required Qualification / Skills*</label>
                    <input type="text" value="<?php echo $qualification; ?>" name="qualification" class="name" placeholder="Enter Required Qualification For Your Job " required>
                </div>
                <div class="input-name">
                    <label>Salary Per Month in &#8377;*</label>
                    <input type="number" value="<?php echo $salary; ?>" name="salary" class="name" placeholder="Enter How Much Do You Want To Pay For This Job ?" required>
                </div>

                <div class="input-name">
                    <label>Exact Job Location in Balaghat*</label>
                    <input type="text" value="<?php echo $joblocation; ?>" name="joblocation" placeholder="Enter Exact Job Location in Balaghat" class="name" required>
                </div>

                <div class="input-name">
                    <label>Job Type*</label>
                    <input type="radio" id="full-time" name="jobtype" value="full-time" <?php if ($jobtype == "full-time") echo "checked"; ?> required> Full-time
                    &ThinSpace; &ThinSpace;
                    <input type="radio" id="part-time"  name="jobtype" value="part-time" <?php if ($jobtype == "part-time") echo "checked"; ?> required> Part-time
                    
                </div>

                <div class="input-name">
                    <label>Job Timing*</label>
                    <input type="text" value="<?php echo $jobtiming; ?>" name="jobtiming" placeholder="Enter Your Job Timing " class="name" required>
                </div>
                <div class="input-name">
                    <label>Recruiter Name*</label>
                    <input type="text" value="<?php echo $recruitername; ?>" name="recruitername" class="name" placeholder="Enter Your Full Name " required>
                </div>
                <div class="input-name">
                    <label>Mobile Number</label>
                    <input type="text" value="<?php echo $mobno; ?>" name="mobno" class="name" placeholder="Enter Your Mobile Number " minlength="10" maxlength="10" >
                </div>
                <div class="input-name">
                    <label>Whatsapp Number</label>
                    <input type="text" value="<?php echo $wpno; ?>" name="wpno" class="name" placeholder="Enter Your Whatsapp Numberr " minlength="10" maxlength="10" >
                </div>
                <div class="input-name">
                    <label>Email*</label>
                    <input type="email" value="<?php echo $email; ?>" name="email" class="name" readonly required>
                </div>
                <div class="input-name">
                    <label>Job Description</label>
                    <input name="jobdescription" value="<?php echo $jobdescription; ?>" class="name" placeholder="Write A Description About Your Job"></input>
                </div>
                <div class="input-name">
                    <label>About Your Company / Shop / Business</label>
                    <input name="aboutcompany" value="<?php echo $aboutcompany; ?>" class="name" placeholder="Write About Your Company / Shop / Business "></input>
                </div>
                <div class="input-name">
                    <label>Worker Require*</label>
                    <input type="number" value="<?php echo $workerrequire; ?>" name="workerrequire" class="name" placeholder="Enter Hom Many Workers Do You Have Require ?" required>
                </div>
                <div class="input-name">
                    <label>Joining Date</label>
                    <input type="date" value="<?php echo $joiningdate; ?>" name="joiningdate" class="name" placeholder="Enter The Date Of Joining The Job ">
                </div>
                <div class="input-name">
                    <label for="today-date">Posting Date*</label>
                    <input type="date" id="today-date" name="postingdate" value="<?php echo date('Y-m-d'); ?>" class="name" readonly>
                </div>
                <div class="input-name">
                    <button name="update_job" class="button" onclick="return confirm('Are you sure you want to update your job post? ')">Done</button>
                </div>


            </form>
        </div>
    </div>

</body>
<?php
require_once("footer.php");
?>

</html>