<?php

session_start();
include "Connection.php";



if($_SERVER["REQUEST_METHOD"] == "POST" &&   isset($_POST["add"]))
{
    if ($conn)
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $desg = $_POST["designation"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];
        $check = TRUE;

        if(empty($_POST[fname]))
        {
            $check = FALSE;
            $_SESSION["fname"] = "*required field";
            header("Location: Add.php");
        }
        
        if(empty($_POST[lname]))
        {
            $check = FALSE;
            $_SESSION["lname"] = "*required field";
            header("Location: Add.php");

        }
        if(empty($_POST[designation]))
        {
            $check = FALSE;
            $_SESSION["designation"] = "*required field";
            header("Location: Add.php");

        }
        if(empty($_POST[address]))
        {
            $check = FALSE;
            $_SESSION["address"] = "*required field";
            header("Location: Add.php");

        }
        if(empty($_POST[city]))
        {
            $check = FALSE;
            $_SESSION["city"] = "*required field";
            header("Location: Add.php");

        }
        if(empty($_POST[phone]))
        {
            $check = FALSE;
            $_SESSION["phone"] = "*required field";
            header("Location: Add.php");

        }


        if($check){
            $sql = "INSERT INTO `Employees`(`FirstName`, `LastName`, `Designation`, `Address`, `City`, `Phone`) VALUES ('$fname', '$lname', '$desg', '$address', '$city', '$phone')";
        if(mysqli_query($conn, $sql))
        {
            echo "data added successfully";
            $_SESSION["added"] = 1;
            header("Location: Add.php");

        }
        else
        {
            die("error". mysqli_error($conn));
        }

        }

        
    }
}

?>
