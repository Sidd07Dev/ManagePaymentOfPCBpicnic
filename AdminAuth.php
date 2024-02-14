<?php
include("connection.php");
$UID=$_POST['username'];
$PASS=$_POST['password'];
$YEAR=$_POST['year'];
$query="select * from ADMIN";
if($UID=="admin" && $PASS=="admin" && $YEAR=="1st")
{
    $YEAR=urlencode($YEAR);
header('location:Admin.php?year='.$YEAR);
}else if($UID=="admin1" && $PASS=="admin1" && $YEAR=="2nd"){
    header('location:Admin.php?year='.$YEAR);

}
else if($UID=="admin2" && $PASS=="admin2" && $YEAR=="3rd"){
    header('location:Admin.php?year='.$YEAR);
}
else
{
    header("location:Auth.php");
}
?>