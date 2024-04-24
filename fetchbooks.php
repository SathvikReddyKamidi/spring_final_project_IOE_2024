<?php
    // Including the database configuration file
    include 'inc_dbConfig.php'; 

    // Establishing a connection to the database
    $conn = new mysqli($host, $username, $password, $database);

    // Checking if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to select the latest 4 books ordered by date added
    $sql = "SELECT * FROM books ORDER BY date_added DESC LIMIT 4";
    
    // Executing the SQL query
    $result = $conn->query($sql);

    // Checking if there are any results returned by the query
    if ($result->num_rows > 0) {
        // Opening container to display books
        echo '<div id="bookContainer" style="display:flex; justify-content:space-around; text-align:center;">';
        
        // Looping through each fetched book
        while($row = $result->fetch_assoc()) {
            // Displaying each book as a div
            echo '<div class="books">';
            // Displaying book image with a click event to redirect to inc_QueryResults.php
            echo '<img src="img/'.$row['img'].'" width="200" height="200" alt="'.$row['name'].'" onclick="window.location.href=\'inc_QueryResults.php\'">';
            // Displaying book name
            echo '<h3>'.$row['name'].'</h3>';
            // Displaying book price
            echo '<p>$'.$row['price'].'</p>';
            echo '</div>'; // Close div for each book
        }
        echo '</div>'; // Close book-container
    } else {
        echo "0 results"; // Message if no books found
    }
    
    // Closing the database connection
    $conn->close();
?>
