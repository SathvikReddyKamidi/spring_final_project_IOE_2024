<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Best Sellers</title>
    <!-- Include external stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style>
      /* Internal CSS styles for book container */
      .book-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 20px;
      }

      /* Internal CSS styles for individual book */
      .book {
        width: 200px;
        margin-bottom: 20px;
        text-align: center;
      }

      /* Internal CSS styles for book images */
      .book img {
        max-width: 100%;
        height: 200px;
        width: 200px;
      }
    </style>
  </head>
  <body>
    <!-- Header section -->
    <header>
      <div class="content-wrapper">
        <!-- Website title -->
        <h1>BBK PAPERBACK STORE</h1>
        <!-- Navigation menu -->
        <nav>
          <a id="home" href="index.php">Home</a>
          <a href="inc_QueryResults.php">Menu</a>
          <a href="best.php">Best&nbsp;Sellers</a>
          <a href="reviews.php">Reviews</a>
          <a href="about.php">About&nbsp;Us</a>
          <a href="contact.php">Contact&nbsp;Us</a>
        </nav>  
      </div>
    </header>
    <!-- Heading for best sellers section -->
    <h2>Best Sellers</h2>
    <!-- Container for displaying books -->
    <div class="book-container" id="bookContainer">
      <!-- Placeholder for dynamically added books -->
    </div>

    <!-- Include JavaScript file for handling best sellers functionality -->
    <script src="bestsellers.js"></script>

    <footer>
      <p>&copy; <?php echo date("Y"); ?> BBK Online Bookstore</p>
    </footer>

  </body>
</html>
