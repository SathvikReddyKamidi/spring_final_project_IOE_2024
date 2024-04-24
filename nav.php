<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata for character encoding and page title -->
    <meta charset="UTF-8">
    <title>Book Categories</title>
    <!-- Linking to external stylesheets for navigation and general styling -->
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Header section -->
    <header>
      <div class="content-wrapper">
        <!-- Website title -->
        <h1>BBK PAPERBACK STORE</h1> 
      </div>
    </header>

    <!-- Navigation bar section -->
    <div class="navbar">
      <!-- Navigation links -->
      <a href="index.php">Home</a> 
      <!-- Link to display all books, with conditional class for active state -->
      <a href="inc_QueryResults.php?category=all" class="<?php echo ($select !== '') ? 'active' : ''; ?>">All Books</a>
      <!-- Link to display Fiction books, with conditional class for active state -->
      <a href="inc_QueryResults.php?category=Fiction" class="<?php echo ($select == 'Fiction') ? 'active' : ''; ?>">Fiction</a>
      <!-- Link to display Science Fiction books, with conditional class for active state -->
      <a href="inc_QueryResults.php?category=Science Fiction" class="<?php echo ($select == 'Science Fiction') ? 'active' : ''; ?>">Non-Fiction</a>
      <!-- Link to display Thriller books, with conditional class for active state -->
      <a href="inc_QueryResults.php?category=Thriller" class="<?php echo ($select == 'Thriller') ? 'active' : ''; ?>">Thriller</a>
      <!-- Link to display favorite books, positioned on the right side -->
      <a href="displayFavourites.php" style="float:right;display:block">Favourites</a>
    </div>

  
  </body>
</html>
