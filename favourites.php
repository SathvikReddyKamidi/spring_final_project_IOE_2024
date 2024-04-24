<?php
// Including the database class file
include("inc_databaseClass.php");

// Creating an instance of DatabaseClass
$dbClass = new DatabaseClass;

// Checking if the request method is POST and if 'favourites' parameter is set
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['favourites'])) {
    // Retrieving the selected favorite books
    $favorite_books = $_POST['favourites'];
    
    // SQL query to update the 'favourites' status for selected books
    $sqlUpdate = "UPDATE books SET favourites = TRUE WHERE name='$favorite_books';";
    
    // Executing the SQL query
    $resultFav = $dbClass->Select($sqlUpdate);
    
    // Checking if the update was successful
    if ($resultFav) {
        echo "Favorites updated successfully."; // Success message
    } else {
        echo "Error occurred"; // Error message
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Favorites</title>
      <script>
          // Automatically redirecting to the specified URL immediately
          window.location.href = "displayFavourites.php"; 
      </script>
  </head>
  <body>
      <!-- No content in the body as the page redirects automatically -->
  </body>
</html>
