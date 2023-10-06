<?php
// Include your database connection script (e.g., db_conn.php)
include "./db_conn.php";

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the "posts" table
$sql = "SELECT customer_name, date, address, district, city, phone_number, car_number, brand_car, brand, engine, total_chair, driver_name, year, spray, fixed, description FROM posts";

// Execute the query
$result = $conn->query($sql);

// Initialize an array to store the data
$data = [];

// Check if there are results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            "customer_name" => $row['customer_name'],
            "date" => $row['date'],
            "address" => $row['address'],
            "district" => $row['district'],
            "city" => $row['city'],
            "phone_number" => $row['phone_number'],
            "car_number" => $row['car_number'],
            "brand_car" => $row['brand_car'],
            "brand" => $row['brand'],
            "engine" => $row['engine'],
            "total_chair" => $row['total_chair'],
            "driver_name" => $row['driver_name'],
            "year" => $row['year'],
            "spray" => $row['spray'],
            "fixed" => $row['fixed'],
            "description" => $row['description']
        ];
    }
}

// Close the database connection
$conn->close();

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
