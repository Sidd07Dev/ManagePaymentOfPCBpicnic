<?php
include("connection.php");
$NAME=strtoupper($_POST["name"]);
$ROLLNO=$_POST["rollno"];
$YEAR=$_POST["year"];
$MEAL=$_POST["mealtype"];


$query1="Select * from PicnicTable";
$result1=$con->query($query1);
$flag=0;
while($row=$result1->fetch_assoc())
{
    if($row['ROLLNO']==$ROLLNO)
    {
        $flag=1;
        break;
    }
   
}
if($flag==0)
{
    $query="insert into PicnicTable (ROLLNO,NAME,YEAR,MEALTYPE) values ('$ROLLNO','$NAME','$YEAR','$MEAL') ";
$result=$con->query($query);
if($result)
{
    echo "congrats $ROLLNO you are registered";
}else{
    echo "already registered";
}
}else{

    echo "already exist $ROLLNO";
}
?>