<?php
  // Including the database class file
  include("inc_databaseClass.php");
  // Creating an instance of the DatabaseClass
  $dbClass=new DatabaseClass;

  // Checking if the request method is POST and 'remove' parameter is set
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove'])) {
    // Extracting the name of the book to remove from favorites
    $favorite_books = $_POST['remove'];
    // Displaying the name of the book to remove (for debugging purposes)
    echo $favorite_books;
    // Constructing the SQL query to update the 'favourites' status of the selected book to FALSE
    $sqlRemove = "UPDATE books SET favourites = FALSE WHERE name='" . $_POST['remove'] . "'";
    // Executing the SQL query to remove the book from favorites
    $results = $dbClass->Select($sqlRemove);
    // Checking if the SQL query was executed successfully
    if ($sqlRemove) {
      // If successful, display success message
      echo "Removed from favourites successfully.";
    } else {
      // If unsuccessful, display error message
      echo "Error occurred";
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata for character encoding and page title -->
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
      // Automatically redirect to the specified URL immediately
      window.location.href = "displayFavourites.php"; // Replace with the desired URL
    </script>
  </head>
  <body>
    <!-- Body content (empty in this case) -->
  </body>
</html>
