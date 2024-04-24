<!DOCTYPE html>
<html>
<head>
    <!-- Created by Badinehal -->
    <!-- Metadata for character encoding and page title -->
    <meta charset="utf-8">
    <title>IOE Project Team 3</title>
    <!-- Linking to an external stylesheet for styling the page -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!-- Including a JavaScript file for handling recent books -->
    <script src="recentbooks.js"></script>
</head>

<body>
    <!-- Header section -->
    <header>
        <div class="content-wrapper">
            <!-- Website title -->
            <h1>BBK PAPERBACK STORE</h1>
            <!-- Navigation menu -->
            <nav>
                <a id="home" href="#Home">Home</a>
                <a href="inc_QueryResults.php">Menu</a>
                <a href="best.php">Best&nbsp;Sellers</a>
                <a href="reviews.php">Reviews</a>
                <a href="about.php">About&nbsp;Us</a>
                <a href="contact.php">Contact&nbsp;Us</a>
            </nav>  
        </div>
    </header>
    <!-- Main content section -->
    <main>
        <!-- Featured section with a heading and a quote -->
        <div class="featured">
            <h2>PULP FICTION</h2>
            <p>"Books are a uniquely portable magic"<br>✨Just shelf a book yourself and embrace the magic✨</p>
        </div>
        <!-- Container for recently added books -->
        <div id="bookContainer">
            <div class= "books">
                <!-- Heading for recently added books -->
                <h2>Recently Added Books</h2>
                <!-- Including PHP script to fetch and display recent books -->
                <?php include 'fetchbooks.php'; ?>
            </div>
        </div>
    </main>   
    <!-- Footer section -->
    <footer>
        <!-- Copyright notice with dynamic year -->
        <p>&copy; <?php echo date("Y"); ?> BBK Online Bookstore</p>
    </footer>
</body>
</html>
