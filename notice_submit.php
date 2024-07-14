<?php
if(isset($_POST['send_notice']))
{
    require 'dbh.inc.php';
    $post_date = $_POST['submitdate'];
    $notice_subject = $_POST['nsubject'];
    $notice_message = $_POST['nmessage'];
    if (empty($post_date) || empty($notice_subject) || empty($notice_message))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='notice.php'; </script>";
    }
    else
    {
        $sql = "INSERT INTO notice (submitdate, nsubject, nmessage)
        VALUES ('$post_date', '$notice_subject', '$notice_message')";
        if ($conn->query($sql) === TRUE) 
        {
            echo "<script type='text/javascript'> alert('Notice sent successfully.'); window.location='notice.php'; </script>";
        } 
        else 
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occurred.'); window.location='notice.php'; </script>";
        }
    }
    $conn->close();
}
else
{
    echo "<script type='text/javascript'> window.location='notice.php'; </script>";
}
?>