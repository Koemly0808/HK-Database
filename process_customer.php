<?php
include "./PHP/db_conn.php";

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // Collect data from the form (validate and sanitize inputs as needed)
    $customer_select = $_POST["customer_select"];
    $service_select = $_POST["service_select"];
    $date = $_POST["date"];
    // Prepare an SQL query to insert data into the MySQL table
    $sql = "INSERT INTO customer_service (customer_select,service_select, date) VALUES (?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $customer_select, $service_select,$date);

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
