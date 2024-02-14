<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .nav {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .nav h1 {
            margin: 0;
        }
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .mainform {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Limiting width for larger screens */
            width: 90%; /* Take 90% width of the container */
        }
        form {
            width: 100%; /* Form takes full width of the mainform div */
        }
        h3 {
            margin-top: 0;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="button"],
        input[type="reset"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            /* Buttons take up 48% width each */
            margin-right: 2%; /* Margin between buttons */
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #555;
        }

        /* Media Query for smaller screens */
        @media only screen and (max-width: 600px) {
            .mainform {
                width: 100%; /* Take full width on smaller screens */
            }
            input[type="submit"],
            input[type="button"],
            input[type="reset"] {
                width: 100%; /* Buttons take full width on smaller screens */
                margin-right: 0; /* No margin between buttons */
                margin-bottom: 10px; /* Add some space between buttons and inputs */
            }
        }
    </style>
</head>
<body>
    <div class="nav">
        <h1 class="animate__animated animate__bounce">Admin Page</h1>
    </div>
   
    <div class="main">
        <div class="mainform animate__animated animate__bounceInLeft">
            <form action="UpdateStatus.php" method="post">
                <h3>Student Details</h3>
                <label for="name">Name:</label><br>
                <select name="rollno" id="">
                    <option value="default">Select RollNo</option>
<?php
include("connection.php");
$YEAR=$_GET['year'];
$query="select * from PicnicTable where YEAR='$YEAR' and STATUS='Pending' order by ROLLNO ASC";
$result=$con->query($query);
while($row=$result->fetch_assoc())
{
    echo ' <option value="'.$row['ROLLNO'].'">'.$row['ROLLNO'].'</option>';
}
?>
                </select>
                <br>
               
                <label for="pending">Payment Status:</label><br>
                <select id="pending" name="status">
                    <option value="Pending">Pending</option>
                    <option value="Paid">Paid</option>
                </select><br>
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
                <input type="button" value="Exit" onclick="window.location.href='index.html'">
            </form>
        </div>
    </div>
</body>
</html>
