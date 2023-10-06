<?php
include "./PHP/db_conn.php";

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // Collect data from the form (validate and sanitize inputs as needed)
    $customer_name = $_POST["customer_name"];
    $date = $_POST["date"];
    $address = $_POST["address"];
    $district = $_POST["district"];
    $city = $_POST["city"];
    $phone_number = $_POST["phone_number"];
    $car_number = $_POST["car_number"];
    $brand_car = $_POST["brand_car"];
    $brand = $_POST["brand"];
    $engine = $_POST["engine"];
    $total_chair = $_POST["total_chair"];
    $driver_name = $_POST["driver_name"];
    $car_online = $_POST["car_online"];
    $year = $_POST["year"];
    $spray = $_POST["spray"];
    $fixed = $_POST["fixed"];
    $description = $_POST["description"];


    

    // Prepare an SQL query to insert data into the MySQL table
    $sql = "INSERT INTO posts (customer_name, date, address, district, city, phone_number, car_number, brand_car, brand, engine,
    total_chair, driver_name, car_online, year, spray, fixed, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssss", $customer_name, $date,$address,$district,$city,$phone_number,$car_number,$brand_car,$brand,$engine,$total_chair,
                        $driver_name,$car_online,$year,$spray,$fixed,$description);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Your Page Title</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php if (!empty($alertMessage)): ?>
            <div class="alert <?php echo $alertClass; ?>" id="alert">
                <?php echo $alertMessage; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="closeAlert()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <!-- Your HTML Form Here -->
        <!-- Make sure to include the form here with appropriate input fields -->
    </div>

    <!-- Include Bootstrap JS (jQuery and Popper.js are required too) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // JavaScript function to close the alert
        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }
    </script>
</body>
</html>
