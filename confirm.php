<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Purchase Confirmation</title>
    <!-- Link to external stylesheet for book details page -->
    <link rel="stylesheet" href="book_details.css"> 
    <!-- Internal styles for additional styling -->
    <style>
      /* Additional styles for purchase confirmation page */
      .confirmation {
        text-align: center;
        margin-top: 50px;
      }
      .emoji {
        font-size: 48px;
        line-height: 48px;
      }
    </style>
  </head>
  <body>
    <!-- Include navigation menu -->
    <?php 
      include("nav.php"); 
      // Include database class file
      include("inc_databaseClass.php");
      
      // Check if the form was submitted
      if(isset($_POST["buyNow"])){
        // Check if quantity was provided
        if(isset($_POST["quantity"])) {
          // Get input quantity
          $inputquantity=$_POST["quantity"];
          // Calculate updated quantity
          $updatedquantity=$_POST["actualQuantity"]-$inputquantity;
          // Create an instance of DatabaseClass
          $dbClass=new DatabaseClass;
          // Get book name from form data
          $bookName=$_POST["name"];
          // Construct SQL query to update book quantity
          $sqlUpdate="UPDATE books SET quantity = $updatedquantity WHERE name='$bookName';";
          // Execute the update query
          $resultFav=$dbClass->Select($sqlUpdate);
        }
      }
    ?>
    <!-- Confirmation message section -->
    <div class="confirmation">
      <!-- Heading for confirmation message with an emoji -->
      <h1>🎉 You bought this book! 📚</h1>
      <!-- Emoji as a separate element with class for styling -->
      <p class="emoji">😃</p>
      <!-- Additional message or action links -->
      <p><a href="index.php">Continue Shopping</a></p>
    </div>
  </body>
</html>
