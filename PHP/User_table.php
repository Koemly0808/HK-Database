<!DOCTYPE html>
<html>
<head>
    <title>User Data Table</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../Css/table.css">
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
<body>
        <ul class="topnav">
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="right"><a href="#about">About</a></li>
          </ul>
    </body>
    <table class="table" id="data-table" style="margin-top:20px;">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Date</th>
                <th>Address</th>
                <th>District</th>
                <th>City</th>
                <th>Phone Number</th>
                <th>Car Number</th>
                <th>Brand Car</th>
                <th>Brand</th>
                <th>Engine</th>
                <th>Total Chair</th>
                <th>Driver Name</th>
                <th>Year</th>
                <th>Spray</th>
                <th>Fixed</th>
                <th>Description</th>
                <th>Action</th>
                <!-- Add more table headers for other columns here -->
            </tr>
        </thead>
        <tbody>
            <!-- Data will be displayed here -->
        </tbody>
    </table>

    <script>
    $(document).ready(function() {
        // Make an AJAX request to fetch data from your PHP script
        $.ajax({
            url: 'getData.php', // Replace with the actual path to your PHP script
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Iterate through the data and populate the table rows
                var table = $('#data-table tbody');
                $.each(data, function(index, row) {
                    var newRow = $('<tr>');
                    newRow.append($('<td>').text(row.customer_name));
                    newRow.append($('<td>').text(row.date));
                    newRow.append($('<td>').text(row.address));
                    newRow.append($('<td>').text(row.district));
                    newRow.append($('<td>').text(row.phone_number));
                    newRow.append($('<td>').text(row.car_number));
                    newRow.append($('<td>').text(row.brand_car));
                    newRow.append($('<td>').text(row.brand));
                    newRow.append($('<td>').text(row.engine));
                    newRow.append($('<td>').text(row.total_chair));
                    newRow.append($('<td>').text(row.driver_name));
                    newRow.append($('<td>').text(row.car_online));
                    newRow.append($('<td>').text(row.year));
                    newRow.append($('<td>').text(row.spray));
                    newRow.append($('<td>').text(row.fixed));
                    newRow.append($('<td>').text(row.description));
                    // Add more table cells for other columns here
                     // Add the action buttons to the action column
                     var actionCell = $('<td>');
                    var editButton = $('<button>').text('Edit');
                    var deleteButton = $('<button>').text('Delete');
                    
                    // Add click handlers or links for edit and delete actions
                    editButton.on('click', function() {
                        // Handle edit action for this row
                        // You can implement the edit logic here
                        console.log('Edit clicked for row with ID ' + row.id);
                    });
                    
                    deleteButton.on('click', function() {
                        // Handle delete action for this row
                        // You can implement the delete logic here
                        console.log('Delete clicked for row with ID ' + row.id);
                    });
                    
                    actionCell.append(editButton);
                    actionCell.append(deleteButton);
                    newRow.append(actionCell);
                    table.append(newRow);
                });
            },
            error: function() {
                alert('Error fetching data from the server.');
            }
        });
    });
    </script>
</body>
</html>
