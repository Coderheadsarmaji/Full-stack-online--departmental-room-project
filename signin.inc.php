<?php
if(isset($_POST['login-submit']))
{
    require 'dbh.inc.php';
    $userid= $_POST['uid'];
    $password = $_POST['pwd'];
    if(empty($userid) || empty($password))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='login.php'; </script>";
    }
    else
    {
        $sql = "SELECT * FROM users WHERE uid=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occured.'); window.location='login.php'; </script>";
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $userid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result))
            {
                $pwdCheck = password_verify($password, $row['pwd']);
                if($pwdCheck == false)
                {
                    echo "<script type='text/javascript'> alert('You have entered a wrong password.'); window.location='login.php'; </script>";
                }
                else if($pwdCheck == true)
                {
                    session_start();
                    $_SESSION['Id'] = $row['id'];
                    $_SESSION['userid'] = $row['uid'];
                    echo "<script type='text/javascript'> alert('You are successfully logged in.');window.location='homepage.php' </script>";
                }
                else
                {
                    echo "<script type='text/javascript'> alert('You have entered a wrong password.'); window.location='login.php'; </script>";
                }
            }
            else
            {
                echo "<script type='text/javascript'> alert('User doesnot exist.'); window.location='login.php'; </script>";
            }

        }
    }
}
else
{
    echo "<script type='text/javascript'> window.location='login.php'; </script>";
}

?>