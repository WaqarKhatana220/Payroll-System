<?php
session_start();
include "Connection.php";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EmployeeInfo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee Information</title>
</head>
<body>

    <div id="wrapper">
    <form action="EmployeeInfo.php" method="POST">

        <div id="menu">
            <h3 id="admin">admin</h3>
            <table id="menutable">
                <tr>
                    <td><a href="Apanel.php">Dashboard</a></td>
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
                    <div id="searchmanip">

                    <td>

                        <input type="text" name="searchbar" id="searchbar"  placeholder="Search by Name">
                        <button type="submit" name="searchbtn" id="searchbtn"><i class="fa fa-search"></i></button>             
                    </td>
                </div>


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
</form>
            <?php
                if($conn)
                {
                    if(isset($_POST["searchbtn"]))
                    {
                        $_SESSION["yes"] = 1;
                        if(isset($_SESSION["yes"]))
                        {
                            if(!empty($_POST["searchbar"]))
                        {
                            $input = $_POST["searchbar"];
                            $arr = explode(" ", $input);
                            $fname = $arr[0];
                            $lname = $arr[1];
                            $sql = "SELECT * FROM `Employees` WHERE `FirstName`='$fname' OR `LastName` = '$fname'";
                            $result1 = mysqli_query($conn, $sql);
                            $sql2 = "SELECT * FROM `Employees` WHERE `LastName`='$lname' OR `FirstName`='$lname'";
                            $result2 = mysqli_query($conn, $sql2);
                            if(!mysqli_num_rows($result1)>0 && !mysqli_num_rows($result2)>0 )
                            {
                                echo "No Match";
                                session_destroy();
                            }

                            
                        }
                        }
                        unset($_SESSION["yes"]);

                        
                    }

                    
                }
            ?>

            <table id="resulttable" class="resulttable">
            <?php
            if(mysqli_num_rows($result1)>0)
            {
               echo " <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Designtion</th>
                <th>Address</th>
                <th>Phone</th>                
            </tr>";

                while($row = mysqli_fetch_assoc($result1))
                {        
           
                   echo" <tr>
                        <td>$row[FirstName]</td>
                        <td>$row[LastName]</td>
                        <td>$row[Designation]</td>
                        <td>$row[Address], $row[City]</td>
                        <td>$row[Phone]</td>
                    </tr>            
        ";
                    
                }
                
            }

            elseif(mysqli_num_rows($result2)>0)
            {
               echo " <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Designtion</th>
                <th>Address</th>
                <th>Phone</th>                
            </tr>";

                while($row = mysqli_fetch_assoc($result2))
                {        
           
                   echo" <tr>
                        <td>$row[FirstName]</td>
                        <td>$row[LastName]</td>
                        <td>$row[Designation]</td>
                        <td>$row[Address].$row[City]</td>
                        <td>$row[Phone]</td>
                    </tr>            
        ";
                    
                }
        }
            else
            {
                echo "<p id='einfo'>
                Enter Employee's Name To See Their Record</p>";
            }
            
            ?>
    </table>
        

        </div>

        

        
    
    
</body>
</html>