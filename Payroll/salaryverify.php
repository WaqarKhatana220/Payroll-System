

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Slip</title>
    <link rel="stylesheet" href="Add.css">

</head>

<body>
    
<?php

session_start();
include "Connection.php";



if($_SERVER["REQUEST_METHOD"] == "POST" &&   isset($_POST["generate"]))
{
    if ($conn)
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $hoursworked = $_POST["hoursworked"];
        $salaryperhour = $_POST["salaryperhour"];
        $taxdeduction = $_POST["taxdeduction"];
        $check = TRUE;

        if(empty($_POST[fname]))
        {
            $check = FALSE;
            $_SESSION["fname"] = "*required field";
            header("Location: ComputeSalary.php");
        }
        
        if(empty($_POST[lname]))
        {
            $check = FALSE;
            $_SESSION["lname"] = "*required field";
            header("Location: ComputeSalary.php");

        }
        if(empty($_POST[hoursworked]))
        {
            $check = FALSE;
            $_SESSION["designation"] = "*required field";
            header("Location: ComputeSalary.php");

        }
        if(empty($_POST[salaryperhour]))
        {
            $check = FALSE;
            $_SESSION["address"] = "*required field";
            header("Location: ComputeSalary.php");

        }
        if(empty($_POST[taxdeduction]))
        {
            $check = FALSE;
            $_SESSION["city"] = "*required field";
            header("Location: ComputeSalary.php");

        }
        

        if($check)
        {
            $sql = "SELECT * FROM `Employees` WHERE `FirstName` = '$fname' AND `LastName` = '$lname'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)==1)
            {
                $gsalary = $hoursworked * $salaryperhour;
                $nsalary = $gsalary - ($gsalary *($taxdeduction / 100));
                $tax = $gsalary *($taxdeduction / 100);
                $_SESSION["paycheck"] = 1;
                $_SESSION["fnameS"] = strtoupper($fname);
                $_SESSION["lnameS"] = strtoupper($lname);
                $_SESSION["gsalary"] = $gsalary;
                $_SESSION["nsalary"] = $nsalary;
                $_SESSION["tax"] = $tax;

                echo "
                <div id='paycheckmain'>
                <div id='paycheck'>
                <div id='head'>
                <h1>Pay Slip</h1>
                </div>
                <div id='names'>
                $_SESSION[fnameS] $_SESSION[lnameS]
                </div>
                <div id='amount'>
                Gross Salary: $_SESSION[gsalary]$
                </div>
                <div id='tax'>
                Tax: $_SESSION[tax]$
                </div>
                <div id='amount'>
                Net Salary: $_SESSION[nsalary]$
                </div>
                <div id='buttons'>
                <div id='close'>
                <a href='ComputeSalary.php'><input type='submit' id='close' value='Close'></a>
                </div>
                <div id='close' onclick='window.print()'>
                <input type='submit' value='Print' id='close'>
                </div>
                </div>
                
                </div>
                </div>"
                ;
                
            }
            else
            {
                $_SESSION["notfound"] = "No employee with the given first and last names exists.";
                header("Location: ComputeSalary.php");
                
            }
        }

        
    }
}

?>
</body>
</html>