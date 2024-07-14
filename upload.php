<?php
if(isset($_POST['upload']))
{
    require 'dbh.inc.php';
    $post_bname = $_POST['bname'];
    $post_bauthor = $_POST['bauthor'];
    $post_sem = $_POST['sem'];
    $post_link = $_POST['link'];
    if (empty( $post_bname) || empty( $post_bauthor) || empty($post_sem) || empty($post_link))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='library.php'; </script>";
    }
    else
    { 
        $sql = "INSERT INTO books (bname, bauthor , sem, link)
        VALUES ('$post_bname', '$post_bauthor', '$post_sem','$post_link')";
        if ($conn->query($sql) === TRUE) 
        {
            echo "<script type='text/javascript'> alert('Uploaded successfully.'); window.location='library.php'; </script>";
        } 
        else 
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occurred.'); window.location='library.php'; </script>";
        }
    }
    $conn->close();
}
else                                                                    
{
    echo "<script type='text/javascript'> window.location='library.php'; </script>";
}
?>