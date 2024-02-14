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
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: white;
        }
        .even {
            background-color: #f2f2f2;
        }
        .odd {
            background-color: #ffffff;
        }
        .odd:hover, .even:hover {
            background-color: #ddd;
        }
        .back-btn {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .back-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="nav">
        <h1 class="animate__animated animate__bounce">Payment Status</h1>
    </div>
   
    <div class="main">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connection.php");
                $query="select * from PicnicTable";
                $result=$con->query($query);
                $flag=0;
                while($row=$result->fetch_assoc())
                {
                   
                    echo '<tr class="even">
                    <td>'.$row['ROLLNO'].'</td>
                    <td>'.$row['YEAR'].'</td>
                    <td>
                    <label>'.$row['STATUS'].'</label>
                    </td>
                </tr>';
             
                  
                }
                ?>
                <!-- <tr class="even">
                    <td>John Doe</td>
                    <td>1st</td>
                    <td>
                        <select>
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                        </select>
                    </td>
                </tr>
                <tr class="odd">
                    <td>Jane Smith</td>
                    <td>2nd</td>
                    <td>
                        <select>
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                        </select>
                    </td>
                </tr> -->
                <!-- Add more rows as needed -->

                <!-- Back button row -->
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <button class="back-btn" onclick="goBack()">Back</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
