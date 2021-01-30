<?php
session_start();
if(!isset($_SESSION[logged]))
{
    header("Location: Admin.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Apanel.css">

    <title>Admin Dashboard</title>
</head>
<body>
    <div id="wrapper">
    <div id="menu">
        <h3 id="admin">admin</h3>
        <table id="menutable">
            <tr>
                <td><a href="EmployeeInfo.php">Employee Information</a></td>
            </tr>
            <tr>
                <td><a href="ComputeSalary.php">Compute Salary</a></td>
            </tr>
            <tr>
                <td><a href="Add.php">Register Employee</a></td>
            </tr>
            
        </table>
    </div>
    <div id="dashboard">
        <table id="dashboardtable">
            <tr>
                
                <td id="adminleft" class="dropdownbtn">
                    <div class="dropdown">
                       <p class="dropbtn">Admin</p>
                        <div class="dropdown-content">
                          <a href="Admin.php">Log out</a>
                        </div>
                      </div>

                </td>

            </tr>

        </table>

    </div>
    </div>

</body>
</html>
<?php


?>