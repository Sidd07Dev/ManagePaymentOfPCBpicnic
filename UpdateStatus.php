<?php
include("connection.php");
$ROLLNO=$_POST['rollno'];
$STATUS=$_POST['status'];
if($ROLLNO=="default")
{
    header("location:Admin.php");
}else{
    $query="UPDATE PicnicTable SET STATUS='$STATUS' where ROLLNO='$ROLLNO'";
    $result=$con->query($query);
    if($result)
    {
        header("location:Admin.php");

    }
}
?>