<?php
    // Including navigation menu
    include("nav.php");
    // Including database class file
    include("inc_databaseClass.php");
    // Creating an instance of DatabaseClass
    $dbClass=new DatabaseClass;
    // SQL query to select favourite books from the database
    $sql="SELECT * FROM books WHERE favourites=TRUE";
    // Executing the SQL query
    $results=$dbClass->Select($sql);

    // Checking if there are any results returned by the query
    if (mysqli_num_rows($results) > 0) {
        // Looping through each fetched book
        while ($fetch_book = mysqli_fetch_assoc($results)) {
?>
    <!-- Linking to an external stylesheet for book design -->
    <link rel="stylesheet" href="design.css"> 
    <!-- Container for each book -->
    <div class="box" style="width: 255px; height:355px;">
        <!-- Link to the book details page with book ID and name as parameters -->
        <a href="book_details.php?details=<?php echo $fetch_book['bid']; echo '-name=', $fetch_book['name']; ?>">
            <!-- Displaying book image -->
            <img style="height: 200px;width: 200px;margin: 25px;" class="books_images" src="../BadeBadinehalKamidi/img/<?php echo $fetch_book['img']; ?>" alt="Book Image">
        </a>
        <!-- Container for book details -->
        <div style="text-align:left ;">
            <!-- Displaying book name -->
            <div style="font-weight: 500; font-size:18px; text-align: center; " class="name"> <?php echo $fetch_book['name']; ?></div>
        </div>
        <!-- Displaying book price -->
        <div class="price">Price: $ <?php echo $fetch_book['price']; ?>/-</div>
        <!-- Form to submit book details to book details page -->
        <form action="book_details.php" method="POST">
            <!-- Hidden input fields to store book details -->
            <input class="hidden_input" type="hidden" name="book_name" value="<?php echo $fetch_book['name'] ?>">
            <input class="hidden_input" type="hidden" name="book_id" value="<?php echo $fetch_book['bid'] ?>">
            <input class="hidden_input" type="hidden" name="book_image" value="<?php echo $fetch_book['img'] ?>">
            <input class="hidden_input" type="hidden" name="book_price" value="<?php echo $fetch_book['price'] ?>">
            <!-- Button to view more details of the book -->
            <button name="knowMore" value="<?php echo $fetch_book['name'];?>">Buy Now</button>
            <!-- Button to remove the book from favourites -->
            <button name="remove" value="<?php echo $fetch_book['name'];?>" formaction="removeFav.php">Remove</button>
        </form>
    </div>
<?php
        }
    } else {
        // Display message when no favourite products are added
        echo '<p class="empty">no products added yet!</p>';
    }
?>
