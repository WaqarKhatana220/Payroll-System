<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsiter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Add.css">

    <?php include "Connection.php";?>
</head>


<body>

<div id="wrapper">
    <div id="menu">
        <h3 id="admin">admin</h3>
        <table id="menutable">
        <tr>
                <td><a href="Apanel.php">Dashboard</a></td>
            </tr>
            <tr>
                <td><a href="EmployeeInfo.php">Employee Information</a></td>
            </tr>
            <tr>
                <td><a href="">Compute Salary</a></td>
            </tr>
           
            <tr>
                <td><a href="">Settings</a></td>
            </tr>
        </table>
    </div>
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
    




    <form action="addverify.php" method="POST">
        <table>
            <tr>
                <td>
                    <h1>Employee Registration</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                    <?php
                    if(isset($_SESSION[fname]))
                    {
                        echo $_SESSION[fname];
                        unset($_SESSION[fname]);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                    <?php
                    if(isset($_SESSION[lname]))
                    {
                        echo $_SESSION[lname];
                        unset($_SESSION[lname]);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="designation" id="designation" placeholder="Dsignation">
                    <?php
                    if(isset($_SESSION[designation]))
                    {
                        echo $_SESSION[designation];
                        unset($_SESSION[designation]);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                    <?php
                    if(isset($_SESSION[address]))
                    {
                        echo $_SESSION[address];
                        unset($_SESSION[address]);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                    <?php
                    if(isset($_SESSION[city]))
                    {
                        echo $_SESSION[city];
                        unset($_SESSION[city]);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                    <?php
                    if(isset($_SESSION[phone]))
                    {
                        echo $_SESSION[phone];
                        unset($_SESSION[phone]);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" name="add" id="add" value="Add"></td>
            </tr>
           
        </table>
    </form>

    <?php
    if (isset($_SESSION["added"]))
    {
        echo "<script> alert('Record Added Successfully')  </script>";
        unset($_SESSION["added"]);
    }
    ?>

    
</body>
</html>