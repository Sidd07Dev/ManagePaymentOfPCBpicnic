<?php
include("connection.php");
$query = "SELECT COUNT(*) AS total FROM PicnicTable where MEALTYPE='Veg'"; // Added an alias 'total' for the count result
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Fetching the row
    $total = $row['total']; // Accessing the count value from the row
    echo "<h1>Total number of Veg: " . $total."</h1>"; // Echoing the count value
} else {
    echo "No rows found";
}
?>
