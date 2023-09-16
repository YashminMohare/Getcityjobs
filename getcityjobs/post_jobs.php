<!DOCTYPE html>
<?php include("database/config.php");
// require_once("user_nav.php"); 

if (!isset($_SESSION['login_sess'])) {

    header('Location:login.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all_form_type4.css">
    <link rel="stylesheet" href="css/user_nav2.css">


    <title>Create Job</title>

</head>

<body>
<?php include("Loader.php");?>

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


    <div class="col">
        <?php
        if (isset($_POST['create_job'])) {
            extract($_POST);

            if (strlen($recruitername) < 3) {
                $error[] = 'please enter more than 3 characters in Recruiter name';
            }
            if (strlen($recruitername) > 20) {
                $error[] = 'please enter less than 20 characters in Recruiter name';
            }


            $sql = " select * from job where (recruitername='$recruitername' OR email='$email');";
            $res = mysqli_query($dbc, $sql);
            if (mysqli_num_rows($res) > 0) {
            }
            if (!isset($error)) {
                $date = date('Y-m-d');
                $options = array("cost" => 4);

                $result = mysqli_query($dbc, "INSERT INTO job values('','$recruitername','$mobno','$wpno','$email','$qualification','$jobtitle','$salary','$jobtype','$joblocation','$jobtiming','$jobdescription','$aboutcompany','$workerrequire','$postingdate','$date')");
                if ($result) {
                    $done = 2;
                } else {
                    $error[] = 'Failed : Somethimg went Wrong';
                }
            }
        }
        ?>
        <div class="col">
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<p class ="errmsg" style="display: flex;
            justify-content: center;
            align-items: center;
            background: red;
            padding: 5px 8px;
            width: 100%;
            border-radius: 4px;
            color: blanchedalmond; margin:5px 10px;">&#x26A0;' . $error . '</p>';
                }
            }
            ?>
        </div>
    </div>
    <div class="col">
        <?php if (isset($done)) {
            header("location:view_my_jobs.php");
        } else { ?>
            <div class="container">
                <h2>Post a J<span style="color:blueviolet">O</span>B </h2>
                <form method="post">
                    <div class="input-name">
                        <label for="recruitername">Recruiter Name*</label>
                        <input type="text" name="recruitername" placeholder="Enter Your Full Name " value="<?php if (isset($error)) {
                                                                                                                echo $recruitername;
                                                                                                            } ?>" class="name" required>
                    </div>
                    <div class="input-name">
                        <label for="mobno">Mobile Number</label>
                        <input type="text" name="mobno" placeholder="Enter Your Mobile Number " value="<?php if (isset($error)) {
                                                                                                                echo $mobno;
                                                                                                            } ?>" class="name" minlength="10" maxlength="10" >
                    </div>                                                                                       
                    <div class="input-name">
                        <label for="wpno">Whatsapp Number</label>
                        <input type="text" name="wpno" placeholder="Enter Your Whatsapp Number " value="<?php if (isset($error)) {
                                                                                                                echo $wpno;
                                                                                                            } ?>" class="name" minlength="10" maxlength="10">
                    </div>
                    <div class="input-name">
                        <label for="email">Email*</label>
                        <input type="email" name="email" readonly value="<?php echo $_SESSION['login_email']; ?>" class="text-name" >
                    </div>
                    <div class="input-name">
                        <label for="qualification">Required Qualification / Skills*</label>
                        <input type="text" name="qualification" placeholder="Enter Required Qualification For Your Job " value="<?php if (isset($error)) {
                                                                                                                                    echo $qualification;
                                                                                                                                } ?>" class="name" required>
                    </div>
                    <div class="input-name">
                        <label for="jobtitle">Job Title*</label>
                        <input type="text" name="jobtitle" placeholder="Enter Your Job Title" value="<?php if (isset($error)) {
                                                                                                            echo $jobtitle;
                                                                                                        } ?>" class="name" required>
                    </div>
                    <div class="input-name">
                        <label for="salary">Salary Per Month in &#8377;*</label>
                        <input type="number" name="salary" placeholder="Enter How Much Do You Want To Pay For This Job ?" value="<?php if (isset($error)) {
                                                                                                                                        echo $salary;
                                                                                                                                    } ?>" class="name" required>
                    </div>
                    <div class="input-name">
                        <label>Exact Job Location in Balaghat*</label>
                        <input type="text" name="joblocation" placeholder="Enter Exact Job Location in Balaghat" value="<?php if (isset($error)) {
                                                                                                                            echo $joblocation;
                                                                                                                        } ?>" class="name" required>
                    </div>
                    <div class="input-name">
                        <label>Job Type*</label>
                        <input type="radio" name="jobtype" value="Full Time" class="radio-button" required> Full Time
                        &ThinSpace; &ThinSpace;
                        <input type="radio" name="jobtype" value="Part Time" class="radio-button" required> Part Time
                    </div>
                    <div class="input-name">
                        <label>Job Timing*</label>
                        <input type="text" name="jobtiming" placeholder="Enter Your Job Timing " value="<?php if (isset($error)) {
                                                                                                            echo $jobtiming;
                                                                                                        } ?>" class="name" required>
                    </div>
                    <div class="input-name">
                        <label>Job Description</label>
                        <textarea name="jobdescription" cols="30" rows="10" placeholder="Write A Description About Your Job" value="<?php if (isset($error)) {
                                                                                                                                        echo $jobdescription;
                                                                                                                                    } ?>" class="name"></textarea>
                    </div>
                    <div class="input-name">
                        <label>About Your Company / Shop / Business</label>
                        <textarea name="aboutcompany" cols="30" rows="10" placeholder="Write About Your Company / Shop / Business " value="<?php if (isset($error)) {
                                                                                                                                                echo $aboutcompany;
                                                                                                                                            } ?>" class="name"></textarea>
                    </div>
                    <div class="input-name">
                        <label>Worker Require*</label>
                        <input type="number" name="workerrequire" placeholder="Enter How Many Workers Do You Have Require ?" value="<?php if (isset($error)) {
                                                                                                                                        echo $workerrequire;
                                                                                                                                    } ?>" class="name" required>
                    </div>
                    <div class="input-name">
                        <label>Joining Date</label>
                        <input type="date" name="joiningdate" placeholder="Enter The Date Of Joining The Job " value="<?php if (isset($error)) {
                                                                                                                            echo $joiningdate;
                                                                                                                        } ?>" class="name">
                    </div>
                    <div class="input-name">

                        <label for="today-date">Posting Date*</label>
                        <input type="date" id="today-date" name="postingdate" class="name" required readonly>
                    </div>

                    <script>
                        // Get today's date in YYYY-MM-DD format
                        const today = new Date().toISOString().substr(0, 10);

                        // Set the value of the input field to today's date
                        document.getElementById("today-date").value = today;
                    </script>


                    <div class="input-name">
                        <button name="create_job" onclick="return confirm('Are you sure you want to update your job post? ')" class="button">Create Job</button>
                    </div>
                </form>

            </div>
        <?php } ?>
    </div>

<!--**************************** LANGUAGE TRANSLATER -->
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    <style>
                        /* Hide language dropdown */
                        .goog-te-combo {
                            display: none;
                        }

                        /* Hide Google Translate attribution */
                        .goog-logo-link {
                            display: none !important;
                        }

                        .goog-te-gadget {
                            display: none !important;
                        }

                        .VIpgJd-ZVi9od-l4eHX-hSRGPd {
                            display: none;
                        }
                    </style>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en',
                                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
                                autoDisplay: false,
                                includedLanguages: 'hi,mr',
                                gaTrack: true,
                                gaId: 'YOUR_API_KEY',
                                googleAttribution: ''
                            }, 'google_translate_element');

                            // Add event listener to Hindi language hyperlink
                            var hindiLink = document.getElementById('hindi-link');
                            hindiLink.addEventListener('click', function() {
                                var langSelect = document.querySelector('select.goog-te-combo');
                                langSelect.value = 'hi';
                                langSelect.dispatchEvent(new Event('change'));
                            });

                            var marathiLink = document.getElementById('marathi-link');
                            marathiLink.addEventListener('click', function() {
                                var langSelect = document.querySelector('select.goog-te-combo');
                                langSelect.value = 'mr';
                                langSelect.dispatchEvent(new Event('change'));
                            });
                        }
                    </script>
<!-- ***************************** -->


</body>
<?php
require_once("footer.php");
?>

</html>