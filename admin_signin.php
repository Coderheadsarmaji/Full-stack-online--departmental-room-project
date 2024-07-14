<?php
if(isset($_POST['login-submit']))
{
    require 'dbh.inc.php';
    $userid = $_POST['adminuid'];
    $admin_password = $_POST['unicode'];
    $query = "SELECT unicode FROM uniquecode ORDER BY id DESC LIMIT 1";
    $query_run=mysqli_query($conn,$query);
    $info=mysqli_fetch_assoc($query_run);
    if(empty($userid) || empty($admin_password))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='admin.php'; </script>";
    }
    else
    {
        $sql = "SELECT * FROM admins WHERE adminuid=?";
        
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occured.'); window.location='admin.php'; </script>";
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $userid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result))
            {
                $admin_pwdCheck = password_verify($admin_password, $info['unicode']);
                if($admin_pwdCheck == false)
                {
                    echo "<script type='text/javascript'> alert('You have entered a wrong password.'); window.location='admin.php'; </script>";
                }
                else if($admin_pwdCheck == true)
                {
                    session_start();
                    $_SESSION['adminId'] = $row['idAdmins'];
                    $_SESSION['userid'] = $row['adminuid'];
                    $_SESSION['unicode'] = $info['unicode'];
                    echo "<script type='text/javascript'> alert('You are successfully logged in'); window.location='adminpanel.php'; </script>";
                }
                else
                {
                    echo "<script type='text/javascript'> alert('You have entered a wrong password.'); window.location='admin.php'; </script>";
                }
            }
            else
            {
                echo "<script type='text/javascript'> alert('Admin doesnot exist.'); window.location='admin.php'; </script>";
            }

        }
    }
}
else
{
    echo "<script type='text/javascript'> window.location='admin.php'; </script>";
}
?>