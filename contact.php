<!DOCTYPE html>
<html>
  <head>
      <!-- Adding a comment to indicate the creator of the page -->
      <!-- Created by Group-2 -->
      <meta charset="UTF-8">
      <title>Contact Us</title>
      <!-- Linking to an external stylesheet for styling the contact page -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- Including a JavaScript file to handle contact details retrieval -->
      <script type="text/javascript" src="contactus.js"></script>
  </head>
  <body>
    <!-- Header section with navigation menu -->
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
    <!-- Main content section -->
    <div style="text-align:center; color:black;">
        <!-- Heading for the contact page -->
        <h1>Contact US</h1>
        <!-- Subheading for the contact page -->
        <h2>You may reach out to any one of us😇.At your service✌️.</h2><br/>
    </div>
    <!-- Buttons to get respective member contact details -->
    <div class="container" id="cont" style="display: flex; justify-content: space-evenly">
        <!-- Button to get Sahithi's contact details -->
        <p><input type="button" id="sahithiDetails" value="Sahithi Bade" style="background-color: darkseagreen"><label id="sahithiLabel"></label></p>
        <!-- Button to get Sathvik's contact details -->
        <p><input type="button" id="sathvikDetails" value="Sathvik Reddy Kamidi" style="background-color: darkseagreen"><label id="sathvikLabel"></label></p>
        <!-- Button to get Karthik's contact details -->
        <p><input type="button" id="karthikDetails" value="Karthik Reddy Badinehal" style="background-color: darkseagreen"><label id="karthikLabel"></label></p>
    </div>

    <!-- Footer section -->
    <footer>
      <!-- Copyright notice with dynamic year -->
      <p>&copy; <?php echo date("Y"); ?> BBK Online Bookstore</p>
    </footer>
  </body>
</html>
