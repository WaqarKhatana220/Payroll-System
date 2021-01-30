<?php
include "Connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">

    <title>Admin Login</title>
</head>
<body>

   
    <form action="Admin.php" method="POST">
        <table>
            <tr>
                <td><h1 id="header">Login</h1></td>
            </tr>
            <tr>
                <td><input type="text" name="adminusername" id="adminusername" placeholder="Enter Username"></td>
            </tr>
            <tr>
                <td><input type="password" name="adminpassword" id="adminpassword" placeholder="Enter Password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="signin" id="signin" value="Login"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST["signin"]))
        {
            session_start();
            $_SESSION["start"] = 1;
            if(isset($_SESSION["start"]))
            {
            if ($conn)
            {
                $username = $_POST["adminusername"];
                $password = $_POST["adminpassword"];
               

                $sql = "SELECT * FROM `Admin` WHERE `Username` = '$username' and `Password` = '$password'";
                $result = mysqli_query($conn, $sql);      

                if(empty($_POST["adminusername"]) || empty($_POST["adminpassword"]))
                {
                    echo "<script> alert('You Left One Or More Fields Blank');  </script>";
                    unset($_SESSION["start"]);
                }
                elseif(mysqli_num_rows($result)==0)
                {
                    echo "<script> alert('Invalid Credentials');  </script>";
                    unset($_SESSION["start"]);
                }    
                elseif(mysqli_num_rows($result)==1)
                {
                    $_SESSION["logged"] = 1;
                    header("Location: Apanel.php");
                }
            
            }
            else
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            }

            
             
        }
       
    ?>
    
</body>
</html>