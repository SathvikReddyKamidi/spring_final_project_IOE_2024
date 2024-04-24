<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Book Details</title>
        <!-- Link to external stylesheet for book details page -->
        <link rel="stylesheet" type="text/css" href="book_details.css">
        <!-- Include navigation menu -->
        <?php include("nav.php");?>
        <!-- Include JavaScript file -->
        <script src='script.js'></script>
    </head>
    <body>
        
        <div class="container">
            <!-- Heading for the book details page -->
            <h1>Book Details</h1>
            <!-- Container to display book details -->
            <div id="book-details"></div>
        </div>
        
        <?php
            // Getting the book name from the POST request
            $bookName= $_POST["knowMore"];
            // Including the database class file
            include("inc_databaseClass.php");
            // Creating an instance of the DatabaseClass
            $dbClass=new DatabaseClass;
            // Query to fetch book details from the database based on the provided book name
            $sql = "SELECT * FROM `books` WHERE name='$bookName'";
            // Executing the query using the Select method of DatabaseClass
            $result=$dbClass->Select($sql);
            // Check if there are any results returned by the query
            if ($result->num_rows > 0) {
                // Loop through each row in the result set
                while($row = $result->fetch_assoc()) {
                    // Getting the quantity of the book
                    $quantity=$row["quantity"];
        ?>
        <!-- Form to submit the book purchase -->
        <form action='confirm.php' method='POST' id='buyForm'>
            <!-- Container for displaying book details -->
            <div class='book'>
                <!-- Display book image -->
                <div class='Img'><img class='book_image' src="../BadeBadinehalKamidi/img/<?php echo $row['img'];?>" alt=''></div>
                <!-- Display book title -->
                <h1 class='title'><?php echo $row["name"]; ?></h1>
                <!-- Display book description -->
                <div class='description'><h3>Description:</h3><br>
                    <p><?php  echo $row["description"]; ?> </p>
                </div>
                <!-- Display book author -->
                <p>Author:<?php echo $row["title"];?></p>
                <!-- Display book price -->
                <p>Price: $ <?php echo $row["price"]; ?></p>
                <!-- Input field for quantity selection -->
                <label for='quantity'>Quantity:</label>
                <input type='number' id='quantity' name='quantity' min='0' value='0'>
                <!-- Error message for quantity input -->
                <span class='error-message' id='quantity-error'></span>
                <!-- Hidden input field to store actual quantity available -->
                <input type='hidden' id='hidden_input' name="actualQuantity" value='<?php echo $quantity; ?>'>
                <!-- Hidden input field to store book name -->
                <input class="hidden_input" type="hidden" name="name" value="<?php echo $row['name'] ?>">
                <!-- Button to submit the purchase -->
                <button id="buyNow" name="buyNow">Buy Now</button>
            </div>
        </form>
            
        <?php
                }
            } else {
                echo "0 results";
            }
        ?>

    </body>
</html>
