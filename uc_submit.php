<?php
if(isset($_POST['submituc']))
{
    require 'dbh.inc.php';
    $uc = $_POST['unicode'];
    if (empty($uc))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='unicode.php'; </script>";
    }
    else
    {
        $admin_hashedPwd = password_hash($uc, PASSWORD_DEFAULT);
        $sql = "INSERT INTO uniquecode (unicode)
        VALUES ('$admin_hashedPwd')";
        if ($conn->query($sql) === TRUE) 
        {
            echo "<script type='text/javascript'> alert('Password changed successfully.'); window.location='unicode.php'; </script>";
        } 
        else 
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occurred.'); window.location='unicode.php'; </script>";
        }
    }
    $conn->close();
}
else
{
    echo "<script type='text/javascript'> window.location='unicode.php'; </script>";
}
?>