<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Slip</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Add.css">

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
    




    <form action="salaryverify.php" method="POST">
        <table>
            <tr>
                <td>
                    <h1>Generate Salary Slip</h1>
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
                    <input type="number" class="form-control" name="hoursworked" id="hoursworked" placeholder="No. of hours worked">
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
                    <input type="number" class="form-control" name="salaryperhour" id="salaryperhour" placeholder="Salary per hour">
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
                    <input type="number" min="0" max="100" class="form-control" name="taxdeduction" id="taxdeduction" placeholder="Tax %. e.g, 0.5%, 10%, 100%">
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
                <td><input type="submit" class="btn btn-primary" name="generate" id="generate" value="generate"></td>
            </tr>
           
        </table>
    </form>


 <?php
if(isset($_SESSION[notfound]))
{
    echo "<script> alert('No employee with the given first and last names exists. Please make sure that first and last names are correct. try using Employee Information tab.')   </script>";
    unset($_SESSION[notfound]);
}

elseif(isset($_SESSION["paycheck"]))
{

    unset($_SESSION[paycheck]);
}
 ?>



  

    
</body>
</html>