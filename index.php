<?php
    // Include the database connection
    include('database.php');

    // SQL query to insert data into the database
    $sql = "INSERT INTO student_details (user_name, user_password) VALUES ('Salil', 'pineapple1')";

    // Execute the query using the connection
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        echo "Data inserted successfully.";
    } else {
        // Handle errors if the query fails
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
?>
