<?php
if(isset($_POST['submit']))
{
    require 'dbh.inc.php';
    $post_id = $_POST['submitid'];
    $quotes = $_POST['quotes'];
    if (empty($post_id) || empty($quotes))
    {
        echo "<script type='text/javascript'> alert('Some fields are empty.'); window.location='quotes.php'; </script>";
    }
    else
    {
        $sql = "INSERT INTO tablequotes (submitid, quotes)
        VALUES ('$post_id', '$quotes')";
        if ($conn->query($sql) === TRUE) 
        {
            echo "<script type='text/javascript'> alert('Quotes uploaded successfully.'); window.location='quotes.php'; </script>";
        } 
        else 
        {
            echo "<script type='text/javascript'> alert('Sorry! An error occurred.'); window.location='quotes.php'; </script>";
        }
    }
    $conn->close();
}
else
{
    echo "<script type='text/javascript'> window.location='quotes.php'; </script>";
}
?>