<!DOCTYPE html>
<?php
require_once("database/config.php");
include("admin_all_nav.php");


$result = mysqli_query($dbc, "SELECT * FROM users ORDER by id DESC");


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
    <title>Manage_users</title>
    <link rel="stylesheet" href="css/new_table1.css">
    <div>
    </div>
</head>

<body>
<?php include("Loader.php");?>

    <h1>Manage Users Details</h1>

    <table style=" margin-left: 97px;">
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Gender</th>
            <th>Experience</th>
            <th>qualification</th>
            <th>additional qualification</th>
            <th>Signup date</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $res['id'] . '</td>';
            echo '<td>' . $res['fname'] . '</td>';
            echo '<td>' . $res['lname'] . '</td>';
            echo '<td>' . $res['email'] . '</td>';
            echo '<td>' . $res['gender'] . '</td>';
            echo '<td>' . $res['experience'] . '</td>';
            echo '<td>' . $res['qualification'] . '</td>';
            echo '<td>' . $res['aqualification'] . '</td>';
            echo '<td>' . $res['date'] . '</td>';


            echo "<td> <a href =\"admin_update_users.php?id=$res[id]\" ><input type='submit' value='Update' class='button2'></a></td> ";// for edit user details      
            echo "<td> <a href=\"admin_delete_users.php?id=$res[id]\"  onclick=\"return confirm('Are you sure want to delete ?')\"><input type='submit' value='Delete' class='button3' ></a></td>";//for delete user
        }
        ?>

    </table>


</body>

</html>