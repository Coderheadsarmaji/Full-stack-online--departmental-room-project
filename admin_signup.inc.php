<?php
if(isset($_POST['register-submit']))
{
    require 'dbh.inc.php';
    $admin_name = $_POST['adminname'];
    $userid = $_POST['adminuid'];
    $admin_emailid = $_POST['adminemailid'];
    if (empty($admin_name) || empty($userid) || empty($admin_emailid))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='admin.php'; </script>";
    }
    elseif (!filter_var($admin_emailid, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z ]*$/", $admin_name) && !preg_match("/^[a-zA-Z0-9]*$/", $userid))
    {
        echo "<script type='text/javascript'> alert('You have entered invalid values.'); window.location='admin.php'; </script>";
    }
    else if (!filter_var($admin_emailid, FILTER_VALIDATE_EMAIL))
    {
        echo "<script type='text/javascript'> alert('You have entered an invalid email id.'); window.location='admin.php'; </script>";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/", $admin_name))
    {
        echo "<script type='text/javascript'> alert('You have entered an invalid name.'); window.location='admin.php'; </script>";
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $userid))
    {
        echo "<script type='text/javascript'> alert('You have entered an invalid userid.'); window.location='admin.php'; </script>";
    }
    else
    {
        $sql = "SELECT adminuid FROM admins WHERE adminuid=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occured.'); window.location='admin.php'; </script>";
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $userid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0)
            {
                echo "<script type='text/javascript'> alert('Admin already taken.'); window.location='admin.php'; </script>";
            }
            else
            {
                $sql = "INSERT INTO admins (adminname, adminuid, adminemailid) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo "<script type='text/javascript'> alert('Sorry! An error occured.'); window.location='admin.php'; </script>";
                }
                else
                {
                    
                    mysqli_stmt_bind_param($stmt, "sss", $admin_name, $userid, $admin_emailid);
                    mysqli_stmt_execute($stmt);
                    echo "<script type='text/javascript'> alert('You are successfully registered.'); window.location='admin.php'; </script>";
                } 
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }
    else
    {
        echo "<script type='text/javascript'> window.location='admin.php'; </script>";
    }
?>