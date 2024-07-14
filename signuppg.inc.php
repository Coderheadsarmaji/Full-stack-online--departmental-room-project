<?php
if(isset($_POST['register-submit']))
{
    require 'dbh.inc.php';
    $username = $_POST['uname'];
    $userid = $_POST['uid'];
    $email = $_POST['emailid'];
    $password = $_POST['pwd'];
    $passwordConfirm = $_POST['pwd-confirm'];
    if (empty($username) || empty($userid) || empty($email) || empty($password) || empty($passwordConfirm))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='loginpg.php'; </script>";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z ]*$/", $username) && !preg_match("/^[a-zA-Z0-9]*$/", $userid))
    {
        echo "<script type='text/javascript'> alert('You have entered invalid values.'); window.location='loginpg.php'; </script>";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<script type='text/javascript'> alert('You have entered an invalid email id.'); window.location='loginpg.php'; </script>";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/", $username))
    {
        echo "<script type='text/javascript'> alert('You have entered an invalid name.'); window.location='loginpg.php'; </script>";
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $userid))
    {
        echo "<script type='text/javascript'> alert('You have entered an invalid student id.'); window.location='loginpg.php'; </script>";
    }
    else if ($password !== $passwordConfirm)
    {
        echo "<script type='text/javascript'> alert('The entered passwords donot match'); window.location='loginpg.php'; </script>";
    }
    else
    {
        $sql = "SELECT uid FROM user1 WHERE uid=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occured.'); window.location='loginpg.php'; </script>";
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $userid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0)
            {
                echo "<script type='text/javascript'> alert('User already taken.'); window.location='loginpg.php'; </script>";
            }
            else
            {
                $sql = "INSERT INTO user1 (uname, uid, emailid, pwd) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo "<script type='text/javascript'> alert('Sorry! An error occured.'); window.location='loginpg.php'; </script>";
                }
                else
                {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $username, $userid, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    echo "<script type='text/javascript'> alert('You are successfully registered.'); window.location='loginpg.php'; </script>";
                } 
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }
    else
    {
        echo "<script type='text/javascript'> window.location='loginpg.php'; </script>";
    }
?>


