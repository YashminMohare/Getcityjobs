<?php


if (isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM job WHERE CONCAT(jobtitle, salary, qualification, workerrequire) LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM job";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "mydb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<?php
require_once("database/config.php");
require_once("user_nav.php");
if (!isset($_SESSION["login_sess"])) {
    header("location:login.php");
}

$result = mysqli_query($dbc, "SELECT * FROM job ");
?>
<html>

<head>
    <title>PHP HTML TABLE DATA SEARCH</title>
    <link rel="stylesheet" href="css/new_table1.css">
    <style>
        .text-name {
            width: 100%;
            padding: 8px 0px 8px 40px;

        }

        .text-name,
        .name {
            border: 1px solid #bdbdbd;
            border-radius: 8px;
            outline: none;
            transition: all 0.30s ease-in-out;
        }

        .text-name:hover,
        .name:hover {
            background-color: #e6e4e4bd;
        }

        .text-name:focus,
        .name:focus {
            border: 1px solid rgb(31, 196, 99);
            ;
            border-radius: 6px;


        }

        .btn1 {
            background-color: #8338e4;
            color: #fff;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .btn1:hover {
            background-color: #7434c7;
        }

        .btn2 {
            background-color: #10b610;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .btn2:hover {
            background-color: #0d9b0d;
        }
    </style>
</head>

<body>
    <?php include("Loader.php"); ?>

    <h1>J<span style="color:blueviolet">O</span>B LIST</h1>

    <form action="view_jobs.php" method="post">
        <div class="searchbox" style=" display: flex;
            justify-content: center;
    align-items: center;
    height: 50px;
   ">

            <div class="input-name">
                <input type="text" style="margin-bottom:19px;" name="valueToSearch" class="text-name" placeholder="Search Jobs..." value="<?php if (isset($valueToSearch)) {
                                                                                                            echo $valueToSearch;
                                                                                                        } ?>" >
            </div>

            <input id="search-btn" type="submit" name="search" value="search" class='btn2' style="margin-left: 25px;
padding: 5px 15px;
margin-bottom:19px;">
            </input>

            <button class='btn1' style="margin-left: 25px;
padding: 5px 15px;
margin-bottom:19px;">
                <a href="view_jobs.php" style="text-decoration:none; color:white">Refresh</a></button>

        </div>

        <table style=" margin-left: 90px;">
            <tr>
                <th>Job Title</th>
                <th>Required Qualification</th>
                <th>Salary Per Month in &#8377;</th>
                <th>Job Type</th>
                <th>Full Job Location</th>
                <th>Recruiter Name</th>
                <th>Email</th>
                <th>Job Timing</th>
                <th>Job Description</th>
                <th>About Company</th>
                <th>Worker Require</th>
                <th>Posting Date</th>
                <th>Joining Date</th>
                <th>Apply With Contact Number</th>
                <th>Apply With Whatsapp Number</th>
                <th>Apply With custom Email</th>
                <th>Save Post</th>
            </tr>

            <!-- populate table from mysql database -->
            <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                <tr>
                    <td class="wraper"><?php echo $row['jobtitle']; ?></td>
                    <td><?php echo $row['qualification']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><?php echo $row['jobtype']; ?></td>
                    <td><?php echo $row['joblocation']; ?></td>
                    <td><?php echo $row['recruitername']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['jobtiming']; ?></td>
                    <td><?php echo $row['jobdescription']; ?></td>
                    <td><?php echo $row['aboutcompany']; ?></td>
                    <td><?php echo $row['workerrequire']; ?></td>
                    <td><?php echo $row['postingdate']; ?></td>
                    <td><?php echo $row['joiningdate']; ?></td>
                    <td><a  style=" text-decoration: none;" href="tel:<?php echo $row['mobno']; ?>" target="_blank"><input type='button' value='Call' class='button2'></a></td>
                    <td><a  style=" text-decoration: none;" href="https://wa.me/<?php echo $row['wpno']; ?>" target="_blank"><input type='button' value='Whatsapp' class='button2'></a></td>
                    <td><a href="https://mail.google.com/mail" target="_blank"><input type='button' value='Email' class='button2' ></a></td>
                    <td><a href="account.php?id=$res[id]"><input type='submit' value='Save' class='button1'></a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </form>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>