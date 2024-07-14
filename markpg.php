<?php
if(isset($_POST['upload']))
{
    require 'dbh.inc.php';
    $post_sid = $_POST['sid'];
    $post_sname = $_POST['sname'];
    $post_sem = $_POST['sem'];
    $post_code = $_POST['code'];
    #$post_link = $_POST['link'];
    if (empty( $post_sid) || empty( $post_sname)|| empty($post_sem) || empty($post_code))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='attendencepg.php'; </script>";
    }
    else
    { 
        $sql = "INSERT INTO attendence1 (stid, stname , sem ,code)
        VALUES ('$post_sid', '$post_sname', '$post_sem ', '$post_code')";
        if ($conn->query($sql) === TRUE) 
        {
            echo "<script type='text/javascript'> alert('Uploaded successfully.'); window.location='attendencepg.php'; </script>";
        } 
        else 
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occurred.'); window.location='attendencepg.php'; </script>";
        }
    }
    $conn->close();
}
else                                                                    
{
    echo "<script type='text/javascript'> window.location='attendencepg.php'; </script>";
}
?>